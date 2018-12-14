<?php
//traite les requetes du formulaire de tri et renvoie les informations selon le tri requeté par l"utilisateur
function getSortedVolunteers($sort) {
$db = dbconnect();
// démarre la requête avec les paramètres qu'on exécutera stockés dans un tableau
$sql = "SELECT * FROM users ";
$params = [];
//On construit la requête sur la base des paramètres passés dans le post
if((isset($sort["availability"])) || !empty($sort["availability"]) || (!empty($sort["city"]))) {
  $sql .= "WHERE ";
  if(!empty($sort["city"])){
    $sql .= "city = ? ";
    array_push($params, $sort["city"]);
    if(isset($sort["availability"]) && !empty($sort["availability"])){
      $sql .= "AND available = ? ";
      array_push($params, $sort["availability"]);
    }
  }
  else {
    if(isset($sort["availability"])){
      $sql .= "availability = ? ";
      array_push($params, $sort["availability"]);
    }
  }
}
//On ordonne le résultat
$sql .= "ORDER BY " . $sort['sort'];
//puis requête  classique
$query = $db->prepare($sql);
$query->execute($params);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$query->closeCursor();
return $result;
}

 ?>
