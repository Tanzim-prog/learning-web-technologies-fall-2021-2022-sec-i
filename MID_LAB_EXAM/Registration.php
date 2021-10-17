<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="post" action="RegistrationCheck.php">
		<fieldset>
			<legend>Registration</legend>
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="ID" value=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="Password" value=""></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="Confirm Password" value=""></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="Name" value=""></td>
				</tr>
				<tr>
					<td>User Type</td>
					<td><input type="hidden" name="usertype" value="" />
					<input type="radio" name="usertype" value="user">User
					<input type="radio" name="usertype" value="admin">Admin</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>