
<form class="m-auto w-50" method="post" action="">
  <div class="form-group">
    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo (isset($volunteer)?$volunteer['volunteerID']:"");?>">
    <div class="">
      <label for="name">Nom</label>
      <input type="text" class="form-control" id="name" value="<?php echo (isset($volunteer)?$volunteer['name']:"") ?>" name="name"required>
    </div>
    <div class=" mb-3">
      <label for="surname">Prénom</label>
      <input type="text" class="form-control" id="surname" value="<?php echo (isset($volunteer)?$volunteer['surname']:"") ?>" name="surname" required>
    </div>
    <div class="mb-3">
      <label for="age">age</label>
        <input type="number" class="form-control" name="age" id="age" value="<?php echo (isset($volunteer)?$volunteer['age']:"") ?>" required>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="mb-3">
      <label for="disponibility">Disponibilité</label>
    </div>
    <div class="form-check form-check-inline mb-3">
    <input class="form-check-input" type="radio" id="1" value="1" name="disponibility">
    <label class="form-check-label" for="1">disponible</label>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="0" value="0" name="disponibility">
    <label class="form-check-label" for="0">indisponible</label>
    </div>
    <div class="mb-3">
      <label for="street">Rue</label>
      <input type="text" class="form-control" id="street" placeholder="" name="street" value="<?php echo (isset($volunteer)?$volunteer['street']:"") ?>"required>
    </div>
    <div class="mb-3">
      <label for="city">Ville</label>
      <input type="text" class="form-control" id="city" placeholder="" name="city" value="<?php echo (isset($volunteer)?$volunteer['city']:"") ?>" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-group">
  <label for="comment">Commentaires</label>
  <textarea class="form-control" id="comment" name="comment" rows="3"><?php echo (isset($volunteer)?$volunteer['comment']:"") ?></textarea>
</div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Sauvegarder</button>
  </div>
</form>
