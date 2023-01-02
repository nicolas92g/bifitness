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
    "nextPage( \"1\")" => "Activité de faible intensité 1 à 3 fois par semaine",
    "nextPage( \"2\")" => "Personne active / Exercices d’intensité modérée 3 à 5 fois par semaine / Marche 2 à 5 km par jour / Fait entre 9400 pas et 23 500 pas.",
    "nextPage( \"3\")" => "Personne très active / Exercices de forte intensité 6 fois par semaine / Marche plus de 5 km par jour / Fait plus de 23 500 pas.",
    "nextPage( \"4\")" => "Activité physique intense tous les jours, au travail ou en entraînement / S’entraîne 2 fois par jour.",
];

$sexeMenu = makeQuestionButtonMenu("Quel est votre sexe ?", "sexe",  $sexeContent);

$ageMenu = makeQuestionNumberMenu("Quel age avez vous ?", "age", "ans");
$poidsMenu = makeQuestionNumberMenu("Quel est votre poids ?", "poids", "kg");
$tailleMenu = makeQuestionNumberMenu("Quelle est votre taille ?", "taille", "cm");

$activiteMenu = makeQuestionButtonMenu("Evaluez votre activité physique régulière ?", "activite",  $activiteContent);

$content = "

<div class='pageContainer'>
    <div>
        <section id='intro' class='question'>
            <h1>Calculez vos besoins caloriques !</h1>
            <button onclick='nextPage( \"\")'>Commencez !</button>
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