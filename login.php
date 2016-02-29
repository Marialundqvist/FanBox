<html>
   <head>
      <meta charset="utf-8">
   </head>
   
<!--Öppnar PHP-->
<?php
    include('template.php');
	
    if(isset($_POST['username']))
{
    $query = <<<END
    SELECT username, password, userID FROM anvandare
    WHERE username = '{$_POST['username']}'
    AND password = '{$_POST['password']}'
END;
    $res = $mysqli->query($query);
    if($res->num_rows > 0)
{
    $row = $res->fetch_object();
    $_SESSION["username"] = $row->username;
    $_SESSION["userId"] = $row->id;
    header("Location:#");
}
    else
{
    $wrong = <<<END
    <p class="wrong"> Fel användarnamn eller lösenord.</p>
END;
    echo $wrong;
}}
      	
    $content = <<<END
      
      
    <form id="loggain" class="" action="#" method="post">
		Användarnamn:<br>
		<input type="text" name="username" placeholder="username"><br>
		Lösenord:<br>
		<input type="password" name="password" placeholder="password"><br>
		<input type="submit" value="Logga in">
    </form>
      
END;
      
      
    echo $content
      
?><!--Stänger PHP-->
</html>