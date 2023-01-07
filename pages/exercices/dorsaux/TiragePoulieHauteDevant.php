<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesDorsaux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/w3e2bWsWuEw' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Assieds-toi sur la machine poulie haute, les genoux et les pieds bien calés, les mains espacées d’une largeur supérieure à celle des épaules.<br><br>
 
Étape 2 : Tu vas tirer la barre devant toi (vers les clavicules) à partir d’une position où les bras sont pratiquement tendus.<br><br>

Étape 3 : Note que comme pour tous les exercices dos, ta cage thoracique doit être sortie. À aucun moment ton dos ne devra se retrouver rond.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);