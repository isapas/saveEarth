<?php
require "model/db.php";
require "model/volunteersManager.php";

 function showVolunteers() {
   $db = dbconnect();
   $volunteers = getVolunteers($db);
   require "view/volunteersView.php";
 }
?>
