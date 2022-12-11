<?php
const ROOT = "../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$menu = makeSelectMenu(ROOT, $GLOBALS["exercicesDorsaux"], "pages/exercices/dorsaux");

$content = "

<section class='pageContainer'>
    <div>
        <h1>Les exercices pour les dorsaux</h1>
        $menu
    </div>
</section>


";

echo genSiteContent(ROOT, $content);