<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesPectoraux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/aTl1XmDCzaM' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>

<p>Étape 1 : Allonge-toi sur un banc, les pieds bien calés au sol, le bas du dos légèrement cambré, les mains espacées d’une largeur supérieure à celle des épaules<br><br>



Étape 2 : Pousse la barre après que celle-ci soit arrivée au contact de tes pectoraux.<br><br>



Étape 3 : Note que comme pour tous les exercices pectoraux, ta cage thoracique doit être sortie.<br><br>



Tu ne doit à aucun moment te retrouver dos à plat.<br><br></p>
</section>




";

echo genSiteContent(ROOT, $content);