<!DOCTYPE html>
<html>
<head>
  <title>Reg</title>
</head>
<body>
	<form action="">
		<fieldset>
			<legend>Register New Employee</legend>
			Employer Name<input type="text" id="employername"> <br> 
			Company Name<input type="text" id="companyname"> <br>
			Contact No<input type="text" id="contactno"> <br>
			Username<input type="text" id="username"> <br>
			Password<input type="text" id="password"> <br>
			<h2></h2>
			<input type="button" value="Register" onclick="registerNewEmployee()">
		</fieldset>
	</form>
  <script>
    function registerNewEmployee() {
			var empName = document.getElementById('employername').value;
			var compName = document.getElementById('companyname').value;
			var contactNo = document.getElementById('contactno').value;
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;

      var xhttp = new XMLHttpRequest();
			xhttp.open('POST', 'abc.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('employername='+empName+'&companyname='+compName+'&contactno='+contactno+'&username='+username+'&password='+password);
			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					if (this.responseText == "Fields cannot be empty") {
						document.getElementsByTagName('h2')[0].innerHTML = this.responseText;
					}
					else if (this.responseText == "Success") {
						document.getElementsByTagName('h2')[0].innerHTML = this.responseText;
					}
					else {
						document.getElementsByTagName('h2')[0].innerHTML = this.responseText;
					}
				}
			}
    }

    </script>
	<input type="button" value="SearchEmployers" onclick="searchEmployer()">
	<script>
	
</body>
</html>