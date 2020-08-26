<?php
$user_name = $name_error = "";


	if($_SERVER["REQUEST_METHOD"] == "POST"){
		//$user_name = $_POST['user_name'];
		
		if(empty($_POST['user_name']))
			{ $name_error = "Name Cant be empty";}
		elseif (strlen($user_name)< 10) {
			$name_error = "Minimum 10 letters";
		}
		elseif(!preg_match("/^[a-zA-Z]*.-$/", $user_name)) {

			$name_error = "Only letters and white space allowed";
		}


	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name Form</title>
</head>
<body>

	<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="post">
		Name: <input type="text" name="user_name" value="" placeholder="">
		<br>
			<?php if(isset($name_error)){
				 echo $name_error;
				 
			}?>
		<br/> 
		<br/>



		<input type="submit" name="" value="Submit">
	</form>

<script>
function validateForm() {
  var x = document.forms["myForm"]["user_name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>


</body>
</html>