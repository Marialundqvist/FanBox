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
   
      <div id="container"><!--Container styr allt innehåll -->
	  
<?php
    include('template.php');
    include('login.php');
            
    echo $navigation;
            
?><!-- php-kod avslutas -->

         <div id="header"><!-- Logga FanBox-->
            <a href="index.php"><img src="bilder/logga1.gif" alt="logga" width="400" title="logga" style="max-width:100%;height:auto;"></a>
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
               <li><a class="tit" href="hurfunkardet.php">Hur funkar det?</a></li>
            </ul>
         </nav>
		 
         <div id="kategorier"><!--innehållet/texten-->
            <div class="updatereg"><!--Styr formuläret-->
			
<!--Öppnar PHP-->	
<?php
    include('template.php');
    $form = '';
    if(isset($_SESSION['username']))
{
    if(isset($_POST['username']))
{
    $query = <<<END
    UPDATE anvandare
    SET username = '{$_POST['username']}',
    personNR = '{$_POST['personNR']}',
    fnamn = '{$_POST['fnamn']}',
    enamn = '{$_POST['enamn']}',
    adress = '{$_POST['adress']}',
    postNR = '{$_POST['postNR']}',
    teleNR = '{$_POST['teleNR']}',
    email = '{$_POST['email']}',
    password = '{$_POST['password']}'
    WHERE userID = '{$_GET['userID']}'
END;
    $mysqli->query($query) or die($mysqli->errors);
}
                  
    $query = <<<END
    SELECT * FROM anvandare
    WHERE username = '{$_SESSION['username']}'
END;
    $res = $mysqli->query($query);
    if($res->num_rows > 0)
{
    $row = $res->fetch_object();
    $form = <<<END
    <form method="post" action="updatereg.php?userID={$row->userID}">
    <form role="form">
                  
        <div class="form-group">
            <label for="username">Användarnamn:</label>
            <input type="text" name="username" placeholder="Användarnamn" value="{$row->username}">
        </div>
                  
        <div class="form-group">
            <label for="personNR">Personnummer:</label>
            <input type="text" name="personNR" placeholder="Personnummer" value="{$row->personNR}">
        </div>
                  
        <div class="form-group">
            <label for="fname">Förnamn:</label>
            <input type="text" name="fnamn" placeholder="Förnamn" value="{$row->fnamn}">
        </div>
                  
        <div class="form-group">
            <label for="fname">Efternamn:</label>
            <input type="text" name="enamn" placeholder="Efternamn" value="{$row->enamn}">
        </div>
                  
                  
        <div class="form-group">
            <label for="adress">Adress:</label>
            <input type="text" name="adress" placeholder="Adress" value="{$row->adress}">
        </div>
                  
        <div class="form-group">
            <label for="postNR">Postnummer:</label>
            <input type="text" name="postNR" placeholder="Postnummer" value="{$row->postNR}">
        </div>
                  
        <div class="form-group">
            <label for="teleNR">Telefonnummer:</label>
            <input type="text" name="teleNR" placeholder="Telefonnummer" value="{$row->teleNR}">
        </div>
                  
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" name="email" placeholder="Email" value="{$row->email}">
        </div>
		
        <div class="form-group">
            <label for="password">Lösenord:</label>
            <input type="password" name="password" placeholder="Password" value="{$row->password}">
        </div>
                  
        <button type="submit" class="btn btn-default">Spara uppgifter</button>
        </form>
                  	
END;
}
}
                  
    echo $form;
?><!-- Stänger PHP -->
        <a href="order_history.php" class="btn btn-info">Se Orderhistorik</a>
            </div><!-- updatereg div avslutas -->
         </div><!-- kategorier diven stängs -->
		 
         <div id="footer"><!-- Footern med länkar och paypalbild längst ner på sidan-->
            <ul>
               <li><a href="om.php">Om</a></li>
               <li><a href="anvandarvillkor.php">Användarvillkor</a></li>
               <li><a href="leveransinformation.php">Leveransinformation</a></li>
               <li><a href="retur.php">Retur</a></li>
            </ul>
            <img class="handel" alt="ehandelbild" src="bilder/ehandel.gif" width="auto"><!--Bilder i footern-->
			
         </div><!-- Här stängs div:n för kategorier  -->
      </div><!-- Här stängs div:n för container  -->
   </body>
</html>