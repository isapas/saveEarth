<?php
require "../model/db.php";
$db = dbconnect();
//  var_dump($db);
require "../model/userManager.php";
require "../model/sessionManager.php";
require "../service/formChecker.php";

require "../view/accueilView.php";
initializeAnonymousSession();
//var_dump($_SESSION);
 ?>
