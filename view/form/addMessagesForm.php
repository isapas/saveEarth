
<form class="m-auto w-50" method="post" action="../../messagesController.php">
  <div class="form-group">
    <div class="">
      <h3>Nouveau message</h3>
      <label for="getterPseudo">destinataire</label>
      <input type="text" class="form-control"name="getterPseudo"required>
    </div>
    <div class=" mb-3">
      <label for="object"></label>
      <input type="text" class="form-control"name="object" required>
    </div>
    <div class=" mb-3">
      <label for="content">Votre message:</label>
      <textarea type="text" class="form-control" name="content" required></textarea>
    </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </div>
</form>
