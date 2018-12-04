<?php
//db connexion
function dbconnect($db) {
    try {
      $db = new PDO("mysql:host=localhost;dbname=saveEarth", "phpmyadmin", "Recolerent2");
    }
    //Sinon on récupère une erreur
    catch (Exception $e) {
      echo 'Exception reçue : ' .  $e->getMessage() . "\n";
    }
  }
 ?>
