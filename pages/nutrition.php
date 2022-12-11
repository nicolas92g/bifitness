<?php
include ("../source/siteStructure.php");
include ("../source/pagesFunctions.php");
const ROOT = "..";

$structure = [
    "pages/nutrition/perteDePoids.php" => "Perte de poids",
    "pages/nutrition/priseDeMasse.php" => "Prise de masse",
    "pages/nutrition/seche.php" => "Sèche",
    "pages/nutrition/conseilAlimentaire.php" => "Conseil alimentaire",
    "pages/nutrition/CalculateurDeCalories.php" => "Calculateur de calories",
];

$menu = makeSelectMenu(ROOT, $structure);

$content = "

<section class='pageContainer'>
    <h2>Quel est votre objectif ?</h2>
    <div>
        $menu
    </div>
</section>


";

echo genSiteContent(ROOT, $content);

