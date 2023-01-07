<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesJambe'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/oH-iT5vilWU' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Cale tes pieds sur le bord de la plateforme dans la presse à cuisses, les talons dans le vide.<br><br>
 
Étape 2 : Tu vas effectuer une extension des pointes de pieds en retenant la descente.<br><br>
 
 Attention : Garde les genoux légèrement.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);