<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesBiceps'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/XcZJ0VF09sM' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi debout, prend la barre EZ en prise pronation espacée d’environ la largeur de tes épaules, position à avoir : (dos droit, pieds de la largeur des épaules)<br><br> 

Étape 2 : Tu vas effectuer une flexion des coudes, en les gardant serrés près du corps.<br><br>

Étape 3 : Ne tend pas complètement tes coudes en bas du mouvement cela pourait conduire à la blessure.</p>
</section>


";

echo genSiteContent(ROOT, $content);