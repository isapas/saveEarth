<?php
//db connexion
function dbconnect($db) {
    try {
      $db = new PDO("mysql:host=localhost;dbname=saveEarth", "phpmyadmin", "Recolerent2");
    }
    catch (Exception $e) {
      echo 'Exception reçue : ' .  $e->getMessage() . "\n";
    }
  }
 ?>
