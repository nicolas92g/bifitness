<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesTriceps'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/0Xq8_lBJBII' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi face à une poulie haute, les genoux semi-fléchis, le dos bien droit, coudes collés au corps.<br><br>
 
Étape 2 : Tu vas effectuer une extension des coudes.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);