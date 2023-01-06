<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesPectoraux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/X9bpnooiZBc' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Etape 1 : En équilibre sur des barres parallèles, les mains écartées d’une largeur supérieure à celles des épaules, les bras tendus, le buste légèrement penché en avant<br><br>
 
Etape 2 : tu va effectuer une extension des coudes après être descendu plus ou moins bas.<br><br>

Etape 3 :Note que comme pour tous les exercices pectoraux, ta cage thoracique doit être “sortie”. À aucun moment, tes épaules ne doivent se retrouver en avant de tes pectoraux.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);