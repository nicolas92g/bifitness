<?php
const ROOT = "..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");


$menuContent = [
    "pages/exercices/exercicesAbdos.php" => "Les adbominaux",
    "pages/exercices/exercicesAvantBras.php" => "Les avant-bras",
    "pages/exercices/exercicesBiceps.php" => "Les biceps",
    "pages/exercices/exercicesDorsaux.php" => "Les dorsaux",
    "pages/exercices/exercicesEpaule.php" => "Les épaules",
    "pages/exercices/exercicesJambe.php" => "Les jambes",
    "pages/exercices/exercicesMollets.php" => "Les mollets",
    "pages/exercices/exercicesPectoraux.php" => "Les pectoraux",
    "pages/exercices/exercicesTriceps.php" => "Les triceps",
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
