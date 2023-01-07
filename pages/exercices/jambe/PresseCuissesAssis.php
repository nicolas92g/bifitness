<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesJambe'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/9xOe5R1B1DE' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
 <p>Étape 1 : Assieds-toi sur la machine, le dos plaqué contre le dossier, les pieds sur la plateforme.<br><br>
  
  
 Étape 2 : tu vas effectuer une extension des genoux, les pieds écartés largeur du bassin, légèrement tournés vers l’extérieur (en canard) et placés au milieu du plateau.<br><br></p>  
</section>


";

echo genSiteContent(ROOT, $content);