<?php
session_start();
if (isset($_SESSION["user"])) {
    exit;
}


if (!empty($_GET)) {
    if (!isset($_GET["success"])) {
        exit;
    }
    if ($_GET["success"] = "1") {
        echo "<h2>Votre inscription à notre newsletter est bien validée</h2>";
        echo "<p>Un message de confirmation vous à été envoyé sur votre adresse mail</p>";
        echo "<button> <a href='index.php'>Retour</a> </button>";
        // $to = $_POST ["email"];
        // $message = "est ce que tu voudrais pas";
        // $objet = "Confirmation de votre inscription";
        // mail($to, $objet, $message);
        return;
    }
}

if (!empty($_POST)) {
    if (
        isset($_POST["nom"], $_POST["email"])
        && !empty($_POST["nom"]) && !empty($_POST["email"])
    ) {
        $nom = strip_tags($_POST["nom"]);
        $_SESSION["error"] = [];

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $_SESSION["error"][] = "Adresse mail invalide";
        }

        require_once "pdo.php";
        $sql = "INSERT INTO newsletter(nom, email) VALUES (:nom, :email)";
        $query = $db->prepare($sql);
        $query->bindValue(":nom", $nom, PDO::PARAM_STR);
        $query->bindValue(":email", $_POST["email"]);
        $query->execute();
        $id = $db->lastInsertId();

        header("Location: newsletter.php?success=1");
    } else {
        die("Le formulaire est incomplet");
    }
}; ?>

<div class="news-box">
    <h2>Newsletter</h2>
    <h3>Inscription à notre lettre d'information</h3>
    <p>Restez informé sur les dernières news et mises à jour de notre site.</p>
    <p>Entrer votre Email et votre mot de passe pour vous envoyer la newsletter sur votre adresse email  </p>
    <form method="POST">
        <input type="text" name="nom" id="nom" placeholder="Nom">
        <input type="email" name="email" id="email" placeholder="E-mail">
        <button type="submit">Confirmer</button>
    </form>
</div>



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>Newsletter</title>
  </head>
  <body>
    <h1 class="newsletter">Nom de la newsletter</h1>
    <p>Bonjour,</p>
    <p>Nous sommes heureux de vous présenter la nouvelle édition de notre newsletter mensuelle. Nous espérons que vous allez apprécier les contenus sélectionnés pour vous.</p>
    <div class="article">
      <h2>Titre de la première rubrique</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, molestiae, provident neque maxime nostrum cum blanditiis nobis incidunt hic consequuntur, eaque in facilis non ipsum alias. Cum voluptates quos asperiores!</p>
    </div>
    <div class="article">
      <h2>Titre de la deuxième rubrique</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit enim officia, dicta, quas accusantium soluta hic tempora praesentium quos autem distinctio qui optio blanditiis itaque minus commodi iste eligendi nisi?</p>
     
     
     
     
<style>
    <?php include './assets/css/newsletter.css';?>
</style>