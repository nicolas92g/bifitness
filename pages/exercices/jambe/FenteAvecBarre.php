<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesJambe'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/dVSAAJ6xlKg' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets- toi debout, la barre sur tes trapèzes<br><br>
 
Étape 2 : Tu vas effectuer une flexion du genou. Le genou placé devant ne doit jamais plier plus de 90 degrés.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);