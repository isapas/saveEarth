<?php
require "../model/db.php";

require "../model/volunteersManager.php";
require "../service/formChecker.php";
$db = dbconnect();
if(!empty($_GET['id'])) {
  $id = htmlspecialchars( $_GET['id']);
  //var_dump($id);
  $volunteer = getVolunteer($db,$id);
  // var_dump($volunteer);
}

  //var_dump($volunteer);
  if(!empty($_POST)) {
    $form = clearFormEntries($_POST);
    //var_dump($_POST);
    updateVolunteer($db,$_POST);
  header('Location: volunteersController.php');
  exit;
  }
require "../view/updateVolunteerView.php";
 ?>
