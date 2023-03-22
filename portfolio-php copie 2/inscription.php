<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: profil.php");
    exit;
}

$titre = "Inscription";
$nav = "inscription";

if (!empty($_POST)) {
    if (
        isset($_POST["username"], $_POST["email"], $_POST["pass"])
        && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["pass"])
    ) {
        $username = strip_tags($_POST["username"]);
        $_SESSION["error"] = [];

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $_SESSION["error"][] = "Adresse mail invalide";
        }

        $pass = password_hash($_POST["pass"], PASSWORD_ARGON2ID);

        require_once "pdo.php";
        $sql = "INSERT INTO users(username, email, pass) VALUES (:username, :email, '$pass')";
        $query = $db->prepare($sql);
        $query->bindValue(":username", $username, PDO::PARAM_STR);
        $query->bindValue(":email", $_POST["email"]);
        $query->execute();

        $id = $db->lastInsertId();

        $_SESSION["user"] = [
            "id" => $id,
            "username" => $username,
            "email" => $_POST["email"]
        ];

            header("Location: profil.php");
    } else {
        die("Le formulaire est incomplet");
    }
}

include "includes/Pages/header.php";
include "includes/Pages/navbar.php";
?>

<div id="container-inscript" class="inscription">
    <div class="panel-left">
        <div class="overlay-left">
            <div class="item-text">
                <div class="lock">
                    <div id="ico-lock" class="fa"></div>
                </div>
                <span>vous êtes</span>
                <h1>Déjà utilisateur ?</h1>
                <p>Connectez-vous pour accéder à vos informations de compte et favoris.</p>
                <a href="connexion.php" class="ghost">Se Connecter</a>
                
            </div>
         
        </div>
    </div>
    <div class="panel-right">
        <h1>Créer un compte</h1>
        <h2>Formulaire d'inscription</h2>
        <form method="POST">
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>ou utiliser une adresse mail</span>
            <div>
                <!-- <label for="username">Nom :</label> -->
                <input type="text" name="username" id="username" placeholder="Nom">
            </div>
            <div>
                <!-- <label for="email">E-mail :</label> -->
                <input type="email" name="email" id="email" placeholder="E-mail">
            </div>
            <div>
                <!-- <label for="pass">Mot de passe :</label> -->
                <input type="password" name="pass" id="pass" placeholder="Mot de Passe">
            </div>
            <div class="valid-cgu">
                <span>En validant votre inscription, vous acceptez et reconnaissez avoir pris connaissance des <a class="forget" href="#">Conditions générales d'utilisation.</a></span>
                <button type="submit">Valider l'inscription</button>
            </div>
        </form>
    </div>
</div>



<?php
include "includes/Pages/footer.php";
?>

<style>
    <?php include './assets/css/connexion.css' ;?>
</style>