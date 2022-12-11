<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesPectoraux'][basename(__FILE__)];

$content = "

<section class='pageContainer'>
    <h1>$title</h1>
</section>


";

echo genSiteContent(ROOT, $content);