<!-- page d'accueil qui propose à l'utilisateur de choisir ce qu'il veut faire-->

<?php
  include "template/header.php";
?>
<section class="container-fluid text-center">
  <h3 class="col-12 text-center">Bienvenue sur la plateforme d'administration: que souhaitez-vous faire?</h3>
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Accéder à la plateforme d'administration des bénévoles</h5>
            <p class="card-text">Vous pourrez ajouter, modifier et supprimer un bénévole</p>
            <a href="../controler/volunteersControler.php" class="btn btn-primary">J'y vais</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Bienvenue sur la plateforme d'administration des évênements</h5>
            <p class="card-text text-center">Vous pourrez ajouter supprimer ou mettre a jour les informations concernant les évênements</p>
            <a href="#" class="btn btn-primary">J'y vais</a>
          </div>
        </div>
      </div>
  </section>

  <?php
  include "template/footer.php";
?>
