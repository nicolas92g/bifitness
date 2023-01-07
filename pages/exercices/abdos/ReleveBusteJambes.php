<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesAbdos'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/2b_2reYu7XA' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Allonge-toi au sol, bloque tes genoux à 90 degrées.<br><br>
 
 
 Étape 2 : Tu vas effectuer un relevé de buste.<br><br><p/></section>


";

echo genSiteContent(ROOT, $content);