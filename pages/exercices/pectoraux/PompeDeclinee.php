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
<p>Étape 1 : Allonge-toi face au sol, mets tes pieds sur un banc, les mains écartées d’une largeur supérieure à celle de tes épaules et le dos bien droit.<br><br>
 
Étape 2 : Tu vas effectuer une extension des coudes après être plus ou moins descendu.<br><br>

Étape 3 : Note que comme pour tous les exercices pectoraux, ta cage thoracique doit être sortie.<br><br>
</p>
</section>


";

echo genSiteContent(ROOT, $content);