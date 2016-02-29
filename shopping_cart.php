<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width">
      <link rel="shortcut icon" href="favicon.ico" />
      <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
      <script type="text/javascript" src="js/hej.js"></script>
      <script type="text/javascript" src="js/new.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <meta charset="utf-8">
      <title>FanBox</title>
   </head>
   <body>
      <div id="container">
<!--Container styr allt innehåll -->

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
                  <a class="tit" href="products.php">Våra boxar</a>
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

<!--START PHPKOD-->


 <h1>Din Varukorg</h1>
 <div id="content">
 
 
<?php

//Tömmer varukorg vid klick
if(isset($_POST["empty"])) {

unset($_SESSION['cart']);

}  

//Varukorg
if(isset($_SESSION["cart"]))

    {
        $total = 0;
        echo '<form method="post" action="process.php">';
        echo '<ul>';
		
		
        foreach ($_SESSION["cart"] as $item => $cart_item)
        {
           $results = $mysqli->query("SELECT id, produktnamn, produktbeskrivning, pris, bildurl FROM produkter WHERE id='{$cart_item["id"]}' LIMIT 1");
           $row = $results->fetch_object();
		   
//Variabel för bild till varukorgen           
		 $pics = <<<END
			<div class="col-sm-2 col-md-2">
				<div class="thumbnail">
				<img src="{$row->bildurl}"><br>		
			  </div>
			</div>
END;
		   
//Skriver ut innehåll i varukorg
        echo '<li>';
		    echo $pics;
        echo '<h3>'.$row->produktnamn.'</h3>';
        echo 'Antal: '.$cart_item['qty'];
        echo '</li>';
		    echo '<br><br><br>';
            $subtotal = ($cart_item["pris"]*$cart_item["qty"]);
            $total = ($total + $subtotal);
			
			
            echo '<input type="hidden" name="item_name['.$item.']" value="'.$row->produktnamn.'" />';
            echo '<input type="hidden" name="item_code['.$item.']" value="'.$row->id.'" />';
            echo '<input type="hidden" name="item_qty['.$item.']" value="'.$cart_item["qty"].'" />';
            
        }
		

//Total summa och beställaknapp
		
        echo '</ul>';
        echo '<strong>Total : '.$total.'</strong>  ';
		echo '<br>';
        echo '<input type="submit" name="order" class="btn btn-info" value="Beställ" />';
		echo '<br><br>';
        echo '</form>';
		

		
			
//Eller skriv ut att varukorgen är tom       
    }
    else
    {
        echo 'Din varukorg är tom';
    }

//Knapp för att tömma varukorgen
			echo '<form method="post">';
			echo '<input type="submit" name="empty" class="btn btn-info" id="confirm" value="Töm varukorg" >';
			echo '</form>';
	
?>

  </div>

<!--SLUT PHP-->

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