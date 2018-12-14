<?php
//var_dump($_POST);
require "../model/db.php";
require "../model/sessionManager.php";
require "../model/userManager.php";
require "../service/formChecker.php";


$db = dbconnect();
//var_dump($db);
if( isset($_POST) && !isFieldEmpty($_POST))  {
  clearFormEntries($_POST);
  $pseudo = $_POST['pseudo'];
  $password = $_POST['password'];
  $user = getUser($_POST['pseudo'], $_POST['password']);
    //var_dump($user);
    if($user) {
      initializeUserSession($user);
      //  var_dump($_SESSION);
      if ($_SESSION['user'] == 0) {
          header("Location: messagesController.php");
          exit;
      }
      if($_SESSION['user'] == 1) {
        header("Location: accueilAdminController.php");
        exit;
      }
    }
    else {
      header("Location: index.php?message=1");
      exit;
    }
}
