<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<form id = "myForm"action="regcheck.php" method="post">
		<fieldset>
			<legend>Signup</legend>
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" id = "id" name="id"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" id = "username" name="username"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" id = "email" name="email"></td>
				</tr>
				
				<tr>
					<td>UserType</td>
					<td><input type="text" id = "usertype" name="usertype"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id = "password" name="password"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" id = "confirmpassword" name="confirmpassword"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit " onclick="checkForm()"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript" src="script,js"></script>
</body>
</html>