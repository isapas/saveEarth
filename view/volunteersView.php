<?php
  include "template/header.php";
//var_dump($volunteers);
?>
<div class="container">
  <section class="text-center">
    <h1 class="col-12 mt-0 mb-2">Administrer les bénévoles</h1>

  </section>
  <div class="container d-flex justify-content-around">
    <a href="materielsAdmin.php?action=add" class="btn btn-primary">Ajouter un matériel</a>
    <select class=" btn-primary browser-default custom-select col-4 mt-1 mb-1 ">
           <option selected>Trier par:</option>
               <option value="nom">Nom de A-Z</option>
               <option value="age">Âge</option>
               <option value="ville">Ville</option>
               <option value="disponibilité">Disponibilité</option>
       </select>
  </div>
  </div>
  <div class="container-fluid">
    <table class="table table-hover">
      <thead class="thead-light">
          <th scope="col" class="d-none d-md-table-cell text-center ">Nom</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Prénom</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Âge</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Commentaires</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Disponibility</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Rue</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Ville</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Modifier</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Supprimer</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // On affiche chaque entrée une à une
          foreach ($volunteers as $key => $value) {
        ?>
        <tr class="text-center">
          <td class="text-left"><?php echo $value["name"]; ?></td>
          <td class="d-none d-md-table-cell"><?php echo $value["surname"]; ?></td>
          <td class="d-none d-md-table-cell"><?php echo $value["age"]; ?></td>
          <td class="d-none d-md-table-cell"><?php echo $value["comment"]; ?></td>
          <td class="d-none d-lg-table-cell"><?php echo ($value["disponibility"] == 1)?"disponible":"Indisponible"; ?></td>
          <td class="d-none d-lg-table-cell"><?php echo ($value["street"]); ?></td>
          <td class="d-none d-lg-table-cell"><?php echo $value["city"]; ?></td>
        </tr>
        <?php
          }
        ?>
    </tbody>
    </table>
  </div>

<?php include "template/footer.php"; ?>
