<?php

session_start();

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username != "")
	{
		if($password != "")
		{
			$con = mysqli_connect('localhost', 'root', '', 'webtech');
			$sql = "select * from users where username = '{$username}' and password = '{$password}'";
			$result = mysqli_query($con, $sql);
			$data = mysqli_fetch_assoc($result);
			print_r($data);

			if($username == $data['username'] && $password == $data['password'])
            	{
            		setcookie('flag', 'true', time()+3600,  '/');
				    header("location: ../views/Home.php");
				}
				else
				{
					echo "Invlid login. Check username or password.";
				}
		}
		else
		{
			echo "Invalid password";
		}
	}
	else
	{
		echo "Invalid username";
	}
}

?>