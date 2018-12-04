<?php include "template/header.php"; ?>

<div class="container">
  <section class="d-flex flex-row justify-content-between">
    <h1 class="col-4 mt-0">Administrer les bénévoles</h1>
    <select class=" btn-primary browser-default custom-select col-4 mt- ">
        <option selected>Trier par:</option>
            <option value="nom">Nom de A-Z</option>
            <option value="age">Âge</option>
            <option value="ville">Ville</option>
            <option value="disponibilité">Disponibilité</option>
    </select>
  </section>
  </div>
  <div class="container-fluid">
    <table class="table table-hover">
      <thead class="thead-light">
          <th scope="col" class="d-none d-md-table-cell text-center ">Nom</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Prénom</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Âge</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Commentaires</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Rue</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Ville</th>
          <th scope="col" class="d-none d-md-table-cell text-center">ajouter</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Modifier</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // On récupère tout le contenu de la table materiel
          $result = getMateriels($db);
          // On affiche chaque entrée une à une
          foreach ($result as $key => $value) {
        ?>
        <tr class="text-center">
          <td class="text-left"><?php echo $value["nom"]; ?></td>
          <td class="d-none d-md-table-cell"><?php echo $value["age"]; ?></td>
          <td class="d-none d-md-table-cell"><?php echo $value["commentaire"]; ?></td>
          <td class="d-none d-lg-table-cell"><?php echo ($value["disponibilité"] == 1)?"disponible":"Indisponible"; ?></td>
          <td class="d-none d-lg-table-cell"><?php echo ($value["rue"]); ?></td>
          <td class="d-none d-lg-table-cell"><?php echo $value["ville"]; ?></td>
        </tr>
        <?php
          }
        ?>
    </tbody>
    </table>
  </div>

<?php include "template/footer.php"; ?>
