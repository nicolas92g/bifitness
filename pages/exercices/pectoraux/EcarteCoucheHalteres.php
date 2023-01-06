<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesPectoraux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/kEVGWpUZKGI' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Etape 1 :  Allonge toi sur un banc, les pieds bien calés au sol, les bras semi-tendus avec un haltère dans chaque main, à partir d’une position bras écartés (coudes fléchis) tu écarte t'es bras et reviens en position initial comme sur la vidéo<br><br>

Etape 2 :Pour solliciter un maximum les pectoraux descend les coudes dans le prolongement de t'es épaules. Attention à ne pas avoir les bras trop tendus, cela accentuera les risques de blessure pour ton biceps.<br><br>

Etape 3 : Il est bon de noter pour finir, que comme lors de tous les exercices pour les pectoraux, ta cage thoracique doit être “sortie”. à aucun moment ton dos doit se retrouver à plat.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);