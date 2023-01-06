<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesAvantBras'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/C1QrF4Cab-I' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>

</section>


";

echo genSiteContent(ROOT, $content);