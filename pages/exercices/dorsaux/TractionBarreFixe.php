<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesDorsaux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/j1ypmN2fzXI' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Tu vas te suspendre à une barre, les mains espacées d’une largeur supérieure à celle des épaules.<br><br>

Étape 2 : Tu vas monter plus ou moins haut à la force de tes bras, à partir d’une position pratiquement bras tendus.<br><br>
 
Étape 3 : Note que comme pour tous les exercices dos, ta cage thoracique doit être sortie. À aucun moment ton dos ne devra se retrouver rond.<br><br>
</p>
</section>


";

echo genSiteContent(ROOT, $content);