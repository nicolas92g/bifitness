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
<p>Étape 1 : Allonge-toi sur un banc, les pieds bien calés au sol, le bas du dos légèrement cambré, les mains en prise pronation espacées d’une largeur inférieure à celles de tes épaules.<br><br>
 
 
Étape 2 : Tu vas pousser la barre après que celle-ci soit arrivée au contact de tes pectoraux.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);