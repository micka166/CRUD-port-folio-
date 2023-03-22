<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Admin</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
</head>
<body>
  <header>
    <h1>Dashboard Admin</h1>
  </header>

  <main>
    <section id="overview">
      <h2>Overview</h2>
      <h3>Ajouter un projet</h3>
  <?php
      if (!empty($_POST)) 
    if (
        isset($_POST["nom_projet"], $_POST["descriptif_projet"], $_POST["budget"])
        && !empty($_POST["nom_projet"]) && !empty($_POST["descriptif_projet"]) && !empty($_POST["budget"])
    ) {
        $nom_projet = strip_tags($_POST["nom_projet"]);
        $_SESSION["error"] = [];

        if (!filter_var($_POST["descriptif_projet"],FILTER_DEFAULT )) {
            $_SESSION["error"][] = "format invalide";
        }
          
        if (!filter_var($_POST["budget"],FILTER_VALIDATE_INT )) {
          $_SESSION["error"][] = " Format invalide";
      }
        require_once "pdo.php";
        $sql = "INSERT INTO projets(nom_projet , descriptif_projet,date_debut ,date_fin ,budget ) VALUES (:nom_projet, :descriptif_projet ,:date_debut ,:date_fin , :budget)";
        $query = $db->prepare($sql);
        $query->bindValue(":nom_projet", $nom_projet, PDO::PARAM_STR);
        $query->bindValue(":descriptif_projet", $_POST["descriptif_projet"]);
        $query->bindValue(":date_debut" ,$_POST["date_debut"]);
        $query->bindValue(":date_fin" ,$_POST["date_fin"]);
        $query->bindValue(":budget" ,$_POST["budget"],);
        $query->execute();

        $id = $db->lastInsertId();

        $_SESSION["user"] = [
            "id" => $id,
            "nom_projet" => $nom_projet,
            "descriptif_projet" => $_POST["descriptif_projet"]
        ];

            header("Location: admin.php");
    } else {
        die("Le formulaire est incomplet");
    }
    ;?>



	<form method="post" action="">
		<label for="nom_projet">Nom du projet :</label>
		<input type="text" name="nom_projet" ><br><br>
		
		<label for="description">Description :</label>
		<textarea name="descriptif_projet" rows="5" cols="50" ></textarea><br><br>
		
		<label for="date_debut">Date de début :</label>
		<input type="date" name="date_debut" ><br><br>
		
		<label for="date_fin">Date de fin :</label>
		<input type="date" name="date_fin" ><br><br>
		
		<label for="budget">Budget :</label>
		<input type="number" name="budget" ><br><br>
		
		<input type="submit" value="Ajouter">
	</form>

  <button><a href="projet.php">Voir les projets</a></button>
  <button><a href="index.php">Home</a></button>

  



      
    </section>
    <section id="users">
      <h2>Users</h2>
      
<?php


include "pdo.php" ;
?>


<?php 
    $sql = "SELECT * FROM users";
    $requete = $db->query($sql);
    $users = $requete->fetchAll();
?> 
<article>
    <?php foreach($users as $user):?> 
    <p class="id"><?= $user["username"]?></p>    
    <p class="date"><?= $user["email"]?></p>
    <h2><?= $user["admin_user"]?></h2>
    <?php endforeach;?>
   
</article>  
    </section>
    
  </main>
  <footer>
    <p>&copy; 2023 Dashboard Admin</p>
  </footer>

<style>
    <?php include "./assets/css/admin.css" ;?>
</style>


</body>
</html>
