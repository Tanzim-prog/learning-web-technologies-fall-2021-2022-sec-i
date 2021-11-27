<?php
	$myfile = fopen('../model/GiftCardSellerProfile.txt', 'r');
	$data = fread($myfile, filesize('../model/GiftCardSellerProfile.txt'));
?>

<html>
<head>
	<title>Gift Card Seller Profile</title>
</head>
<body>
	<p>Here are the Gift Card Seller Profiles</p>
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
	<a href="GiftCardSeller.html">Go Back</a>
</body>
</html>