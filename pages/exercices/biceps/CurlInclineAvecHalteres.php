<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesBiceps'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/Dbma31bNBd4' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Assieds-toi sur un banc incliné à 45 degrés, ton dos doit être en contact avec le banc, mais ta tête doit être relevée et tes pieds bien calés au sol.<br><br>
 
Étape 2 : Tu vas effectuer une flexion des coudes en retenant la descente.<br><br>

Étape 3 : Ne tend pas complètement tes coudes en bas du mouvement cela pourait conduire à la blessure.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);