<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesAbdos'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/asREq5IOZ1U' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi face au sol, en appui sur tes coudes à 90 degrés.<br><br>

Étape 2 : Tu dois tenir cette position, en gardant le dos bien à plat dans l’alignement des jambes et la tête haute dans l’axe du corps.<br><br></p>
</section> 


";

echo genSiteContent(ROOT, $content);