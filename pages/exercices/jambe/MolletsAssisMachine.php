<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesJambe'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/fyX89S9Avbs' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
 <p>Étape 1 : Assieds-toi sur la machine, les pieds à leurs emplacements et les talons dans le vide.<br><br>
  
  Étape 2 : Tu vas effectuer des élévations sur la pointe des pieds et tu vas descendre tes talons à fond lors de la phase négative.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);