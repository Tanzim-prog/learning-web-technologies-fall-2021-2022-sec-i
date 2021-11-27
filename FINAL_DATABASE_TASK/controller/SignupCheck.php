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
					if ($email != "")
					{
						if ($dateofbirth != "")
						{
							$con = mysqli_connect('localhost', 'root', '', 'webtech');
							$sql = "insert into users values ('', '{$fullname}', '{$username}', '{$password}', '{$confirmpassword}', '{$email}', '{$dateofbirth}', 'admin')";
							
							if (mysqli_query($con, $sql))
							{
								header("location: ../views/Login.html");
							}
							else
							{
								echo "Error! Try again.";
							}
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