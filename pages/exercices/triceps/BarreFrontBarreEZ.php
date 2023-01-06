<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesTriceps'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/WXjCqijDbc4' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Etape 1 : Allongé sur un banc, les mains en prise pronation espacées d’environ la largeur des épaules, les coudes pliés à 90 degrés, 

Etape 2 : Il s’agit d’effectuer une extension des coudes à partir de la position barre sur le front.

Etape 3 : On dit souvent qu’il faut garder les coudes dans le prolongement des mains, avoir les “coudes serrés”. La vérité est qu’il vous faut trouver la position dans laquelle vous pouvez forcer confortablement.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);