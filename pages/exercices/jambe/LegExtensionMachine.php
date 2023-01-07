<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesJambe'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/1fhmrpmzGkE' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Assieds-toi au fond du siège, les pieds parallèles à leurs emplacements derrière les boudins.<br><br>
 
 Étape 2 : Tu vas effectuer une extension des genoux en retenant la descente.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);