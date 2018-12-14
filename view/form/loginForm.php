<?php
  if(isset($_GET['message'])) {
    $code = htmlspecialchars($_GET['message']);
    if($code== 1){
      $erreur = "Vous devez être connecté pour accéder au contenu";
    }
  }

 ?>


<form name="login" method="post" action="../controller/loginController.php">
  <fieldset>
  <label for="pseudo">Votre pseudo</label>
  <input type="text" name="pseudo" value="pseudo">
</fieldset>
<fieldset>
  <label for="password">Votre mot de passe</label>
  <input type="password" name="password" value="password">
</fieldset>
<fieldset>
  <input type="submit" class="btn btn-primary" value="envoyer">
</fieldset>
</form>
