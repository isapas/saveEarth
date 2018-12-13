<?php

function initializeAnonymousSession($answers) {
  session_start();
  $_SESSION['user'] = 'anonymous';
}

function initializeUserSession($user) {
  session_start();
  $_SESSION['user'] = $user;
}

//restreint l'accès aux seules utilisateurs connectés
function restrictToUser() {
  session_start();
  if(isset($_SESSION['user']) || !empty($_SESSION['user'])) {
    return true;
  }
  return false;
}




 ?>
