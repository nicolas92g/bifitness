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
                <a href="pages/nutrition.php" onclick="openBurgerMenu(false)">Nutrition</a>
                <a href="pages/entrainement.php" onclick="openBurgerMenu(false)">Plan d'entrainement gratuit</a>
                <a href="pages/programmes.php" onclick="openBurgerMenu(false)">Générateur de programme</a>
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
                <H2>Exercices</H2>
                <p>
                    Découvre des exercices de musculation classés par zones musculaires et expliqués par moi-même !
                </p>
                <a href="pages/exercices.php">Découvrir !</a>
            </section>
            <!-- "PROGRAMMES" section -->
            <section class="container imgBackground">
                <div></div>
                <h2>Suivi personalisé</h2>
                <ul>
                    <li>Diète complète personnalisé</li>
                    <li>Entraînement personnalisé</li>
                    <li>Envoi mensuel</li>
                    <li>Accompagnement 7j/7</li>
                    <li>Adapté à ton rythme de vie</li>
                    <li>Conseils sur la nutrition & l’entraînement</li>
                </ul>
                <button onclick="location.href='pages/programmes.php'">Obtenir mon programme !</button>
                <div></div>
            </section>
            <!-- "ENTRAINEMENT" section -->
            <section class="container textContainer">
                <H2>Entrainement</H2>
                <p>
                    Dans cette rubrique vous trouverez  des exemples de programmes expliquées pour tous les niveaux !
                </p>
                <a href="pages/entrainement.php">Accéder à des programmes gratuits</a>
            </section>
            <!-- "NUTRITION" section -->
            <section class="container imgBackground">
                <div></div>
                <div>
                    <H2>Nutrition</H2>
                    <p>
                        La nutrition joue un rôle essentiel si vous souhaitez progresser en musculation c'est le carburant de votre corps et de vos muscles
                    </p>
                </div>
                <button onclick="location.href='pages/nutrition.php'">Découvrez maintenant !</button>
            </section>
        </main>

        <!-- footer -->
        <?=makeFooter()?>
    </body>
    <!-- execute the javascript after the site creation -->
    <script type="text/javascript" src="js/script.js"></script>
</html>