<?php

if(isset($_POST['submit']))
{
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$email = $_POST['email'];
	$dateofbirth = $_POST['dateofbirth'];

	if($fullname != "")
	{
		if ($username != "")
		{
			if($password != "")
			{
				if($confirmpassword == $password)
				{
					if($email != "")
					{
						if ($dateofbirth != "")
						{
							$newbuyerprofilefile = fopen('../model/BuyerProfile.txt', 'a');
							$newbuyerprofile = $fullname."|".$username."|".$password."|".$email."|".$dateofbirth."\r\n";
							fwrite($newbuyerprofilefile, $newbuyerprofile);
							fclose($newbuyerprofilefile);
					
							header("location: ExistingBuyer.php");
						}
						else
						{
							echo "Choose your date of birth";
						}
					}
					else
					{
						echo "Invalid email address, try again";
					}
				}
				else
				{
					echo "Password and confirm password does not match";
				}
			}
			else
			{
				echo "Invalid password, try again";
			}
		}
		else
		{
			echo "Invalid username, try again";
		}
	}
	else
	{
		echo "Invalid fullname, try again";
	}
}

?>


<html>
<head>
	<title>Create New Buyer Profile</title>
</head>
<body>
	<form method="post" action="NewBuyer.php">
		<fieldset>
			<legend>Create New Buyer Profile</legend>
			<table>
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="fullname" value=""></td>
				</tr>
				<tr>
					<td>User Name</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirmpassword" value=""></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td><input type="date" name="dateofbirth" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
			<a href="BuyerSection.html">Go Back</a>
		</fieldset>
	</form>
</body>
</html>