<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesJambe'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/eJ9YhoMSW7A' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi debout, l’écartement des pieds légèrement inférieur à la largeur du bassin, le buste vertical et le dos droit, un haltère porté devant soit collé au corps.<br><br>
 
Étape 2 : Tu vas effectuer une flexion des genoux.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);