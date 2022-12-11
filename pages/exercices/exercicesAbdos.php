<?php
const ROOT = "../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$menu = makeSelectMenu(ROOT, $GLOBALS["exercicesAbdos"], "pages/exercices/abdos");

$content = "

<section class='pageContainer'>
    <div>
        <h1>Les exercices pour les abdominaux</h1>
        $menu
    </div>
</section>


";

echo genSiteContent(ROOT, $content);