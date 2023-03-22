<?php
session_start();
if (isset($_SESSION["user"])) {
    
    exit;?>










<div id="deleteModal" class="modal">
  <div class="modal-content">
    <h4>Confirmation de suppression</h4>
    <p>Êtes-vous sûr de vouloir supprimer ce projet ? Cette action est irréversible.</p>
  </div>
  <div class="modal-footer">
    <a href="projet.php" class="modal-close waves-effect waves-green btn-flat">Annuler</a></div>
    <div class=modal-footer2>
      <form method="post">
  <label for="id_projet">ID:</label>
  <input type="text" name="id_projet" id="id_projet">
  <input type="submit" name="submit" value="Supprimer">
</form>
  </div>
</div>

<?php
}







    require_once "pdo.php";

    $sql = "DELETE FROM projets WHERE id_projet=:id";
    $query = $db->prepare($sql);
    $query->bindValue(":id",$_GET["id"]);
    $query->execute();



    

;?>

<button><a href="index.php">ACCEUIL </a></button>

<style>
    <?php include "./assets/css/delete.css"?>
</style>


