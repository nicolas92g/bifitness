<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesMollets'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/fTkE4_iKPIY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Etape 1 :  Allongé sur un banc, les pieds bien calés au sol, le bas du dos légèrement cambré, les mains espacées d’une largeur supérieure à celle des épaules<br><br>



Etape 2 :  Pousser la barre après que celle-ci soit arrivée au contact de vos pectoraux.<br><br>



Etape 3 :  Il est bon de noter que comme lors de tous les exercices pour les pectoraux, votre cage thoracique doit être “sortie”.<br><br>



Vous ne devez à aucun moment vous retrouver à plat.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);