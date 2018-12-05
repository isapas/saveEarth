<?php
require "../model/db.php";

 //retourne toutes les entrées de la table volunteers
function getVolunteers($db) {
  $requete = $db->query('SELECT * FROM volunteers');
  $result = $requete->fetchAll(PDO::FETCH_ASSOC);
  $requete->closeCursor();
  return $result;
}
