<style>
    <?php include "assets/css/style-projet.css" ;?>
</style>



<?php


include "pdo.php" ;
?>
    
<?php
    include "./includes/pages/header.php";
    include "./includes/pages/navbar.php"
    
?>

<?php 
    $sql = "SELECT * FROM projets";
    $requete = $db->query($sql);
    $projets = $requete->fetchAll();
?> 
<article>
    <?php foreach($projets as $projet):?> 
    <p class="id"><?= $projet["id_projet"]?></p>    
    <p class="date"><?= $projet["date_debut"]?></p>
    <p class="date"><?=$projet["date_fin"]?></p>
    <h2><?= $projet["nom_projet"]?></h2>
    <h3><?= $projet["budget"]?>€</h3>
    <blockquote><?= $projet["descriptif_projet"]?></blockquote>
    <button><a href="delete.php?id=<?= $projet["id_projet"]?>">Supprimer le projet </a></button>
    <?php endforeach;?>
   
</article>   
  



<?php
    include "./includes/pages/footer.php"
    ;?> 




