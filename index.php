<?php include("source/siteStructure.php")?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>bifitness</title>
        <link rel="icon"href="assets/icon.png">
        <!--    include css files    -->
        <link rel="stylesheet" type="text/css" href="style/common.css">
        <link rel="stylesheet" type="text/css" href="style/indexStyle.css">
        <!--    use mobile real screen size   -->
        <meta name="viewport" content="width=device-width"/>
    </head>

    <body>
        <!--    arrow that show that user is able to scroll down  -->
        <img alt="scroll down" src="assets/scrool.svg" id="scrollArrow">
        <!--   burger menu  -->
        <header id="menu">
            <nav>
                <img src="assets/icon.png" width="80" alt="headerIcon">
                <a href="pages/exercices.php" onclick="openBurgerMenu(false)">Exercices</a>
<!--                <a href="pages/nutrition.php" onclick="openBurgerMenu(false)">Nutrition</a>-->
                <a href="" onclick="alert('Cette section sera bientôt disponible :)')">Nutrition</a>
                <a href="pages/entrainement.php" onclick="openBurgerMenu(false)">Programme d'essai gratuit</a>
                <a href="pages/programmes.php" onclick="openBurgerMenu(false)">Programme personnalisé</a>
                <a href="pages/nutrition/CalculateurDeCalories.php" onclick="openBurgerMenu(false)">Calculateur de calories</a>
<!--                <a href="pages/presentation.php"  onclick="openBurgerMenu(false)">Qui suis-je ?</a>-->
            </nav>
            <!-- button that allow to close the application -->
            <img src="assets/closeButton.svg" alt="close" onclick="openBurgerMenu(false)">
        </header>

        <main>
            <!-- first section of presentation -->
            <section class="container imgBackground">
                <!-- burger menu is made with css -->
                <div id="mobileHeader">
                    <img src="assets/icon.png" width="80" alt="headerIcon">
                    <h2>BIFITNESS</h2>
                    <div id="burgerMenu" onclick="openBurgerMenu(true)">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div></div>
                <div>
                    <h1>TRANSFORME TOI <br>DÈS MAINTENANT</h1>
                </div>
                <div></div>
<!--                <img src="assets/icon.png" width="100" alt="icon">-->
            </section>
            <!-- "EXERCICES" section -->
            <section class="container textContainer">


                <H2>EXERCICES</H2>
                <img src="assets/biceps.png" alt="biceps">
                <p>
                    Découvre plus de 100 d' exercices de musculation classés par zones musculaires, pour travailler toute les parties du corps . Tous les exercices sont détaillés et accompagnés de d'une vidéo explicative, pour une bonne exécution.
                </p>
                <button onclick="location.href='pages/exercices.php'">Découvrir</button>
            </section>
            <!-- "PROGRAMMES" section -->
            <section class="container imgBackground">
                <h3 id="progTitle">PROGRAMME PERSONNALISÉ</h3>
                <h2 id="progPrice">19,99€/mois</h2>
                <div id="progDiv">
                    <div class="progLine">
                        <img src="assets/done.svg">
                        <span>Diète complète personnalisé</span>
                    </div>
                    <div class="progLine">
                        <img src="assets/done.svg">
                        <span>Entraînement personnalisé</span>
                    </div>
                    <div class="progLine">
                        <img src="assets/done.svg">
                        <span>Envoi mensuel</span>
                    </div>
                    <div class="progLine">
                        <img src="assets/done.svg">
                        <span>Envoi immédiat</span>
                    </div>
                    <div class="progLine">
                        <img src="assets/done.svg">
                        <span>Conseils sur la nutrition & l’entraînement</span>
                    </div>
                    <div class="progLine">
                        <img src="assets/done.svg">
                        <span>Annulable à tout moment</span>
                    </div>
                    <button onclick="location.href='pages/programmes.php'" id="progButton" class="greenButton">GÉNÉRER MON PROGRAMME</button>
                </div>
            </section>
            <!--  -->
            <section class="container textContainer">
                <h2>Pourquoi prendre le programme Bifitness ?</h2>
                <p>
                    Également, je serais joignable 7j/7 pour répondre à tes questions si besoin, être à l’écoute et modifier en temps réel
                    chaque détail du quotidien si nécessaire. Au cours de ta progression, je ferais évoluer tes diètes et tes entraînements
                    afin que ton corps reste en constante évolution.
                    Un bilan hebdomadaire aura lieu afin d’avoir un retour sur tes ressentis physiques, visuels et généraux (diète, sommeil,
                    entraînements, rythme de vie ect…).
                    Chaque début de mois, nous procéderons à un gros bilan afin de faire une mise au point sur ton évolution physique et sur
                    l’avancement de tes objectifs.
                    À la fin du suivi, tu auras appris à écouter ton corps, à devenir autonome sur l’évolution de ton physique et tu auras
                    acquis un maximum de connaissances au niveau diététique et entraînement.
                </p>
            </section>
            <!-- "ENTRAINEMENT" section -->
            <section class="container imgBackground">
                <div></div>
                <div>
                    <H2>PROGRAMME D'ESSAI GRATUIT </H2>
                    <p>
                        Dans cette rubrique vous trouverez  des exemples de programmes expliquées pour tous les niveaux !
                    </p>
                    <button onclick="location.href='pages/entrainement.php'" class="">Découvrir</button>
                </div>
                <div></div>
            </section>
            <!-- "Calculateur de calories" section -->
            <section class="container textContainer">
                <H2>CALCULATEUR DE CALORIES</H2>
                <img src="assets/calories.png" alt="calories">
                <p>
                    combien de calories tu dois  consommer chaque jour pour maigrir, grossir ou rester au même poids ?
                    Découvre quels sont  tes besoins caloriques et maîtrise enfin ton poids.
                </p>
                <button onclick="location.href='pages/nutrition/CalculateurDeCalories.php'">Découvrir</button>
            </section>
            <!-- "NUTRITION" section -->
            <section class="container imgBackground">
                <div></div>
                <div>
                    <H2>NUTRITION</H2>
                    <p>
                        La nutrition joue un rôle essentiel si vous souhaitez progresser en musculation c'est le carburant de votre corps et de vos muscles
                    </p>
                </div>
<!--                <button onclick="location.href='pages/nutrition.php'" class="">Découvrir</button>-->
                <button onclick="alert('Cette section sera bientôt disponible :)')">Découvrir</button>
            </section>
        </main>

        <!-- footer -->
        <?=makeFooter()?>
    </body>
    <!-- execute the javascript after the site creation -->
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</html>