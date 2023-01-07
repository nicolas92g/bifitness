<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesBiceps'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/hTfLACx0noI' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Allonge-toi à plat ventre sur un banc<br><br>

Étape 2 : Tu vas effectuer une flexion des coudes, en ayant les bras bien en avant du banc.<br><br>

Étape 3 : Ne tend pas complètement tes coudes en bas du mouvement cela pourait conduire à la blessure.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);