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
                            <div title="MAITRISE" class="progressbar HTML-5 "><p class="pourcentage-1">90%</p></div>
                        </div>
                        <p>CSS 3</p><span><i class='bx bxl-css3'></i></span>
                        <div class="progressbar-wrapper">
                            <div title="MAITRISE-1" class="progressbar CSS-3"><p class="pourcentage-2">80%</p></div>
                        </div>
                        <p>JAVASCRIPT</p><span><i class='bx bxl-javascript'></i></span>
                        <div class="progressbar-wrapper">
                            <div title="MAITRISE-2" class="progressbar JAVASCRIPT"><p class="pourcentage-3">30%</p></div>
                        </div>
                        <p>PHP</p><span><i class='bx bxl-php'></i></span>
                        <div class="progressbar-wrapper">
                            <div title="MAITRISE-3" class="progressbar PHP"><p class="pourcentage-4">0%</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ceci est la partie sur mes diplome et mes ecole  -->
            <section id="diplome">
                <div class=" diplôme">
                    <div>
                        <li class="brevet">Brevet de technicien supérieur</li>
                        <img class="claudel" src="./images/Capture d’écran 2022-12-12 à 15.15.29.png">
                    </div>
                    <div>
                        <li class="bac">Baccalaureat professionnelle et brevet etude professionnelle </li>
                        <img class="val" src="./images/Capture d’écran 2022-12-12 à 15.30.35.png"</div>
                        <div>
                            <li class="collège">Brevet des collèges</li>
                            <img class="prieuré" src="./images/Capture d’écran 2022-12-12 à 16.15.13.png">
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
            <img src="./images/code-820275__340.jpeg" alt="">
        </div>
        <div class="item">
            <img src="./images/computer-1873831__340.webp" alt="">
        </div>
        <div class="item">
            <img src="./images/programming-1873854__340.webp" alt="">
        </div> 
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#carousel" data-slide="prev"><span>&lsaquo;</span></a>
    <a class="carousel-control right" href="#carousel" data-slide="next"><span>&rsaquo;</span></a>
</div>
        <!-- Ceci est pour la partie formulaire  -->
            </div> 
            <div class="formulaire">
            <form  method="POST">
                <fieldset>
                    <legend>Formulaire avec Validation</legend>
                    
                    <input type="text" name="name" id="name" autocomplete="off"required
                        pattern="[a-zA-Z\u00C0-\u00FF\u0020\u0027\u002D]{2,}" />
                    <label for="name">Nom :</label>
                    <p class="field-guide">Quel est votre nom ?</p>

                    <input type="email" name="email" id="email" autocomplete="off" required
                        pattern="(.+)@(.+){1,}\.(.+){2,}" />
                    <label for="email">E-mail</label>
                    <p class="field-guide">Indiquer votre adresse e-mail</p>

                    <input type="tel" name="tel" id="tel" autocomplete="off" autocorrect="off" />
                    <label for="tel">Téléphone</label>

                    <input type="checkbox" name="terms" id="terms" required />
                    <label for="terms">J'ai pris connaissance des Conditions d'utilisation</label>

                    <input type="checkbox" name="newsletter" id="newsletter" />
                    <label for="newsletter">Confirmer mon inscription</label>

                    <button type="submit">Enregistrer</button>
                    <button disabled>Submit</button>

                </fieldset>
            </form>
        </div>
    
    </div>
        </div>    
        </div>