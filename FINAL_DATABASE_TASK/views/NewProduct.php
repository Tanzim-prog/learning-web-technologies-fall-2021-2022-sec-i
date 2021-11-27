<?php

if(isset($_POST['submit']))
{
	$productid = $_POST['productid'];
	$productname = $_POST['productname'];
	$productprice = $_POST['productprice'];
	$productcategory = $_POST['productcategory'];
	$productreleasedate = $_POST['productreleasedate'];

	if($productid != "")
	{
		if ($productname != "")
		{
			if($productprice != "")
			{
				if($productcategory != "")
				{
					if ($productreleasedate != "")
					{
						$productlistfile = fopen('../model/ProductList.txt', 'a');
						$productlist = $productid."|".$productname."|".$productprice."|".$productcategory."|".$productreleasedate."\r\n";
						fwrite($productlistfile, $productlist);
						fclose($productlistfile);
				
						header("location: ExistingProduct.php");
					}
					else
					{
						echo "Choose your product release date";
					}
				}
				else
				{
					echo "Invalid product category, try again";
				}
			}
			else
			{
				echo "Invalid product price, try again";
			}
		}
		else
		{
			echo "Invalid product name, try again";
		}
	}
	else
	{
		echo "Invalid product id, try again";
	}
}

?>


<html>
<head>
	<title>Add new product</title>
</head>
<body>
	<form method="post" action="NewProduct.php">
		<fieldset>
			<legend>Add new product</legend>
			<table>
				<tr>
					<td>Product ID</td>
					<td><input type="text" name="productid" value=""></td>
				</tr>
				<tr>
					<td>Product Name</td>
					<td><input type="text" name="productname" value=""></td>
				</tr>
				<tr>
					<td>Product Price</td>
					<td><input type="text" name="productprice" value=""></td>
				</tr>
				<tr>
					<td>Product Category</td>
					<td><input type="text" name="productcategory" value=""></td>
				</tr>
				<tr>
					<td>Product Release Date</td>
					<td><input type="date" name="productreleasedate" value=""></td>
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