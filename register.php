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

  
  <title>FanBox</title>

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

            <nav> <!-- Meny med dropdown-->
                <ul> 
                    <li><a class="tit" href="index.php">Hem</a></li>
                    <li><a class="tit" href="products.php">Våra boxar</a>
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
<!--PHPKOD-->

<?php




if(isset($_POST['username']))
{
	$query = <<<END
	INSERT INTO anvandare(username,personNR,fnamn,enamn,adress,postNR,teleNR,email,password)
	VALUES('{$_POST['username']}','{$_POST['personNR']}','{$_POST['fnamn']}','{$_POST['enamn']}','{$_POST['adress']}','{$_POST['postNR']}','{$_POST['teleNR']}','{$_POST['email']}','{$_POST['password']}')
END;
$mysqli->query($query) or die($mysqli->error);

}
$content = <<<END
<form method="post" action="register.php">
<div class="container">

  <h2>Bli medlem</h2>
  <form role="form">
    <div class="form-group">
      <label for="username">Användarnamn:</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Användarnamn">
    </div>

	<div class="form-group">
      <label for="personNR">Personnummer:</label>
      <input type="text" class="form-control" id="persNR" name="personNR" placeholder="Personnummer">
    </div>
  
	   <div class="form-group">
      <label for="fname">Förnamn:</label>
      <input type="text" class="form-control" id="fname" name="fnamn" placeholder="Förnamn">
    </div>
	
	   <div class="form-group">
      <label for="lname">Efternamn:</label>
      <input type="text" class="form-control" id="lname" name="enamn" placeholder="Efternamn">
    </div>
	
	
	   <div class="form-group">
      <label for="adress">Adress:</label>
      <input type="text" class="form-control" id="adress" name="adress" placeholder="Adress">
    </div>
	
	   <div class="form-group">
      <label for="postNR">Postnummer:</label>
      <input type="text" class="form-control" id="postNR" name="postNR" placeholder="Postnummer">
    </div>
	
	   <div class="form-group">
      <label for="teleNR">Telefonnummer:</label>
      <input type="text" class="form-control" id="teleNR" name="teleNR" placeholder="Telefonnummer">
    </div>
	
	   <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
    </div>
	
	
    <div class="form-group">
      <label for="password">Lösenord:</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Lösenord">
    </div>
	
	
	
    <button type="submit" name="reg" "class="btn btn-default">Registrera</button>
  </form>
</div>
END;

echo $content;





?>

<!--PHP SLUT-->

</div>
        
<!--FOOTER-->        
    <div id="footer">
	<br>
            <ul>
                <li><a href="om.php">Om</a></li>
                <li><a href="anvandarvillkor.php">Användarvillkor</a></li>  
                <li><a href="leveransinformation.php">Leveransinformation</a></li>
                <li><a href="retur.php">Retur</a></li>
            </ul>
            <img src="bilder/ehandel.gif"  alt="ehandel bild">
    </div>
	</div>
</body>

</html>