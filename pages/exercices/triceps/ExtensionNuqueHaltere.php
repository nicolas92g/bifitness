<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesTriceps'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/zMIIpF3F3gk' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi debout dans une position stable (dos droit), prend un haltère dans ta main.<br><br>
 
Étape 2 : Tu vas effectuer une extension du coude à partir de la position bras derrière la tête.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);