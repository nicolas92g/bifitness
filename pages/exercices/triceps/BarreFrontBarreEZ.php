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
<p>Etape 1 : Allonge toi sur un banc, les mains en prise pronation espacées d’environ la largeur des épaules, les coudes pliés à 90 degrés<br><br>

Etape 2 : tu va effectuer une extension des coudes à partir de la position barre sur le front.<br><br>

Etape 3 : tu va garder les coudes dans le prolongement des mains, les “coudes serrés”.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);