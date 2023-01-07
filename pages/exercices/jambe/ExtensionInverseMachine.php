<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesJambe'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/fGelXnoD0TQ' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Assieds-toi sur la machine, les jambes à leurs emplacements, le boudin en arrière des jambes environ à hauteur du bas des mollets.<br><br>
 
Étape 2 : Tu vas effectuer une extension des deux jambes en même temps.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);