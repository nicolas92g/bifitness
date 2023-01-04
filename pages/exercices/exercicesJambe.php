<?php
const ROOT = "../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$menu = makeSelectMenu(ROOT, $GLOBALS["exercicesJambe"], "pages/exercices/jambe");

$content = "

<section class='pageContainer'>
    <div>
        <h1>Exercices Jambes</h1>
        $menu
    </div>
</section>


";

echo genSiteContent(ROOT, $content);