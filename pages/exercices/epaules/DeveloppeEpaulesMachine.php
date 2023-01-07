<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesEpaules'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/iaUDZeZg8uc' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Assieds-toi sur la machine, les pieds bien calés, les mains à leurs emplacements en prise pronation.<br><br>
 
 Étape 2 : Tu vas effectuer une extension des coudes.<br><br>
</p>
</section>


";

echo genSiteContent(ROOT, $content);