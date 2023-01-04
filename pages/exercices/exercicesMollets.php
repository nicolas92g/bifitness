<?php
const ROOT = "../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$menu = makeSelectMenu(ROOT, $GLOBALS["exercicesMollets"], "pages/exercices/mollets");

$content = "

<section class='pageContainer'>
    <div>
        <h1>Exercices Mollets</h1>
        $menu
    </div>
</section>


";

echo genSiteContent(ROOT, $content);