<?php 
	session_start();

	if(isset($_POST['submit']))
	{
		$id = $_POST['id'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		$name = $_POST['name'];
		$usertype = $_POST['usertype'];

		if($id != "")
		{
			if($password != "")
			{
				if($confirmpassword != "")
				{
					if($name != "")
					{
						if($usertype != "")
						{
							$_SESSION['id'] = $id;
							$_SESSION['password'] = $password;
							$_SESSION['confirmpassword'] = $confirmpassword;
							$_SESSION['name'] = $name;
							$_SESSION['usertype'] = $usertype;

							header('location: login.html');
						}

						else
						{
							echo "invalid email....";
						}
					}
					else
					{
						echo "invalid password....";
					}
				}
				else
				{
					echo "invalid username....";
				}
			}
		}
	}
?>