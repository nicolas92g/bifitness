<?php
const ROOT = "../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$menu = makeSelectMenu(ROOT, $GLOBALS["exercicesPectoraux"], "pages/exercices/pectoraux");

$content = "

<section class='pageContainer'>
    <div>
        <h1>Les exercices pour les pectoraux</h1>
        $menu
    </div>
</section>


";

echo genSiteContent(ROOT, $content);