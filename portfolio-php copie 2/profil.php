<?php 
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
}
require "pdo.php";

include "includes/Pages/header.php"; ?>


<style>
    <?php include "assets/css/global.css"; ?>
</style>


<div id="container-profil">
    <h1>Votre Compte Utilisateur</h1>
    <p>Vos informations personnelles :</p>
    <h3>Nom Utilisateur : <?= $_SESSION["user"]["username"];?></h3>
    <p>E-mail : <?= $_SESSION["user"]["email"];?></p>
    <button>Modification de mot de passe</button>
    <button><a href="deconnexion.php">Deconnexion</a></button>
</div>










