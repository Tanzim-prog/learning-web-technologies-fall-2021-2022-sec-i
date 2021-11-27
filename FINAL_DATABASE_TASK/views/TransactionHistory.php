<?php

if(isset($_POST['submit']))
{
	$companyname = $_POST['companyname'];
	$buyername = $_POST['buyername'];
	$sellername = $_POST['sellername'];
	$productid = $_POST['productid'];
	$productcategory = $_POST['productcategory'];
	$productprice = $_POST['productprice'];
	$transactiondate = $_POST['transactiondate'];


if ($companyname != "")
{
	if($buyername != "")
	{
		if ($sellername != "")
		{
			if($productid != "")
			{
				if($productcategory != "")
				{
					if ($productprice != "")
					{
						if ($transactiondate != "")
						{
							$transactionhistoryfile = fopen('../model/TransactionHistory.txt', 'a');
							$transactionhistory = $companyname."|".$buyername."|".$sellername."|".$productid."|".$productcategory."|".$productprice."|".$transactiondate."\r\n";
							fwrite($transactionhistoryfile, $transactionhistory);
							fclose($transactionhistoryfile);

							header("location: TransactionHistory.php");
						}
						else
						{
							echo "Choose transaction date";
						}
					}
					else
					{
						echo "Invalid product price, try again";
					}
				}
				else
				{
					echo "Invalid product category, try again";
				}
			}
			else
			{
				echo "Invalid product id, try again";
			}
		}
		else
		{
			echo "Invalid seller name, try again";
		}
	}
	else
	{
		echo "Invalid buyer name, try again";
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
	<title>Transaction History</title>
</head>
<body>
	<form method="post" action="TransactionHistory.php">
		<fieldset>
			<legend>Transaction History</legend>
			<table>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="companyname" value=""></td>
				</tr>
				<tr>
					<td>Buyer Name</td>
					<td><input type="text" name="buyername" value=""></td>
				</tr>
				<tr>
					<td>Seller Name</td>
					<td><input type="text" name="sellername" value=""></td>
				</tr>
				<tr>
					<td>Product ID</td>
					<td><input type="text" name="productid" value=""></td>
				</tr>
				<tr>
					<td>Product Category</td>
					<td><input type="text" name="productcategory" value=""></td>
				</tr>
				<tr>
					<td>Product Price</td>
					<td><input type="text" name="productprice" value=""></td>
				</tr>
				<tr>
					<td>Transaction Date</td>
					<td><input type="date" name="transactiondate" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
			<a href="Home.php">Home</a>
		</fieldset>
	</form>
</body>
</html>

<?php
	$myfile = fopen('../model/TransactionHistory.txt', 'r');
	$data = fread($myfile, filesize('../model/TransactionHistory.txt'));
?>

<html>
<head>
	<title>Transaction History</title>
</head>
<body>
	<p>Here is the Transaction History</p>
</body>
</html>


<?php
	echo $data;
?>