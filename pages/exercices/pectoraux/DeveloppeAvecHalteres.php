<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesPectoraux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/lphX-b3jkMc' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Etape 1 :  Allonge toi sur un banc, les pieds bien calés au sol, le bas du dos légèrement cambré, un haltère dans chaque main en prise pronation<br><br>

Etape 2 : tu va pousser les haltères après être descendu plus ou moins bas au niveau des pectoraux.<br><br>

Etape 3 : note que comme pour tous les exercices pectoraux, ta cage thoracique doit être “sortie”. à aucun moment ton dos doit se retrouver à plat.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);