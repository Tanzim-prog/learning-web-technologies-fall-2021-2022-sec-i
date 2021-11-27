<?php
	$myfile = fopen('../model/BuyerProfile.txt', 'r');
	$data = fread($myfile, filesize('../model/BuyerProfile.txt'));
?>

<html>
<head>
	<title>Buyer Profile</title>
</head>
<body>
	<p>Here are the Buyer Profiles</p>
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
	<a href="BuyerSection.html">Go Back</a>
</body>
</html>