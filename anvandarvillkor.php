

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
      <title>Anvandarvillkor</title>
   </head>
   <body>
      <div id="container"> <!--Container styr allt innehåll -->
	  
         <!-- php-kod -->
         <?php
            include('template.php');
            include('login.php');
            
            foreach ($_SESSION['cart'] as $item => $cart_item) 
            {
            
            echo $cart_item["qty"];
            }
            echo $navigation;
         ?>
		 <!-- php-kod avslutas -->
		  
         <div id="header"> <!-- Logga FanBox-->
            <a href="index.php"><img src="bilder/logga1.gif" width="400" title="logga" alt="loggis" style="max-width:100%;height:auto;"></a>
         </div>
         <div id="ikoner"> <!-- Ikoner (dessa syns inte!!!!-->
            <img class="ikoner" src="bilder/bil.gif" title="fri frakt" alt="fri frakt liten bil" >
            <img class="ikoner" src="bilder/nyckel.gif" title="fri frakt" alt="fri frakt liten bil">
         </div>

                  <!-- gör så att menyn ej går över loggan -->
         <br id="break">
          <br id="break">
           <br id="break">
         
         <nav> <!-- Meny med dropdown-->
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
         <div id="kategorier">
            <div id="anvandarvillkor"> <!-- användarvillkor -->
               <br>
               <h1>Användarvillkor</h1>
               <p>
                  Dessa villkor gäller för webbplatserna www.Fanbox.se, de prenumerationstjänster som erbjuds på Webbplatsen
                  (”Prenumerationerna”) och de boxar som levereras enligt Prenumerationerna. Med "Box" avses din Fanbox.
                  <br>
                  <br>
                  Läs noga igenom dessa villkor. Genom att utnyttja Webbplatsen eller ansöka om Prenumeration via Webbplatsen 
                  godkänner du villkoren och accepterar att vara bunden av dem. Skriv gärna ut en kopia för referensändamål.
                  <br>
                  <br>
                  Om du inte accepterar villkoren kan du inte ansöka om Prenumeration från Webbplatsen.
                  <br>
                  <br>
               </p>
               <h2>1. Information om oss</h2>
               <p>
                  Fanbox 
                  <br>
                  <br>
                  Adress:
                  <br>
                  Halmstad
                  <br>
                  <br>
                  Besöksadress:
                  <br>
                  Högskolan i Halmstad
                  <br>
                  <br>
                  E-post: fanboxhelpcenter@mail.com
                  <br>
                  <br>
                  Styrelsens säte: Halmstad
                  <br>
                  <br>
               </p>
               <h2>2. Ansökan och bundenhet</h2>
               <p>
                  <b>2.1</b> 
                  Vi förbehåller oss rätten att avstå från att träffa avtal med dig utan angivande av skäl.
                  <br>
                  <br>
                  <b>2.2</b> 
                  Vi tar inte ansvar för erbjudanden och kampanjer från samarbetspartners med utgånget giltighetsdatum 
                  som eventuellt kan finnas i boxen.
                  <br>
                  <br>
               </p>
               <h2>3. Priser</h2>
               <p>
                  <b>3.1</b> 
                  Med undantag för uppenbara felskrivningar gäller de priser och fraktkostnader som från tid till annan anges
                  på Webbplatsen. Priserna anges inklusive mervärdesskatt.
                  <br>
                  <br>
               </p>
               <h2>4. Betalning</h2>
               <p>
                  <b>4.1</b> 
                  Betalning ska ske genom PayPal. Du godkänner 
                  att vi får debitera de periodiska avgifterna från ditt PayPal-konto utan ytterligare godkännande
                  fram till dess du byter betalningssätt och/eller uppdaterar dina betalningsuppgifter via ditt konto på Webbplatsen eller
                  genom att skicka ett meddelande till support@fanbox.se (med tillägg av den tid som vi skäligen kan kräva för att hinna
                  åtgärda debiteringen).
                  <br>
                  <br>
               </p>
               <h2>5. Leveranstider</h2>
               <p>
                  <b>5.1</b> 
                  Leveranstiden är 3-5 arbetsdagar. Undrantag vid högtider kan förekomma. 
                  <br>
                  <br>
               </p>

               <h2>6. Ångerrätt</h2>
               <p>
                  <b>6.1</b> 
                  Om du är konsument får du enligt lag ångra dig inom 14 dagar (”Ångerfristen”) från den dag du mottar den Boxen.
                  <br>
                  <br>
                  <b>6.2</b> 
                  Du får utöva din ångerrätt endast om Produkten hålls i väsentligen oförändrat skick. Detta gäller dock inte
                  om Produkten har förstörts eller förändrats på grund av någon åtgärd som har varit nödvändig för att undersöka
                  den eller på grund av någon omständighet som inte kan hänföras till dig. 
                  <br>
                  <br>
                  <b>6.3</b> 
                  Du utövar din ångerrätt genom att kontakta oss på Fanbox och på egen bekostnad återsända Boxen till
                  oss inom 14 dagar från det att du meddelar oss att du ångrar dig. Du kan kontakta oss genom ditt konto på Webbplatsen 
                  eller genom att skicka ett meddelande till support@fanbox.se. Boxen kan återsändas till följande adress: Fanbox, 
                  Box 666, 80 800 Halmstad. Vi ber dig återsända den kompletta Boxen i sin originalförpackning. Om du har 
                  förbrutit förseglingen på någon av produkterna i Boxen gäller av hygienskäl inte ångerrätten för produkten och vi kommer
                  att göra ett prisavdrag motsvarande värdet av den aktuella produkten.
                  <br>
                  <br>
                  <b>6.4</b> 
                  Om du utnyttjar din ångerrätt betalar vi tillbaka vad du har betalt för Produkten i enlighet med vår återbetalningspolicy (se punkt 8 nedan).
                  <br>
                  <br>
               </p>
               <h2>7. Reklamation</h2>
               <p>
                  Om en Box är felaktig kan du inom skälig tid reklamera Produkten och få instruktioner om hur du kan returnera den.
                  Reklamationen kan lämnas genom att skicka ett meddelande med beskrivning felet till support@fanbox.se. Återbetalning
                  för felaktig Produkt sker i enlighet med vår återbetalningspolicy (se punkt 8 nedan).
                  <br>
                  <br>
               </p>
               <h2>8. Återbetalningspolicy</h2>
               <p>
                  <b>8.1</b> 
                  Om du lämnar tillbaka en Box till oss för att du har utövat din ångerrätt (se punkt 6 ovan), kommer vi att genomföra
                  återbetalning snarast och senast inom 14 dagar från den dag då vi tagit emot ditt meddelande om att du vill utnyttja ångerrätten,
                  förutsatt att vi också har tagit emot Boxen, eller du kan visa att den sänts tillbaka till oss. Vi kommer därvid att betala
                  tillbaka priset för Boxen samt eventuella fraktkostnader, minus den eventuella värdeminskningen. Du får emellertid själv bära
                  fraktkostnaden för att återsända Boxen till oss (se punkt 6.3).
                  <br>
                  <br>
                  <b>8.2</b> 
                  Om du lämnar tillbaka en Box till oss av något annat skäl (t.ex. för att du anser att Boxen är felaktig) kommer vi 
                  att undersöka den återlämnade Boxen och meddela dig via e-post inom skälig tid om din reklamation kan godtas och hur vi
                  i så fall avhjälper felet, genom t.ex. omleverans, prisavdrag eller återbetalning. En eventuell återbetalning genomför
                  vi så snart som möjligt och senast inom 30 dagar från den dag vi mottagit den reklamerade Boxen. Vi kommer därvid att
                  betala tillbaka priset för Boxen.
                  <br>
                  <br>
                  <b>8.3</b> 
                  Vi betalar vanligen tillbaka pengar till dig med samma metod som du använde för att betala till oss.
                  <br>
                  <br>
               </p>
               <h2>9. Ansvar</h2>
               <p>
                  Om du är konsument regleras vårt ansvar för Boxarna i konsumentköplagen (1990:932). I övrigt ansvarar vi bara för brott
                  mot dessa villkor och bara till ett sammanlagt belopp motsvarande din boxens värde, såvida inte grov
                  vårdlöshet eller uppsåt föreligger. Begränsningarna gäller inte i den del de skulle inskränka dina rättigheter enligt
                  tvingande författning.
                  <br>
                  <br>
               </p>
               <h2>10. Befrielsegrunder</h2>
               <p>
                  Om fullgörandet av våra åtaganden väsentligen försvåras eller förhindras på grund av omständighet som vi inte kunnat
                  råda över, såsom exempelvis arbetskonflikt, eldsvåda, blixtnedslag, terroristattack, ändrad författning, myndighetsingripande
                  samt fel eller försening i tjänster från underleverantör på grund av omständighet som här angivits, ska detta utgöra
                  befrielsegrund som medför framflyttning av tidpunkt för prestationen och befrielse från skadestånd och andra påföljder.
                  Detta ska dock inte begränsa dina rättigheter enligt konsumentköplagen eller annan tvingande författning.
                  <br>
                  <br>
               </p>
               <h2>11. Meddelanden</h2>
               <p>
                  Meddelanden till oss ska skickas till support@fanbox.se. Meddelanden till dig skickas till den e-postadress
                  eller postadress som du angivit eller publiceras på Webbplatsen.
                  <br>
                  <br>
               </p>
               <h2>12. Immateriella rättigheter</h2>
               <p>
                  <b>12.1</b> 
                  Vi eller våra licensgivare äger alla immateriella rättigheter till Webbplatsen och allt material som publiceras
                  på Webbplatsen. Dessa verk är skyddade av upphovsrätt och alla sådana rättigheter förbehålls.
                  <br>
                  <br>
                  <b>12.2</b> 
                  Du får för personligt bruk skriva ut en kopia och ladda ned utdrag av sidor på Webbplatsen. Du får däremot 
                  inte använda någon del av vårt upphovsrättskyddade material för kommersiella ändamål utan att först erhålla en 
                  licens från oss eller från vår licensgivare.
                  <br>
                  <br>
               </p>
               <h2>13. Tillägg och ändringar</h2>
               <p>
                  Vi har rätt att från tid till annan göra tillägg till och ändringar av dessa villkor. Du är bunden till 
                  de villkor som gällde vid den tidpunkt du beställde boxen, såvida inte vi meddelar dig om ändringar
                  av tillägg och du inte inom 60 dagar från den dag sådant meddelande skickades, meddelar oss om att du inte
                  accepterar sådana ändrade villkor.
                  <br>
                  <br>
               </p>
               <h2>14. Tillämplig lag och tvist</h2>
               <p>
                  Dessa villkor ska tolkas och tillämpas i enlighet med svensk rätt. 
                  Tvist i anledning av dessa villkor ska avgöras av allmän domstol.
                  <br>
               </p>
            </div>
         </div>
         <div id="footer"> <!-- Footern med länkar och paypalbild längst ner på sidan-->
            <ul>
               <li><a href="om.php">Om</a></li>
               <li><a href="anvandarvillkor.php">Användarvillkor</a></li>
               <li><a href="leveransinformation.php">Leveransinformation</a></li>
               <li><a href="retur.php">Retur</a></li>
            </ul>
            <img class="handel" src="bilder/ehandel.gif" alt="ehandel">
         </div>
      </div> <!-- Här stängs div:n för container -->
   </body>
</html>

