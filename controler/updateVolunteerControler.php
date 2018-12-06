<?php
require "../model/db.php";
$db = dbconnect();
require "../model/volunteersManager.php";
require "../service/formChecker.php";
$id = $_GET['id'];
$volunteer = getVolunteer($db,$id);
if(!empty($_POST)) {
  $form = clearFormEntries($_POST);
  updateVolunteer($db,$_POST);
  header('Location: volunteersControler.php');
  exit;
}
require "../view/updateVolunteerView.php";
 ?>
