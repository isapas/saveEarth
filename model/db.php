<?php
//db connexion
function dbconnect() {
    try {
      $db = new PDO("mysql:host=localhost;dbname=saveEarth", "phpmyadmin", "Recolerent2");
    }
    catch (Exception $e) {
      echo 'Exception reçue : ' .  $e->getMessage() . "\n";
    }
    return $db;
  }

 ?>
