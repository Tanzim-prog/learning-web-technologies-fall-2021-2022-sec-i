<?php

if(isset($_POST['submit']))
{
	$companyname = $_POST['companyname'];
	$dealername = $_POST['dealername'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$email = $_POST['email'];
	$joiningdate = $_POST['joiningdate'];

	if($companyname != "")
	{
		if ($dealername != "")
		{
			if($password != "")
			{
				if($confirmpassword == $password)
				{
					if($email != "")
					{
						if ($joiningdate != "")
						{
							$newgamesellerprofilefile = fopen('../model/GameSellerProfile.txt', 'a');
							$newgamesellerprofile = $companyname."|".$dealername."|".$password."|".$email."|".$joiningdate."\r\n";
							fwrite($newgamesellerprofilefile, $newgamesellerprofile);
							fclose($newgamesellerprofilefile);
					
							header("location: ExistingGameSeller.php");
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
			echo "Invalid delear name, try again";
		}
	}
	else
	{
		echo "Invalid company name, try again";
	}
}

?>


<html>
<head>
	<title>Create New Game Seller Profile</title>
</head>
<body>
	<form method="post" action="NewGameSeller.php">
		<fieldset>
			<legend>Create New Game Seller Profile</legend>
			<table>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="companyname" value=""></td>
				</tr>
				<tr>
					<td>Dealer Name</td>
					<td><input type="text" name="dealername" value=""></td>
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
					<td>Joining Date</td>
					<td><input type="date" name="joiningdate" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
			<a href="GameSeller.html">Go Back</a>
		</fieldset>
	</form>
</body>
</html>