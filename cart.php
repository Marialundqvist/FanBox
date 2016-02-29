<?php

   include('shopping_cart.php');
	
$navigation = <<<END

<div id="login">
END;
	foreach ($_SESSION['cart'] as $item => $cart_item) 
	{
	echo $cart_item["produktnamn"];
	echo $cart_item["qty"];
	}
?>