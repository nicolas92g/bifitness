<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesPectoraux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/00lQk7ZSg5k' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Assieds-toi sur la machine, le bas du dos légèrement cambré.<br><br>
 
Étape 2 : Tu vas pousser avec tes poignées après être plus ou moins revenu en position de départ.

Étape 3 : Note que comme pour tous les exercices pectoraux, ta cage thoracique doit être sortie.<br><br></p>
</section>

";

echo genSiteContent(ROOT, $content);