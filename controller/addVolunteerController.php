<?php
  require "../model/db.php";
  $db = dbconnect();
  require "../model/volunteersManager.php";
  require "../service/formChecker.php";

  if(!empty($_POST)) {
    $form = clearFormEntries($_POST);
    addVolunteer($db,$form);
    header('Location: volunteersController.php');
    exit;
  }
//var_dump($result);
  require "../view/addVolunteerView.php";
