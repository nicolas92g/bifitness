<?php
const ROOT = "../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$menu = makeSelectMenu(ROOT, $GLOBALS["exercicesBiceps"], "pages/exercices/biceps");

$content = "

<section class='pageContainer'>
    <div>
        <h1>Exercices Biceps</h1>
        $menu
    </div>
</section>


";

echo genSiteContent(ROOT, $content);