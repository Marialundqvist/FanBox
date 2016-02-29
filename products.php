
<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width">
      <link rel="shortcut icon" href="favicon.ico" />
      <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
      <script type="text/javascript" src="js/inlogg.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <meta charset="utf-8">
      <meta charset="utf-8">
      <title>Produkter</title>
   </head>
   <body>
      <div id="container"><!--Container styr allt innehåll -->
      	
<?php
include('template.php');
include('login.php');
            
echo $navigation;
?>
         <div id="header">
            <a href="index.php"><img src="bilder/logga1.gif" width="400" title="logga" alt="loggabild" style="max-width:100%;height:auto;"></a>
         </div>
         <div id="ikoner">
           <img class="ikoner" src="bilder/bil.gif" title="fri frakt" alt="fri frakt liten bil">
            <img class="ikoner" src="bilder/nyckel.gif" title="fri frakt" alt="fri frakt liten nyckel" >
         </div>
         <nav>
           
               <!-- Meny med dropdown-->
               <ul>
                  <li><a class="tit" href="index.php">Hem</a></li>
                  <li>
                     <a class="tit" href="products.php" style="background-color: white">Våra boxar</a>
                     <ul>
                        <li><a href="product_details.php?id=1">Animated</a></li>
                        <li><a href="product_details.php?id=2">Fantasy</a></li>
                        <li><a href="product_details.php?id=3">Sci-fi</a></li>
                        <li><a href="product_details.php?id=4">Superheroes</a></li>
                        <li class="tit2"><a href="product_details.php?id=5">Mix</a></li>
                     </ul>
                  </li>
                  <li><a class="tit" href="contact.php">Kontakt</a></li>
                  <li><a class="tit" href="hurfunkardet.php">Hur funkar det?</a></li>
               </ul>
           
         </nav>
         <div id="content">


<!--PHPKOD BÖRJAR--> 
<?php

$content = '';//Produktinfon kommer här


//Fångar in vald produkt
if(isset($_GET['id']))
{
	//Hämtar information om produkten från databas
	$id = $_GET['id'];
	$res = $mysqli->query("SELECT * FROM produkter WHERE id = '{$id}' ");//OBS KOLLA
	//Skapar ett radobjekt
	$row = $res->fetch_object();
	//Skapar en array med information om produkten
	$add_product = array('id' => $row->id, 'pris' => $row->pris, 'produktnamn' => $row->produktnamn, 'qty'=>1);

	//Ser om produkten finns i vagnen
	$exists= null;
	//Loopar för att se om vara med samma id redan finns i vagnen
	foreach($_SESSION['cart'] as $item => $cart_item)
	{
		if($cart_item["id"] == $id) //Finns produkt redan i kundvagnen?
		{
			$exists = true;//Om finns
			$_SESSION['cart'][$item]['qty']++;//produktens kvalitet räknas upp med 1
			break;//foreach-loopen avbryts. match hittad. 
		}

	}
	if($exists == null)//Om finns ej, lägger till i sessionsvariabeln
	{
		{
			array_push($_SESSION['cart'], $add_product);//lägger till produkten sist
		}
	}

	//Loopar kundvagn
	foreach ($_SESSION['cart'] as $item => $cart_item) 
	{
	echo '<p>';
	echo $cart_item["qty"];
	echo 'st';
	echo '&nbsp;';
	echo $cart_item["produktnamn"];
	echo '<br>';
	echo 'Pris:';
	echo '&nbsp;';

	//includear för att få variabler som feedback i kundvagnen
 	$subtotal = ($cart_item["pris"]*$cart_item["qty"]);
            
	echo $subtotal;
	echo '&nbsp;';
	echo 'SEK';
	echo '</p>';
	}
	echo '<p>';
	echo '<a href="shopping_cart.php" class="btn btn-info">Till min varukorg!</a>';
	

}


//PRODUKTLISTAN
//Hämtar från databas
$query = <<<END
SELECT * FROM produkter
ORDER BY id ASC
END;

$res = $mysqli->query($query);

$counter = 0;

if($res->num_rows > 0)
{
	$content .= '<div class="row">';
	while($row = $res->fetch_object())//Hämtar varje produkt med bild, namn, pris och beskrivning.
	{
	

		if($counter / 3 == 1)
		{
			$content .= '<div class="row">';
			$counter = 0;
		}

//Om inloggad ser denna produktinfo		
			if(isset($_SESSION['username'])) {

	$content .= <<<END
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="{$row->bildurl}"><br>
					{$row->produktnamn}<br>
					{$row->pris}<br>
					{$row->produktbeskrivning}<br>
						<a href="product_details.php?id={$row->id}">Läs mer</a><br>
						<a name="add" href="products.php?id={$row->id}" class="btn btn-info">Lägg i varukorg</a>
								
								
				</div>
			</div>
END;

}
else //Om ej inloggad ser denna produktinfo
{
	$content .= <<<END
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="{$row->bildurl}"><br>
					{$row->produktnamn}<br>
					{$row->pris}<br>
					{$row->produktbeskrivning}<br>
						<a href="product_details.php?id={$row->id}">Läs mer</a><br>
						<p>Logga in för att lägga till i varukorgen!</p>
				</div>
			</div>
END;
}

//Räknar ut placering av objekt
	$counter++;
	if($counter / 3 == 1)
	{
	$content .= '</div>';
	}
	
	}
} 

//Skriver ut innehåll
echo $content;

?>
<!--PHPKOD SLUT-->

<!--HTML FÖR FOOTER-->
         </div>
      </div>
      <div id="footer">
         <ul>
            <li><a href="om.php">Om</a></li>
            <li><a href="anvandarvillkor.php">Användarvillkor</a></li>
            <li><a href="leveransinformation.php">Leveransinformation</a></li>
            <li><a href="retur.php">Retur</a></li>
         </ul>
         <img src="bilder/ehandel.gif"  alt="ehandel bild" >
      </div>
   </body>
</html>