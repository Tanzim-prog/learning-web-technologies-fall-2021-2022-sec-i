<?php
	$myfile = fopen('../model/ProductList.txt', 'r');
	$data = fread($myfile, filesize('../model/ProductList.txt'));
?>

<html>
<head>
	<title>Product List</title>
</head>
<body>
	<p>Here is the Product list</p>
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
	<a href="ProductSection.html">Go Back</a>
</body>
</html>