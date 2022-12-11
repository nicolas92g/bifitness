<?php
const ROOT = "../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$menu = makeSelectMenu(ROOT, $GLOBALS["exercicesBiceps"], "pages/exercices/biceps");

$content = "

<section class='pageContainer'>
    <div>
        <h1>Les exercices pour les biceps</h1>
        $menu
    </div>
</section>


";

echo genSiteContent(ROOT, $content);