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
                    Découvre plus de 100 exercices de musculation classés par zones musculaires, pour travailler toutes les parties de ton corps. Tous les exercices sont détaillés et accompagnés d'une vidéo explicative, pour une bonne exécution.
                </p>
                <button onclick="location.href='pages/exercices.php'">Découvrir</button>
            </section>
            <!-- "PROGRAMMES" section -->
            <section class="container imgBackground">
                <h3 id="progTitle">PROGRAMME PERSONNALISÉ</h3>
                <h2 id="progPrice">19,99€</h2>
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
                        <span>Envoi immédiat</span>
                    </div>
                    <div class="progLine">
                        <img src="assets/done.svg">
                        <span>Conseils sur la nutrition & l’entraînement</span>
                    </div>
                    <button onclick="location.href='pages/programmes.php'" id="progButton" class="greenButton">GÉNÉRER MON PROGRAMME</button>
                </div>
            </section>
            <!--  -->
            <section class="container textContainer">
                <h2>POURQUOI PRENDRE LE PROGRAMME BIFITNESS ?</h2>
                <p>
                    Tu auras des entrainements structurés, tu sauras quoi faire, comment le faire et quand le faire.

                    Donc une progression plus rapide.

                    De nouvelles connaissances sur la musculation et la nutrition.<br><br>

                    Tu recevras chaque mois un programme différent qui te permettra de progresser encore et encore, et si un jour quelle que soit la raison tu as envie d'arrêter et bien peux annuler ton abonnement à tout moment.


                </p>
            </section>
            <!-- "ENTRAINEMENT" section -->
            <section class="container imgBackground">
                <div></div>
                <div>
                    <H2>PROGRAMME D'ESSAI GRATUIT </H2>
                    <p id="freeProgP">
                        Dans cette rubrique tu trouveras un programme d'essai gratuit non personnalisé pour homme ou femme !
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
                    Combien de calories tu dois consommer chaque jour pour maigrir, grossir ou rester au même poids ?<br><br>
                    Découvre quels sont tes besoins caloriques et maîtrise ton poids avec le calculateur de calories.
                </p>
                <button onclick="location.href='pages/nutrition/CalculateurDeCalories.php'">Découvrir</button>
            </section>
            <!-- "NUTRITION" section -->
            <section class="container imgBackground">
                <div></div>
                <div>
                    <H2>NUTRITION</H2>
                    <p>
                        La nutrition joue un rôle essentiel si tu souhaites progresser en musculation, c'est le carburant de ton corps et de tes muscles.
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