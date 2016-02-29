
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
		


<?php

$content='';//Orderhistoriken kommer här
$username = $_SESSION['username'];

$query = <<<END
SELECT *
FROM orderhuvud, orderrad
WHERE orderhuvud.orderNR=orderrad.orderNR AND username = '$username';
END;


$res = $mysqli->query($query);

if($res->num_rows > 0)
{

$content .= '<div class="row">';
$content .= '<h1>Din orderhistorik</h1>';
   while($row = $res->fetch_object())//Generera HTML nedan för varje
   {
   $produktid = $row->id;
   $pn = <<<END
SELECT produktnamn, bildurl
FROM produkter
WHERE id = $produktid
END;
$pnres = $mysqli->query($pn);
$produktinfo = $pnres->fetch_object();


      
$content .= <<<END
				
					<div class="col-sm-4 col-md-4">
				<div class="thumbnail">
					<img src="{$produktinfo->bildurl}"><br>
						<p> Ordernummer: {$row->orderNR}<br>
      Produktid: {$row->id}<br>
	  Produktnamn: {$produktinfo->produktnamn}<br>
	    Antal: {$row->antal}<br>
      Användare: {$row->username}<br>
      Datum: {$row->datum}<br></p>
			</div>
							</div>	
				
				


END;

   
   }

} 


echo $content;

?>

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