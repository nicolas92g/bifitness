<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesPectoraux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/Vs8vnN2NWXg' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Etape 1 : Allonge toi face au sol, les pieds sur le banc, largeur d’épaules, les mains écartées d’une largeur supérieure à celle des épaules, le dos bien droit dans l’alignement des jambes<br><br>

Etape 2 : tu va effctuer une extension des coudes associée à une abduction des épaules après être plus ou moins descendu.<br><br>

Etape 3 : note que comme pour de tous les exercices pour les pectoraux, ta cage thoracique doit être “sortie”.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);