<?php
include ("../source/siteStructure.php");
include ("../source/pagesFunctions.php");

$sexeQuestion = makeQuestionButtonMenu("QUELLE EST VOTRE SEXE ?", "sexe",
    [
        "nextPage(\"h\")" => "Homme",
        "nextPage(\"f\"); nextPage(\"\")" => "Femme"
    ]);

$morpho = makeQuestionButtonMenu("QUELLE EST VOTRE <br>MORPHOLOGIE  ?", "morpho",
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

$name = makeQuestiontextMenu("QUEL EST VOTRE PRENOM ?", "nom");

$taille = makeQuestionNumberMenu("QUEL EST VOTRE TAILLE ?", "taille", "cm");

$poids = makeQuestionNumberMenu("QUEL EST VOTRE POIDS ?", "poids", "kg");

$poidsCible = makeQuestionNumberMenu("QUEL EST VOTRE POIDS CIBLE ?", "poidsCible", "kg");

$age = makeQuestionNumberMenu("QUEL EST VOTRE AGE ?", "age", "années");

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
                Tu va répondre à un questionnaire rapide
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
        <div id='checkoutPage'>
            <div>
                <h1>Votre programme est prêt !</h1>
                <h3 >Abonnez vous à notre offre premium pour recevoir votre programme tous les mois !</h3>  
            </div>
            
            <div id='paypal-button-container'></div>
            <script src='https://www.paypal.com/sdk/js?client-id=test&currency=EUR&vault=true&intent=subscription' data-sdk-integration-source='integrationbuilder'></script>
            
            <div id='paypal-button-container-P-2BS331075H3931308MO374KA'></div>
            <!--<script src='https://www.paypal.com/sdk/js?client-id=AfimPJThlnFU1gw1uLBHJCiBg6mwOIZHyR70SiRqNlGzfED0uK8jrF1RYmSv_CqhOdEp3zVGZxHtYEBO&vault=true&intent=subscription' data-sdk-integration-source='button-factory'></script>
            -->
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
