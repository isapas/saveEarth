<?php
require "../model/db.php";
require "../model/volunteersManager.php";
$db = dbconnect();
$volunteers = getVolunteers($db);
//var_dump($volunteers);
require "../view/volunteersView.php";
//var_dump($db);


?>
