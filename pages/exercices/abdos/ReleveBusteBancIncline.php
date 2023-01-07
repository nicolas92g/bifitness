<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesAbdos'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/Zw6P_NnkJiU' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Allonge-toi sur le banc incliné, les pieds bloqués, les mains croisées sur les pectoraux.<br><br>
 
Étape 2 : Tu vas effectuer des relevés de buste.<br><br>

Étape 3 : Le dos reste bien droit et on remonte le buste jusqu’à toucher les genoux.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);