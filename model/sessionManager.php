<?php

function initializeAnonymousSession() {
  session_start();
  $_SESSION['user'] = 'anonymous';
}

function initializeUserSession($user) {
  session_start();
  $_SESSION['user'] = $user;
  if ($user['status'] = 0){
    $_SESSION['user'] = 'user';
  }
  if($user['status'] = 1){
    $_SESSION['user'] = 'admin';
  }
}

//restreint l'accès aux seules utilisateurs connectés
function restrictToUser() {
  session_start();
  if(isset($_SESSION['user']) || !empty($_SESSION['user'])) {
    return true;
  }
  return false;
}

function restrictToAdmin() {
  if($_SESSION['user'] = 'admin') {
    return true;
  }
}
 ?>
