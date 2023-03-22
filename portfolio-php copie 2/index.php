<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="../portfolio-php/assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
    <meta name="description">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-32x32.png">    
    <title>PORTFOLIO ENFREIN MICKAEL</title>
</head>

<body>
    <!-- header personnalisé -->
        <header class="entete" id="topsite">
        <h1></h1>
        <h1>Full Stack Amateur | Portfolio</h1>
        <span class="separateur"></span>
    </header>
    <!-- navbarr responsive -->
    <nav>
        <ul>
            <li><a href="#topsite" title="Retour accueil">Accueil</a></li>
            <li><a href="#aboutme" title="presentation">Presentation</a></li>
            <li><a href="espace-admin.php" title="Admin">Espace Admin</a></li>
            <li><a href="connexion.php" title="connexion">Espace Client</a></li>
        </ul>
    </nav>
    <!-- container a gauche  -->

<div class="container=main row">
    <section class="container-left column" id="col-left">
        <div class="presentation" id="aboutme">
            <div class="content-presentation">
                <div id="spin">
                    <h3>&Agrave; propos de moi</h3>
                    <p>
                        Bonjour je m'appelle ENFREIN Mickael j'ai etudié le metier de l'electricité jusqu'en 2022 avant
                        de me
                        tourner vers les metiers du web je suis passioné du domaine du numerique et j'aime a mes heures
                        perdues un
                        peu de hardware sinon j'ai d'autres passions mais rien qui concerne le domaine du numerique
                    </p>
                </div>    
            </div>
        </div>
            <div id="cmpt-txt" class="cmpt-txt">
                <p> Mes connaissances en langage de programmation.</p>
                <p> Html 5: connaissance de base sur la structure de ce langage</p>
                <p> CSS 3: connaissance de base sur la structure de ce langage </p>
                <p> JAVASCRIPT: animation pour les cercle et comptage de   </p>
                <p> PHP: base de donnés site en php modele procedural <br> modele MVC  </p>
                <p> Wordpress : J'adore ca c'est trop pratique</p>
                <p> BootStrap : les debuts de BootStraps est a quel point c'est pratique </p>
               
            </div>
        
            <div class="cmpt-txt-2">VOICI MES DIFFÉRENTS DIPLÔMES AINSI QUE MON PARCOURS DANS CES DIFFERENTE ECOLE
                <p> DATE 
                    <p>2015 Brevet des collèges &#10003;</p>
                    <p>2017 Brevet étude professionnelle &#10003;</p>
                    <p>2018 Baccalaureat professionnelle &#10003; </p>
                    <p>2020 Brevet technicien superieur </p>
                    <p>2022 Developpeur web et web mobile</p>
                </p>
            </div>
            
            
            <div class="cmpt-txt-3">CAROUSEL DE PROJET 
                <p>voici les quelques projets que j'ai fait et qui tourneront sur eux memes toute les 4s</p>
                <p>1. Projet numero 1</p>
                    <a class="pro" href="projet.php">Voir-Plus</a>
                <p>2. Projet numero 2</p>
                <a class="pro" href="projet.php">Voir-Plus</a>
                <p>3. Projet numero 3</p>
                <a class="pro" href="projet.php">Voir-Plus</a>
            </div>
            <div class="cmpt-txt-4"> MES MOYENS DE CONTACTS
                <p>Voici comment me contacter ou a coté remplissez le formulaire si vous avez une demande precise.</p> <div class="content-contacts">
                    <div>
                        <div class="contact">
                                <button id="contacts" onclick="closeJs()"> Cliquez Ici
                                <div class="contact-perso">
                                <a href="mailto:enfreinmickael42@gmail.com ? subject=Nom du sujet "></a>
                                 <span class="email"><i class='bx bxl-gmail'></i>
                                <p>enfreinmickael42@gmail.com</p>
                                 </span>
                                 <span class="telephone"><i class='bx bxs-phone'></i>
                                <p>0771201703</p></div></button>
                                <button id="contacts" onclick="openJs()">Cliquez Ici</button>
                            
                    </div>
                </div>    
                </div>
            </div>
      <!-- container a droite        -->
     </section> 
        <section class="container-right column" id="col-right">
            <div class="portrait">Image de moi professionnelle 
                 <img src="" alt="">
            </div>
            <!-- progress bar horizontal en full css  -->
     
            <div class="progress-infos">
                <h4>Compétences techniques</h4>
                <div class="progress-barr" id="competences">
                    <div class="HTML 5">
                        <p>HTML 5</p><span><i class='bx bxl-html5'></i></span>
                        <div class="progressbar-wrapper">
                            <div title="MAITRISE" class="progressbar HTML-5 "><p class="pourcentage-1"></p></div>
                        </div>
                        <p>CSS 3</p><span><i class='bx bxl-css3'></i></span>
                        <div class="progressbar-wrapper">
                            <div title="MAITRISE-1" class="progressbar CSS-3"><p class="pourcentage-2"></p></div>
                        </div>
                        <p>JAVASCRIPT</p><span><i class='bx bxl-javascript'></i></span>
                        <div class="progressbar-wrapper">
                            <div title="MAITRISE-2" class="progressbar JAVASCRIPT"><p class="pourcentage-3"></p></div>
                        </div>
                        <p>PHP</p><span><i class='bx bxl-php'></i></span>
                        <div class="progressbar-wrapper">
                            <div title="MAITRISE-3" class="progressbar PHP"><p class="pourcentage-4"></p></div>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- ceci est la partie sur mes diplome et mes ecole  -->
        <section id="diplome">
           
                <div class=" diplôme">
                    <div>
                        <li class="brevet">Brevet de technicien supérieur</li>
                        <img class="claudel" src="./assets/images/Capture d’écran 2022-12-12 à 15.15.29.png">
                    </div>
                    <div>
                        <li class="bac">Baccalaureat professionnelle et brevet etude professionnelle </li>
                        <img class="val" src="./assets/images/Capture d’écran 2022-12-12 à 15.30.35.png"</div>
                        <div>
                            <li class="collège">Brevet des collèges</li>
                            <img class="prieuré" src="./assets/images/Capture d’écran 2022-12-12 à 16.15.13.png">
                        </div>
                    </div>
                </div>
               
        </section>
            <!-- Ceci est la partie projets pour l'instant vide avec caroussel fonctionnelle  -->
            <div class="projet" id="projects">
              <div class="content-project" >
                <section>
                    <strong>voici les projets que j'ai fait jusqu'a maintenant mais il vont s'etoffer avec le temps plus
                        les images dans le carousel</strong>
                </section> 
                <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="active item">
            <img src="./assets/images/wp10371303.webp" alt="">
        </div>
        <div class="item">
            <img src="./assets/images/wp4676588.webp" alt="">
        </div>
        <div class="item">
            <img src="./assets/images/thumb-1920-336922.jpeg" alt="">
        </div> 
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#carousel" data-slide="prev"><span>&lsaquo;</span></a>
    <a class="carousel-control right" href="#carousel" data-slide="next"><span>&rsaquo;</span></a>
</div>
        <!-- Ceci est pour la partie formulaire  -->
            </div> 
            <div class="formulaire">
      <?php include "./formulaire.php";?>
        </div>
    
    </div>
        </div>    
        </div>     
        <footer id="footer">
            <div class="mentions-legales">
                <strong> <a href="#">
                    <h4>Mention legales</h4>
                </a>
            </strong>
            </div>
            <div class="news">
            <a href="newsletter.php">
            <H4>Newsletter</H4>
                <i class='bx bxs-news'></i>
            </div>
            <div class="social-media">
            <span><a href="#"><i class='bx bxl-facebook-square'></i></a></span><p></p>
            <span><a href="#"><i class='bx bxl-twitter'></i></a></span><p></p>
            <span><a href="#"><i class='bx bxl-discord-alt '></i></a></span><p></p>
            <span><a href="#"><i class='bx bxl-instagram-alt'></i></a></span><p></p>
            <span><a href="#"><i class='bx bxl-linkedin'></i></a></span><p></p>
            </div>
            </a> 
        </footer>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.js'></script>
        <script  src="./assets/javascript/scripting.js"></script>      
    </div>
</footer>
</body>

</html>