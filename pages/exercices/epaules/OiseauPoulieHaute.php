<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesEpaules'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/Q8KnaSoLJ80' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi debout entre deux poulies vis-à-vis, le buste droit, la poignée droite dans la main gauche, la poignée gauche dans la main droite en prise neutre.<br><br>
 
Étape 2 : Tu vas écarter tes bras vers l’arrière, pense à garder tes bras presque tendus (léger flex).<br><br>

Attention : La poulie doit être à la hauteur de tes épaules.<br><br></p>

</section>


";

echo genSiteContent(ROOT, $content);