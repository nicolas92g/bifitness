<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesPectoraux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/JbNGB9d7E64' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
 <p>Étape 1 : Allonge-toi sur un banc incliné, les pieds bien calés au sol, le bas du dos légèrement cambré, un haltère dans chaque main.<br><br>
 
Étape 2 : Tu vas développer les haltères après être descendu plus ou moins bas au niveau des pectoraux.<br><br>


Étape 3 : Note que comme pour tous les exercices pectoraux, ta cage thoracique doit être sortie.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);