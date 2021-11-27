<?php
	$myfile = fopen('../model/GameSellerProfile.txt', 'r');
	$data = fread($myfile, filesize('../model/GameSellerProfile.txt'));
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Game Seller Profile</title>
</head>
<body>
	<p>Here are the Game Seller Profiles</p>
</body>
</html>


<?php
echo $data;
?>

<html>
<head>
	<title></title>
</head>
<body>
	<br> <br>
	<a href="GameSeller.html">Go Back</a>
</body>
</html>