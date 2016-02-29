<!--Koppling till bootstrap, jquery, css, meta charset mm-->
<html>
<head>

	<meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="favicon.ico" />
	<link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
 <link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	
	
	<meta charset="utf-8">
	</head>
	
<?php
session_name('Webbshop');



   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
//Koppling till databas
$mysqli = new mysqli("localhost","matpri14","6r1NV4guzT","matpri14_db");
$mysqli->set_charset("utf8");//Sätter databas till utf-8

//skapar session för varukorgen
include('config.php');

if(!isset($_SESSION['cart']))
	{
	$_SESSION['cart'] = array();
	}

//Navigation
$navigation = <<<END

<div id="login">
END;

//Räknar items i cart
	$styck = count($_SESSION['cart']);
	
//Ser om användaren är inloggad:
if(isset($_SESSION['username']))
{

//Syns om inloggad - Kundvagn, Logga ut, Inloggad som	
	$navigation .= <<<END
	<a href="shopping_cart.php"><img class="kundvagn" src="bilder/kundis.jpg"> $styck</a>
	
	<a href="logout.php" target_blank>Logga ut</a>
	<a href="updatereg.php">Inloggad som {$_SESSION['username']}</a>
END;


}
else //Syns om ej inloggad:
{
	$navigation .= ' <a href="#"><img id="kundvagn" class="kundvagn" src="bilder/kundis.jpg"></a>';
	$navigation .= ' <a class="login" a href="#">Logga in</a>';
	$navigation .= ' <a class="login" href="register.php">Bli medlem</a>';
	$navigation .= '<p class="hide" id="kundlogin">Logga in för att se din varukorg</p>';
	
}
$navigation .= <<<END
</div>
END;
	
?>

</html>