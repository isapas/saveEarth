<?php
  include "template/header.php";
?>
<div class="container">
  <section class="text-center">
    <h1 class="col-12 mt-0 mb-4">Bienvenue sur votre messagerie</h1>

  </div>
  </section>
  <div class="container d-flex ">
    <a href="../Controller/addMessagesController.php" class="btn btn-success ">Nouveau message</a>
  </div>
  <div class="container-fluid">
    <table class="table table-hover">
      <thead class="thead-light">
          <th scope="col" class="d-none d-md-table-cell text-center ">De</th>
          <th scope="col" class="d-none d-md-table-cell text-center ">Objet</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Message</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Reçu le:</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Commentaires</th>
          <th scope="col" class="d-none d-md-table-cell text-center">Supprimer</th>
      </thead>
      <tbody>
        <?php
          // On affiche chaque entrée une à une
          foreach ($message as $key => $value) {
        ?>
        <tr class="text-center">
          <td class="text-left"><?php echo $value["messageID"]; ?></td>
          <td class="text-left"><?php echo $value["senderID"]; ?></td>
          <td class="d-none d-md-table-cell"><?php echo $value["content"]; ?></td>
          <td class="d-none d-md-table-cell"><?php echo $value["date"]; ?></td>

          <td><a href="../controller/addMessageController.php?id=<?php echo $value['senderID'];  ?>"class="btn btn-primary">Répondre</a></td>
          <td><a href="deleteVolunteerController.php?id=<?php echo $value['messageID'];  ?>" class="btn btn-danger">Supprimer</a></td>
        </tr>
        <?php
          }
        ?>
    </tbody>
    </table>
  </div>

<?php include "template/footer.php"; ?>
