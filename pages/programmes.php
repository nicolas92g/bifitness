<?php
include ("../source/siteStructure.php");
include ("../source/pagesFunctions.php");

$sexeQuestion = makeQuestionButtonMenu("Quelle est votre sexe ?", "sexe",
    [
        "nextPage(\"h\")" => "Homme",
        "nextPage(\"f\")" => "Femme"
    ]);

$morphoHomme = makeQuestionButtonMenu("Quelle est votre morphologie  ?", "morphoHomme",
    [
        "nextPage(\"mince\")" => "Mince",
        "nextPage(\"normal\")" => "Normal",
        "nextPage(\"rond\")" => "Rond"
    ]);

$morphoFemme = makeQuestionButtonMenu("Quelle est votre morphologie  ?", "morphoFemme",
    [
        "nextPage(\"fine\")" => "Fine",
        "nextPage(\"normale\")" => "Normale",
        "nextPage(\"ronde\")" => "Ronde"
    ]);

$objectifHomme = makeQuestionButtonMenu("Quelle est ton objectif  ?", "objectifHomme",
    [
        "nextPage(\"athletique\")" => "Physique athlétique",
        "nextPage(\"massif\")" => "Physique massif",
        "nextPage(\"sec\")" => "Physique sec"
    ]);

$objectifFemme = makeQuestionButtonMenu("Quelle est ton objectif  ?", "objectifFemme",
    [
        "nextPage(\"fine\")" => "Fine",
        "nextPage(\"athletique\")" => "Physique athlétique",
        "nextPage(\"formes\")" => "Formes"
    ]);

$objectif2Femme = makeQuestionButtonMenu("précise tes objectif !", "objectif2Femme",
    [
        "nextPage(\"ventre\")" => "Ventre plat",
        "nextPage(\"fesses\")" => "Fesses galbées",
        "nextPage(\"jambes\")" => "Jambes fines",
        "nextPage(\"poitrine\")" => "Poitrine ferme"
    ]);

$zonesHomme = makeQuestionButtonMenuMultipleResponse("Quelles zones du corps veut tu développer ?", "zones",
    [
        "Epaules",
        "Dos",
        "Bras",
        "Pectoraux",
        "Cuisses",
        "Abdominaux",
        "Mollets",
        "Fesses",
    ], "zonesFunction()");

$materiel = makeQuestionButtonMenuMultipleResponse("Quel matériel as-tu ?", "materiel",
    [
        "Aucun matériel",
        "Haltères",
        "Barre de traction",
        "Barre de musculation",
        "Kettlebell",
    ], "zonesFunction()");

$name = makeQuestiontextMenu("Quel est votre prénom ?", "nom");

$taille = makeQuestionNumberMenu("Quel est votre taille ?", "taille", "cm");

$poids = makeQuestionNumberMenu("Quel est votre poids ?", "poids", "kg");

$poidsCible = makeQuestionNumberMenu("Quel est votre poids cible ?", "poidsCible", "kg");

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
    
    <!--$sexeQuestion
    $morphoHomme
    $zonesHomme
    $materiel
    $name
    $taille
    $poids
    $poidsCible-->
    
    <section>
        <h1>Votre programme est prêt !</h1>
        <h3 >Payez la somme de 49 € en clickant sur un des deux boutons pour accéder à votre programme.</h3>
        <div id='paypal-button-container-P-4S598466X5491002MMOZLSHQ'></div>
        <script src='https://www.paypal.com/sdk/js?client-id=AfimPJThlnFU1gw1uLBHJCiBg6mwOIZHyR70SiRqNlGzfED0uK8jrF1RYmSv_CqhOdEp3zVGZxHtYEBO&vault=true&intent=subscription' 
            data-sdk-integration-source='button-factory'>
        </script>
        <script src='../js/paypal.js'></script>
    </section>
    </div>
</div>

<script src='../js/programmes.js'></script>
";

echo genSiteContent("..", $content, "
    <script src='../js/inputs.js'></script>
");
