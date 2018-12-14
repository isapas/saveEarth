<?php
  require "../model/db.php";
  require "../model/messagesManager.php";

  function showUserMessages() {
    $db = dbconnect();
    $messages = getUserMessages();
  }
 ?>
