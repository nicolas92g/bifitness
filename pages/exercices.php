<?php
const ROOT = "..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");


$menuContent = [
    "pages/exercices/exercicesAbdos.php" => "Abdominaux",
    "pages/exercices/exercicesAvantBras.php" => "Avant-bras",
    "pages/exercices/exercicesBiceps.php" => "Biceps",
    "pages/exercices/exercicesDorsaux.php" => "Dorsaux",
    "pages/exercices/exercicesEpaule.php" => "Épaules",
    "pages/exercices/exercicesJambe.php" => "Jambes / Fessier / Mollets",
    "pages/exercices/exercicesMollets.php" => "Hiit / Cardio ",
    "pages/exercices/exercicesPectoraux.php" => "Pectoraux",
    "pages/exercices/exercicesTriceps.php" => "Triceps",
];

$menu = makeSelectMenu(ROOT, $menuContent);

$content = "

<section class='pageContainer'>
    <div>
        <h1>Choisissez un groupe musculaire :</h1>
        $menu
    </div>
</section>


";

echo genSiteContent(ROOT, $content);
