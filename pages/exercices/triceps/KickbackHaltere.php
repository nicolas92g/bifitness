<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesTriceps'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/rgGIy72F9Y4' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi debout, buste penché en avant, le dos bien droit, le genou et la main du même côté posés sur un banc.<br><br>
 
 Étape 2 : Tu vas effectuer une extension du coude en le gardant serré près de ton corps.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);