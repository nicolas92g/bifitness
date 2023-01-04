<?php
const ROOT = "../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");


$menu = makeSelectMenu(ROOT, $GLOBALS["exercicesAvantBras"], "pages/exercices/avantBras");

$content = "

<section class='pageContainer'>
    <div>
        <h1>Exercices avants bras </h1>
        $menu
    </div>
</section>


";

echo genSiteContent(ROOT, $content);