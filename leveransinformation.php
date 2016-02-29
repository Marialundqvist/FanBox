<!DOCTYPE HTML>
<html>
   <head>
      <meta name="viewport" content="width=device-width">
      <link rel="shortcut icon" href="favicon.ico" />
      <link href='http://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
      <script type="text/javascript" src="js/inlogg.js"></script>
      <script type="text/javascript" src="js/new.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <meta charset="utf-8">
      <title>Leveransinformation</title>
   </head>
   <body>
   
      <div id="container"><!--Container styr allt innehåll -->
	  
<!-- php-kod -->
<?php

    include('template.php');
    include('login.php');
            
    echo $navigation;
	
?><!-- php-kod avslutas -->

         <div id="header"><!-- Logga FanBox-->
            <a href="index.php"><img src="bilder/logga1.gif" width="400" title="logga" alt="loggis" style="max-width:100%;height:auto;"></a>
         </div>
		 
         <div id="ikoner"><!-- Ikoner (dessa syns inte!!!!-->
            <img class="ikoner" src="bilder/bil.gif" title="fri frakt" alt="fri frakt liten bil" >
            <img class="ikoner" src="bilder/nyckel.gif" title="fri frakt" alt="fri frakt liten bil" >
         </div>
		 
                  <!-- gör så att menyn ej går över loggan -->
         <br id="break">
          <br id="break">
           <br id="break">
       
         <nav><!-- Meny med dropdown-->
            <ul>
               <li><a class="tit" href="index.php" style="background-color: white">Hem</a></li>
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
		 
         <div id="kategorier"><!--innehållet/texten-->
            <div class="row">
               <h2>Standardleverans</h2>
			   
               <div class="col-sm-4"><!-- bootstrap -->
                  <ul>
                     <li>• 0 kr* fraktavgift</li>
                     <li>• 3-5 arbetsdagar</li>
                     <li>• *45 kr fraktavgift vid köp under 199 kr</li>
                     <li>• Levereras av Post Nord</li>
                  </ul>
               </div>
			   
               <div class="col-sm-5"><!-- bootstrap -->
                  <p>
                     Får paketet plats i din brevlåda levereras det i första hand dit. Får det inte plats i din<br>
                     brevlåda hamnar paketet hos ditt utlämningsställe och du får då en sms-avisering till ditt<br>
                     registrerade mobilnummer. Du kan spåra ditt paket här genom att söka på ditt kollinummer
                  </p>
               </div>
            </div>
         </div>
		 
         <div id="footer"><!--footern som är längst ner på sidan med länkar och bild på paypal -->
            <ul>
               <li><a href="om.php">Om</a></li>
               <li><a href="anvandarvillkor.php">Användarvillkor</a></li>
               <li><a href="leveransinformation.php">Leveransinformation</a></li>
               <li><a href="retur.php">Retur</a></li>
            </ul>
			
            <img class="handel" src="bilder/ehandel.gif" alt="ehandel"><!--Bilder i footern-->
         </div>
      </div><!-- div Containern stängs har -->
   </body>
</html>