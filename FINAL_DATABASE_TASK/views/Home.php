<?php

if(isset($_COOKIE['flag']))
{
?>


<html>
<head>
	<title>Home</title>
</head>
<body>
	<form method="post" action="Home.php">
		<fieldset>
			<legend>Home</legend>
			<h1>Welcome Admin!</h1>
			<ul>
				<li><a href="BuyerSection.html">Buyer Section</a></li>
				<li><a href="SellerSection.html">Seller Section</a></li>
				<li><a href="ProductSection.html">Product Section</a></li>
				<li><a href="TransactionHistory.php">Transaction History</a></li>
			</ul>
			<div>
				<p>View the website as</p>
				<a href="BuyerView.html">Buyer</a> <br>
				<a href="GameSellerView.html">Game Seller</a> <br>
				<a href="GiftCardSellerView.html">Gift Card Seller</a>
			</div> <br>
			<a href="LogIn.html">Log Out</a>
		</fieldset>
	</form>
</body>
</html>

<?php
}
else
{
	header("location: Login.html");
}

?>