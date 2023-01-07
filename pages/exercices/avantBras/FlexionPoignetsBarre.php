<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesAvantBras'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/mHfU-p2-oJw' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Prend la barre en prise supination.<br><br>
 
Étape 2 : Tu vas effectuer des flexions de poignets.<br><br>

Attention : N'étire pas trop ton poignet en bas du mouvement, tu risquerais d'avoir une blessure.</p></section>


";

echo genSiteContent(ROOT, $content);