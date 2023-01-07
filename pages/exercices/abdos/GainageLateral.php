<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesAbdos'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/_-H2svMCSTQ' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi sur le côté, en appui sur un coude à 90 degrés.<br><br>

Étape 2 : Tu dois tenir cette position, dos bien à plat dans l’alignement des jambes et la tête haute dans l’axe du corps.<br><br> 


Étape 3 : Le bras opposé est tendu à la verticale.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);