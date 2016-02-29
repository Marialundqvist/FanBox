<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width">
      <link rel="shortcut icon" href="favicon.ico" />
      <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
      <script type="text/javascript" src="js/hej.js"></script>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <meta charset="utf-8">
      <title>Hur funkar det?</title>
   </head>
   <body>
      <div id="container"><!--Container styr allt innehåll -->
	  
<!--Öppnar PHP-->	
<?php
    include('template.php');
    include('login.php');
            
            
     echo $navigation;
            
            
?><!--Stänger PHP-->

         <div id="header"><!-- Logga FanBox-->
            <a href="index.php"><img src="bilder/logga1.gif" width="400" title="logga" alt="loggabild" style="max-width:100%;height:auto;"></a>
         </div>
		 
         <div id="ikoner"><!-- Ikoner (dessa syns inte!!!!-->
            <img class="ikoner" src="bilder/bil.gif" title="fri frakt" alt="fri frakt liten bil">
            <img class="ikoner" src="bilder/nyckel.gif" title="fri frakt" alt="fri frakt liten nyckel">
         </div>

                  <!-- gör så att menyn ej går över loggan -->
         <br id="break">
			<br id="break">
				<br id="break">
         
            <nav><!-- Meny med dropdown-->
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
                  <li><a class="tit" href="hurfunkardet.php" style="background-color: white">Hur funkar det?</a></li>
               </ul>
            </nav>
         
         <div id="content">
            <!--bakgrunden,det orangea...KONTAKTFORMULÄR-->
            <img id="fungerar" src="bilder/fungerar.jpg" alt="hurfunkardet bild">
         </div>
         <div id="footer">
            <!-- Footern med länkar och paypalbild längst ner på sidan-->
            <ul>
               <li><a href="om.php">Om</a></li>
               <li><a href="anvandarvillkor.php">Användarvillkor</a></li>
               <li><a href="leveransinformation.php">Leveransinformation</a></li>
               <li><a href="retur.php">Retur och byten</a></li>
            </ul>
            <img class="handel" src="bilder/ehandel.gif" alt="ehandel bild"><!--Bilder i footern-->
         </div>
      </div>
      <!-- Här stängs div:n för container -->
   </body>
</html>