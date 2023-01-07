<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesJambe'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/d4KvuG3Dyj0' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Assieds-toi sur la machine, les jambes dans leurs emplacements.<br><br>
 
Étape 2 : Tu vas écarter tes jambes au maximum (selon ta souplesse) en retenant le retour.<br><br>

Attention : Vas-y doucement, les adducteurs sont des muscles qui se déchirent facilement.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);