<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesTriceps'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/idLgxofRovU' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Allonge-toi face au sol, les pieds au niveau de la largeur d’épaules, les mains écartées d’une largeur inférieure à celle des épaules.
 
 Étape 2 : Tu vas effectuer une extension des coudes en les gardant collés au corps.</p>
</section>


";

echo genSiteContent(ROOT, $content);