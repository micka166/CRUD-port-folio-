<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: profil.php");
    exit;
}


if (!empty($_POST)) {
    if (
        isset($_POST["email"], $_POST["pass"])
        && !empty($_POST["email"]) && !empty($_POST["pass"])
    )

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $_SESSION["error"][] = "Try Again Baby !";
        }

    require_once "pdo.php";
    $sql = "SELECT * FROM users WHERE email=:email and admin_user=1";
    $query = $db->prepare($sql);
    $query->bindValue(":email", $_POST["email"], PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();

    if (!$user) {
        die("<p class='error-infos'>admin non reconnu</p>");
    }

    if (!password_verify($_POST["pass"], $user["pass"])) {
        die("Admin non reconnu ou mdp incorrect");
    }

    $_SESSION["user"] = [
        "id" => $user["id"],
        "id" => $user["admin_user"],
        "username" => $user["username"],
        "email" => $_POST["email"]
    ];

    header("Location: admin.php");
}
// else {die("Oups! / Wrong Way");}

include "includes/Pages/header.php";
include "includes/Pages/navbar.php";
?>

<div id="container-form" class="containerconnect">
    <div class="left-side">
        <div class="head-left">
            <div class="texting">
                <h1>S'identifiez</h1>
                <h2>Pour accéder à votre compte</h2>
            </div>
            <div class="lock">
               <!-- Ajout icon ? -->
            </div>
        </div>

        <form method="POST">
          
            <span>ou utiliser vos identifiant de compte</span>
            <div>
                <!-- <label for="email">E-mail</label> -->
                <input type="email" name="email" id="email" placeholder="E-mail">
            </div>
            <div>
                <!-- <label for="pass">Password</label> -->
                <input type="password" name="pass" id="pass" placeholder="Mot de Passe">
            </div>
            <div class="getmit">
                <button type="submit">Se connecter</button>
                <a class="forget" href="#">Mot de passe oublié ?</a>
            </div>
        </form>
    </div>


<style>
    <?php include './assets/css/connexion.css' ;?>
</style>

