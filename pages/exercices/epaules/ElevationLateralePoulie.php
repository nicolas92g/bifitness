<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesEpaules'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/R2ks5c2iWGM' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi debout, entre deux poulies vis-à-vis.<br><br>
 
 
 Étape 2 : Tu vas élever ton bras latéralement jusqu’à ce qu’ils soient parallèles au sol.<br><br>

</p>
</section>


";

echo genSiteContent(ROOT, $content);