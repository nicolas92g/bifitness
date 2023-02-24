<?php
include ("../source/siteStructure.php");
include ("../source/pagesFunctions.php");

$sexeQuestion = makeQuestionButtonMenu("QUELLE EST TON SEXE ?", "sexe",
    [
        "nextPage(\"h\")" => "Homme",
        "nextPage(\"f\"); nextPage(\"\")" => "Femme"
    ]);

$morpho = makeQuestionButtonMenu("QUELLE EST TA <br>MORPHOLOGIE  ?", "morpho",
    [
        "nextPage(\"mince\");" => "Physique mince",
        "nextPage(\"normal\");" => "Physique normal",
        "nextPage(\"rond\");" => "Physique rond"
    ]);

$objectifHomme = makeQuestionButtonMenu("QUEL EST TON OBJECTIF  ?", "objectifHomme",
    [
        "nextPage(\"masse\"); nextPage(\"\")" => "Prise de masse",
        "nextPage(\"seche\"); nextPage(\"\")" => "Sèche"
    ]);


$objectifFemme = makeQuestionButtonMenu("QUEL EST TON OBJECTIF  ?", "objectifFemme",
    [
        "nextPage(\"forme\")" => "Prendre des formes",
        "nextPage(\"affiner\")" => "S'affiner"
    ]);

$name = makeQuestiontextMenu("QUEL EST TON PRENOM ?", "nom");

$taille = makeQuestionNumberMenu("QUEL EST TA TAILLE ?", "taille", "cm");

$poids = makeQuestionNumberMenu("QUEL EST TON POIDS ?", "poids", "kg");

$poidsCible = makeQuestionNumberMenu("QUEL EST TON POIDS CIBLE ?", "poidsCible", "kg");

$age = makeQuestionNumberMenu("QUEL EST TON AGE ?", "age", "années");

$nbrSeance = makeQuestionButtonMenu("COMBIEN DE FOIS PEUT-TU T'ENTRAINER PAR SEMAINE ?", "nbrSeance",
    [
        "nextPage(3)" => " 3 ",
        "nextPage(4)" => " 4 ",
        "nextPage(5)" => " 5 ",
        "nextPage(6)" => " 6 "
    ]);

$mail = makeQuestiontextMenu("VOTRE ADDRESSE MAIL ? <br>(Attention ne te trompe pas)", "mail");

$content = "
<div class='pageContainer' id='progSelector'>
    <div>
    <section id='welcomePageContainer' class='amazonWindow'>
        <div></div>
        <div>
            <h2>TON PROGRAMME BIFITNESS</h2>
            <p id='welcomeProgP'>
                Tu vas répondre à un questionnaire rapide
                qui va me permettre de créer le programme correspondant
                à tes envies, tes objectifs et ton niveau.
            </p>
        </div>
        <button onclick='nextPage(\"\")' class='greenButton'>APPUYER POUR COMMENCER</button>
    </section>
    $sexeQuestion
    $objectifHomme
    $objectifFemme
    $morpho
    $name
    $taille
    $poids
    $poidsCible
    $age
    $nbrSeance
    $mail
    <section class='question'>
        <div id='checkoutPage' class='amazonWindow'>
            <div>
                <h2>TON PROGRAMME EST PRÊT</h2>
                <p style='text-align: center;'>Il ne te reste plus qu'une dernière étape avant de recevoir ton programme par mail.</p>
                <h3>Prix du programme :<br> 19,99 €</h3>
            </div>
            
            <div style='text-align: center;'>
                <div id='paypal-button-container'></div>
            </div>
            <script src='https://www.paypal.com/sdk/js?client-id=AfimPJThlnFU1gw1uLBHJCiBg6mwOIZHyR70SiRqNlGzfED0uK8jrF1RYmSv_CqhOdEp3zVGZxHtYEBO&currency=EUR'></script>  
            
            <script src='../js/programmes.js'></script>
            <script src='../js/paypal.js'></script>
        </div>
    </section>
    </div>
</div>

<script src='../js/programmes.js'></script>
";

echo genSiteContent("..", $content, "
    <script src='../js/inputs.js'></script>
");
