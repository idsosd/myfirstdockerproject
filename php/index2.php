<?php
//maak de PDO-connectie beschikbaar in dit bestand
require "db/dbconnection.class.php";
//maak een nieuwe connectie aan in de variabele $dbconnect
$dbconnect = new dbconnection();

//op de volgende regel bouw je een sql-query (leren we in module 10); als je alle producten uit de tabel met de naam ‘product’ wilt trekken heb je de volgende query nodig
$sql = "SELECT * FROM users ";

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
echo "</pre>";