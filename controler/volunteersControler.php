<?php
require "../model/db.php";
require "../model/volunteersManager.php";
$db = dbconnect();
$volunteers = getVolunteers($db);


require "../view/volunteersView.php";
//var_dump($db);


?>
