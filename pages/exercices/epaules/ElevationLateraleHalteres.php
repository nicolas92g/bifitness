<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesEpaules'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/9WHO--ndDEg' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Assieds-toi sur banc, un haltère dans chaque main.<br><br>
 
Étape 2 : Tu vas d’élever tes bras latéralement jusqu’à ce qu’ils soient parallèles au sol.<br><br>

Étape 3 : Tu vas effectuer l'exercice avec les bras presque tendu (garde un léger flex au niveau des coudes).<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);