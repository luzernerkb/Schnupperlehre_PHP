<?php
//Mit der Datenbank Verbindung aufnehmen
$DB_HOST = "localhost"; //Die Datenbank befindet sich auf localhost
$DB_NAME = "kontakt"; //Datenbankname
$DB_BENUTZER = "root"; //Datenbankbenutzer (Standartmässig "root")
$DB_PASSWPRT = " "; //Datenbank Passwort (Standartmässig nichts)
$Teilnahme = false; //Variable ob am  Gewinnspiel teilgenommen wurde ( Am Anfang natürlich auf ''false'')

$OPTION = [ //Optionen zur vebindung mit der Datenbank
  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4", //Schrift wird zu utf8 gesetzt
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
 ];

 try { //Verbindungsaufnahme 
  $db = new PDO("mysql:host=" . $DB_HOST . ";dbname=" . $DB_NAME,
   $DB_BENUTZER, $DB_PASSWORT, $OPTION);
 }
 catch (PDOException $e) { //Falls keine Verbindung aufgenommen kann werden
  exit("Verbindung fehlgeschlagen! " . $e->getMessage()); // Fehlernachricht
 }
 ?>