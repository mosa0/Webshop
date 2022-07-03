<?php include_once'header.php';
include_once'tnf.php';
include_once'yeezy.php';
include_once'tommy.php';

//maak de connectie beschikbaar in dit bestand
require "dbconnection.class.php";
//maak een nieuwe connectie aan in de variabele $dbconnect
$dbconnect = new dbconnection();

//op de volgende regel bouw je een sql-query (leren we in module 10); als je alle producten uit de tabel met de naam ‘product’ wilt trekken heb je de volgende query nodig
$sql = "SELECT * FROM product";

//hier zet je de query klaar, ‘prepare()’ is een functie binnen PDO die je kunt gebruiken bij de variabele $dbconnect
$query = $dbconnect -> prepare($sql);

//hier voer je de database bevraging uit, ‘execute()’ is een functie binnen PDO die je los kunt laten op de variabele $query
$query -> execute() ;

//hier sla je alle records die je uit de database opgevraagd hebt, op in de array $recset ('recset' is een afkorting voor records-set - een andere naam mag ook);
//‘fetchAll()’ is een functie binnen PDO en betekent letterlijk: trek (fetch) alles (all) uit de database op basis van de query;
//$recset is een array met gevonden records uit de database
$recset = $query -> fetchAll(PDO::FETCH_ASSOC);

//om te zien wat je nu precies uit de database gehaald hebt:
echo "<pre>";
print_r($recset);
echo "</pre>";?>

<!-- Title variabele kan geplaatst worden in de card zelf-->
  

  <? $euro = "€" ?>
  
  



  
      
    <!-- <div class="row1">
      <div class="column1">
        <img src="./img/tnf1.jpg" alt="" style="width: 50%" />
      </div>
      <div class="column1">
        <img src="./img/tnf2.png" alt="" style="width: 50%" />
      </div>
      <div class="cor1">
        <div class="column1">
          <img src="./img/tnf3.png" alt="" style="width: 50%" />
        </div>
      </div>
      <div class="column2">
        <img src="./img/yeezy1.jpg" alt="" style="width: 50%" />
      </div>
      <div class="column2">
        <img src="./img/yeezy2.jpg" alt="" style="width: 50%" />
      </div>
      <div class="column2">
        <img src="./img/yeezy3.jpg" alt="" style="width: 50%" />
      </div>
    </div> -->
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"
  ></script>
</html>
