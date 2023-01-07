<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesEpaules'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/NY_rlOMH8ew' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Assieds-toi sur la machine face au dossier, les pieds bien stables au sol, une poignée dans chaque main.<br><br>
 
Étape 2 : Tu vas écarter les bras vers l’arrière, tu dois avoir les bras presque tendus.<br><br>

Attention : Pense à régler le siège à la bonne hauteur.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);