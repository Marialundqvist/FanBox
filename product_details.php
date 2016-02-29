<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width">
      <link rel="shortcut icon" href="favicon.ico" />
      <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
      <script type="text/javascript" src="js/hej.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" type="text/css" href="css/mobile.css">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Produkter</title>
   </head>
   <body>
      <div id="container"> <!--Container styr allt innehåll -->

<!--PHPKOD INLOGG-->
<?php
include('template.php');
include('login.php');
echo $navigation;
?>

 <!--MENY-->        
      <div id="header">
         <a href="index.php"><img src="bilder/logga1.gif" width="400" title="logga" alt="loggabild" style="max-width:100%;height:auto;"></a>
      </div>
      <div id="ikoner">
         <img class="ikoner" src="bilder/bil.gif" title="fri frakt" alt="fri frakt liten bil" >
         <img class="ikoner" src="bilder/nyckel.gif" title="fri frakt" alt="fri frakt liten nyckel" >
      </div>
      <!-- gör så att menyn ej går över loggan -->
      <br id="break">
      <br id="break">
      <br id="break">
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
      <div id="content_details">

<!--START PHPKOD-->

<?php

$content = '';//Skriver variabel för content

if(isset($_GET['id']))
{
	$query = <<<END
	SELECT * FROM produkter
	WHERE id = '{$_GET['id']}'
END;

$res = $mysqli->query($query);
if($res->num_rows > 0)
{
	$row = $res->fetch_object();

//Hämtar bild och info från databas om inloggad	
if(isset($_SESSION['username'])) {
	$content = <<<END
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<img src="{$row->bildurl}"><br>
		</div>
	</div>
	<div class="col-sm-4 col-md-4">
		<h1>{$row->produktnamn}</h1><br>
		Pris: {$row->pris}<br>
		{$row->produkttext}<br>
		<a href="products.php?id={$row->id}" class="btn btn-info">Lägg i varukorg</a>
	</div>
END;

//Om ej inloggad
		}
		else 
		{
			
	$content = <<<END
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<img src="{$row->bildurl}"><br>
		</div>
	</div>
	<div class="col-sm-4 col-md-4">
		<h1>{$row->produktnamn}</h1><br>
		Pris: {$row->pris}<br>
		{$row->produkttext}<br>
		<p>Logga in för att lägga till i varukorgen!</p>
	</div>
END;

		}
	}
}

echo $content;//skriver ut innehåll
?>

<!--FOOTER-->
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