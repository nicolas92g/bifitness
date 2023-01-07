<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesAbdos'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    
    <iframe src='https://www.youtube.com/embed/xtjdKR-wsVo' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Allonge-toi sur le dos, les pieds au sol, les genoux fléchis.<br><br>
 
Étape 2 : Tu vas enrouler le bas du dos tout en essayant de garder le ventre rentré.<br><br>

Étape 3 : À aucun moment, le bas de ton dos ne doit complètement décoller du sol.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);