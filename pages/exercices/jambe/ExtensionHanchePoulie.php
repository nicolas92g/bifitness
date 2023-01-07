<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesJambe'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/KbeDgtj1si0' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi debout, place le boudin à la hauteur du bas du mollet.<br><br>
 
 Étape 2 : Tu vas reculer ta jambe en arrière sans cambrer le bas du dos.<br><br>
  
  Étape 3 : Penche-toi légèrement en avant pour garder le dos droit.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);