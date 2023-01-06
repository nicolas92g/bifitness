<?php
$ROOT = "../..";
include($ROOT . "/source/siteStructure.php");
include($ROOT . "/source/pagesFunctions.php");


$sexeContent = [
    "nextPage( \"h\")" => "Homme",
    "nextPage( \"f\")" => "Femme"
];

$activiteContent = [
    "nextPage( \"0\")" => "Sédentaire, pas d’activité physique",
    "nextPage( \"1\")" => "Activité de faible intensité",
    "nextPage( \"2\")" => "Personne active",
    "nextPage( \"3\")" => "Personne très active",
    "nextPage( \"4\")" => "Activité physique intense",
];

$sexeMenu = makeQuestionButtonMenu("QUEL EST TON SEXE ?", "sexe",  $sexeContent);

$ageMenu = makeQuestionNumberMenu("QUEL AGE AS-TU ?", "age", "ans");
$poidsMenu = makeQuestionNumberMenu("QUEL EST TON POIDS?", "poids", "kg");
$tailleMenu = makeQuestionNumberMenu("QUEL EST VOTRE TAILLE ?", "taille", "cm");

$activiteMenu = makeQuestionButtonMenu("EVALUEZ VOTRE ACTIVITE PHYSIQUE ?", "activite",  $activiteContent);

$content = "

<div class='pageContainer'>
    <div>
        <section id='intro' class='question amazonWindow'>
            <h1>Calculez vos besoins caloriques</h1>
            <button onclick='nextPage( \"\")' class='greenButton'>Commencez</button>
        </section>
        $sexeMenu
        $ageMenu
        $poidsMenu
        $tailleMenu
        $activiteMenu
        <section id='result'>
        </section>
    </div>
</div>


";

echo genSiteContent($ROOT, $content, "
    <script type='text/javascript' src='$ROOT/js/calorieCounter.js'></script>
    <script type='text/javascript' src='$ROOT/js/inputs.js'></script>
");