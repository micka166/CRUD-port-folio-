<?php 





// On vérif si le formulaire à été envoyé
if(!empty($_POST)){

 

    // on vérif les champs obligatoires (requis = vide)
    if(isset($_POST["name"], $_POST["email"])
     && !empty($_POST["name"]) 
     && !empty($_POST["email"])
     && !empty($_POST["commentaires"]))

    {
        // Formulaire est complet
        // On protège les données récupérées (faille XSS)
        $nom = strip_tags($_POST["name"]);
         $_SESSION["error"] = [];

        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
             $_SESSION["error"] [] = "Adresse mail invalide";
             die("Adresse mail invalide");
            exit;
            }
  


        // Hashage du MDP pour protection
        // $pass = password_hash($_POST[""], PASSWORD_ARGON2ID);

        // On enregistre dans la BDD
        require_once "pdo.php";
        $sql = "INSERT INTO formulaire(nom, email, tel ,commentaires) VALUES (:nom, :email, :tel ,:commentaires)";
        $query = $db->prepare($sql);
        $query->bindValue(":nom", $nom, PDO::PARAM_STR);
        $query->bindValue(":email", $_POST["email"]);
        $query->bindValue(":tel", $_POST["tel"]);
        $query->bindValue(":commentaires" ,$_POST["commentaires"]);
        $query->execute();

       
        
        

        // On récupère l'ID du new user

        // $id = $db->lastInsertId();

        // $_SESSION["user"] = [
        //     "id" => $id,
        //     "nom" => $nom,
        //     "email" => $_POST["email"],
            
        // ];

        // header("Location: index.php");

     } 
    
} else {
    
    
}
   
;?>


















<form method="post" >
                <fieldset>
                    <legend>Formulaire avec Validation</legend>
                    
                    <input type="text" name="name" id="name" autocomplete="off"required
                        pattern="[a-zA-Z\u00C0-\u00FF\u0020\u0027\u002D]{2,}" />
                    <label for="name">Nom :</label>
                    

                    <input type="email" name="email" id="email" autocomplete="off"  />
                    <label for="email">E-mail</label>
                    
                    

                    <input type="tel" name="tel" id="tel" autocomplete="off" autocorrect="off" />
                    <label for="tel">Téléphone</label>

                    <textarea type="text" name="commentaires" rows="3" cols ="40"></textarea>
                    <label for="commentaires">comment</label>

                    <input type="checkbox" name="terms" id="terms" required />
                    <label for="terms">J'ai pris connaissance des Conditions d'utilisation</label>

                    <input type="checkbox" name="newsletter" id="newsletter" />
                    <label for="newsletter">Confirmer mon inscription</label>

                    <button type="submit">Enregistrer</button>
                    <button disabled>Submit</button>
                </fieldset>
            </form>