<?php
//traite les requetes du formulaire de tri et renvoie les informations selon le tri requeté par l"utilisateur
function getSortedVolunteers($sort) {
$db = dbconnect();
//On démarre la requête avec les paramètres qu'on exécutera stockés dans un tableau
$sql = "SELECT * FROM users ";
$params = [];
//On construit la requête sur la base des paramètres passés dans le post
if((isset($sort["disponibility"])) || !empty($sort["disponibility"]) || (!empty($sort["city"]))) {
  $sql .= "WHERE ";
  if(!empty($sort["city"])){
    $sql .= "city = ? ";
    array_push($params, $sort["city"]);
    if(isset($sort["available"]) && !empty($sort["available"])){
      $sql .= "AND available = ? ";
      array_push($params, $sort["available"]);
    }
  }
  else {
    if(isset($sort["available"])){
      $sql .= "available = ? ";
      array_push($params, $sort["available"]);
    }
  }
}
//On ordonne le résultat quoiqu'il arrive
$sql .= "ORDER BY " . $sort['sort'];
//On réalise la requête de manière classique
$query = $db->prepare($sql);
$query->execute($params);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$query->closeCursor();
return $result;
}

 ?>
