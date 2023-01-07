<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesBiceps'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/WStWUQI8Xk4' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi devant un pupitre, prend l'haltère en prise supination.<br><br>

Étape 2 : Tu vas effectuer une flexion du coude, en ayant le bras bien calé sur le pupitre.<br><br>

Étape 3 : Ne tend pas complètement ton coude en bas du mouvement cela pourait conduire à la blessure.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);