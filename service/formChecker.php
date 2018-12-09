<?php
//nettoie les entrées de formulaire
  function clearFormEntries($form) {
    foreach ($form as $key => $value) {
      $form['key'] = htmlspecialchars($value);
      return $form;
    }
  }

//vérifie si le champ n'est pas vide
function isFieldEmpty($form) {
  foreach ($form as $key => $value) {
    if(empty ($value)) {
      return "message d'erreur";
    }
  }
}
