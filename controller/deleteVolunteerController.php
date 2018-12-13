<?php
require "../model/db.php";
require "../model/volunteersManager.php";
$db = dbconnect();
$id = $_GET['id'];
deleteVolunteer($db,$id);
header("Location: volunteersController.php");
exit;
 ?>
