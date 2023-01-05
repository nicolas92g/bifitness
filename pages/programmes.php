<?php
include ("../source/siteStructure.php");
include ("../source/pagesFunctions.php");

$sexeQuestion = makeQuestionButtonMenu("Quelle est votre sexe ?", "sexe",
    [
        "nextPage(\"h\")" => "Homme",
        "nextPage(\"f\"); nextPage(\"\")" => "Femme"
    ]);

$morphoHomme = makeQuestionButtonMenu("Quelle est votre morphologie  ?", "morphoHomme",
    [
        "nextPage(\"mince\");nextPage(\"\");" => "Mince",
        "nextPage(\"normal\");nextPage(\"\");" => "Normal",
        "nextPage(\"rond\");nextPage(\"\");" => "Rond"
    ]);

$morphoFemme = makeQuestionButtonMenu("Quelle est votre morphologie  ?", "morphoFemme",
    [
        "nextPage(\"fine\")" => "Fine",
        "nextPage(\"normale\")" => "Normale",
        "nextPage(\"ronde\")" => "Ronde"
    ]);

$objectifHomme = makeQuestionButtonMenu("Quelle est ton objectif  ?", "objectifHomme",
    [
        "nextPage(\"masse\"); nextPage(\"\")" => "prise de masse",
        "nextPage(\"seche\"); nextPage(\"\")" => "sèche"
    ]);


$objectifFemme = makeQuestionButtonMenu("Quelle est ton objectif  ?", "objectifFemme",
    [
        "nextPage(\"forme\")" => "prendre des formes",
        "nextPage(\"affiner\")" => "s'affiner"
    ]);

$name = makeQuestiontextMenu("Quel est votre prénom ?", "nom");

$taille = makeQuestionNumberMenu("Quel est votre taille ?", "taille", "cm");

$poids = makeQuestionNumberMenu("Quel est votre poids ?", "poids", "kg");

$poidsCible = makeQuestionNumberMenu("Quel est votre poids cible ?", "poidsCible", "kg");

$age = makeQuestionNumberMenu("Quel est votre age ?", "age", "ans");

$nbrSeance = makeQuestionButtonMenu("Combien de fois peut-tu t'entraîner par semaine ?", "nbrSeance",
    [
        "nextPage(3)" => " 3 ",
        "nextPage(4)" => " 4 ",
        "nextPage(5)" => " 5 ",
        "nextPage(6)" => " 6 "
    ]);

$mail = makeQuestiontextMenu("Quel est votre mail ? (Attention ne vous trompez pas !)", "mail");

$content = "
<div class='pageContainer'>
    <div>
    <section>
        <div></div>
        <div>
            <h1>Bienvenue !</h1>
            <p>
                Vous allez répondre à un questionnaire de quelques questions
                qui vont nous permettre de créer le programme correspondant
                à vos envies, vos objectifs, votre niveau et votre matériel
            </p>
        </div>
        
        <button onclick='nextPage(\"\")'>Appuyez pour commencer</button>            
        
    </section>
    $sexeQuestion
    $objectifHomme
    $objectifFemme
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
