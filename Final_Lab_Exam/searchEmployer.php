<!DOCTYPE html>
<html >
<head>
  
  <title>Search</title>
</head>
<body>
  Search <input type="text" id="search" onkeyup="searchEmployers()">
  <p></p>
  <script>
    function searchEmployers() {
			var search = document.getElementById('search').value;

      var xhttp = new XMLHttpRequest();
			xhttp.open('POST', 'searchEmployerCheck.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('search='+search);
			xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
						document.getElementsByTagName('p')[0].innerHTML = this.responseText;
        }
      }
    }
  </script>
  
  
</body>
</html>