<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesTriceps'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/oOPhNUsvDSg' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Etape 1 : Allonge toi sur un banc, les pieds bien calés au sol, le bas du dos légèrement cambré, positionne tes mains en pronation espacées d’une largeur inférieure à celles de tes épaules<br><br>
 
 Etape 2 : Pousse la barre après que celle-ci soit arrivée au contact de tes pectoraux.<br><br>
<br><br></p>

</section>


";

echo genSiteContent(ROOT, $content);