<?php
	session_start();

	if(isset($_SESSION['status'])){
		if($_SESSION['status'] == "OK"){

			$connection = mysqli_connect('127.0.0.1', 'root', '', 'mid_mini'); 
			$result = mysqli_query($connection, "select * from final");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome home</h1><a href="logout.php"> logout</a>
	<a href="profile.php" onclick="ajax_profile()"> profile</a>
	<a href="viewuser.php" onclick="ajax_user_list()"> user</a>
	<div id = "div1">
		
	</div>

</body>
<script type="text/javascript">
	
	function ajax_user_list(){

				  var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
				      document.getElementById("div1").innerHTML = this.responseText;
				    }
				  };

			  xhttp.open('POST', "userview.php", true);
			  xhttp.send();
			}

	function ajax_profile(){

				  var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
				      document.getElementById("div1").innerHTML = this.responseText;
				    }
				  };

			  xhttp.open('POST', "profile.php", true);
			  xhttp.send();
}
</script>
</html>


<?php
}else{
		header('location: login.php');
		}
	}else{
		header('location: login.php');
	}
?>