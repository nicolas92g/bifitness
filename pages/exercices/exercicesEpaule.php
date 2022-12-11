<?php
const ROOT = "../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$menu = makeSelectMenu(ROOT, $GLOBALS["exercicesEpaules"], "pages/exercices/epaules");

$content = "

<section class='pageContainer'>
    <div>
        <h1>Les exercices pour les épaules</h1>
        $menu
    </div>
</section>


";

echo genSiteContent(ROOT, $content);