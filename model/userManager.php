<?php
//manager qui stocke toutes les fonctions qui concernent les utilisateurs

//retourne toutes les entrées de la table users
function getUsers($db) {
 $query = $db->query('SELECT * FROM users');
 $result = $query->fetchAll(PDO::FETCH_ASSOC);
 $query->closeCursor();
 return $result;
}

//retourne un utilisateur de la db en fonction de son id
function getUser($db, $id) {
  $query = $db->prepare('SELECT * FROM users WHERE userID= ?');
  $query->execute(array($id));
  $result = $query->fetch(PDO::FETCH_ASSOC);
  return $result;
  $query->closeCursor();
}

//ajoute une entrée dans la table volunteers
function adduser($db,$user){
  //var_dump($form);
  $query = $db->prepare('INSERT INTO users( name, surname, pseudo, password, age, comment, availability, street, city) VALUES(:name, :surname, :pseudo, :password, :age, :comment, :availability, :street, :city)');
  $result = $query->execute(
    array(
      'name' => $user["name"],
      'surname' => $user["surname"],
      'pseudo' => $user["pseudo"],
      'password' => $user["password"],
      'age' => $user["age"],
      'comment' => $user["comment"],
      'availability' => $user["availability"],
      'street' => $user["street"],
      'city' => $user["city"]));
  $query->closeCursor();
  //return $result;
}

 ?>
