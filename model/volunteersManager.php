<?php

//retourne une entrée de la table volunteers en fonction de son id
function getVolunteer($db,$id){
  $query = $db->prepare('SELECT * FROM volunteers where id= ?');
  $query->execute(array($id));
  $result = $requete->fetch(PDO::FETCH_ASSOC);
  $query->closeCursor();
}
 //retourne toutes les entrées de la table volunteers
function getVolunteers($db) {
  $query = $db->query('SELECT * FROM volunteers');
  $result = $query->fetchAll(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}
//modifie une entrée de la table volunteer existante en fonction de son id
function updateVolunteer($db,$form){
  //var_dump($form);
  $query = $db->prepare('UPDATE volunteers SET name = :name, surname = :surname, age : age, comment = :comment, disponibility = :disponibility, street = :street, city = :city WHERE id = :id');
  $result = $query->execute(
    array(
    'id' => $form["id"],
    'name' => $form["name"],
    'surname' => $form["surname"],
    'age' => $form["age"],
    'comment' => $form["comment"],
    'disponibility' => $form["disponibility"],
    'street' => $form["street"],
    'city' => $form["city"]));
  $query->closeCursor();
  return $result;
}

//ajoute une entrée dans la table volunteers
function addvolunteer($db,$form){
  //var_dump($form);
  $query = $db->prepare('INSERT INTO volunteers( id,name, surname, age, comment, disponibility, street, city) VALUES(:name, :surname, :age, :comment, :disponibility, :street, :city)');
  $result = $query->execute(
    array(
      'id' => $form['id'],
      'name' => $form["name"],
      'surname' => $form["surname"],
      'age' => $form["age"],
      'comment' => $form["comment"],
      'disponibility' => $form["disponibility"],
      'street' => $form["street"],
      'city' => $form["city"]));
  $query->closeCursor();
  return $result;
}

//efface une entrée de la table volunteers en fonction de son id
function deleteVolunteer($db,$id){
  $query = $db->prepare('DELETE FROM volunteers where id= ?');
  $result = $query->execute(array($id));
  return $result;
}
