<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesDorsaux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/Gbt_aYtAt30' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : mets-toi debout, les genoux légèrement fléchis, le buste penché en avant (à 90 degrés), le bas du dos légèrement cambré, les mains en prise pronation espacées d’une largeur légèrement supérieure à celle des épaules.<br><br> 

Étape 2 : Tu vas effectuer un tirage de la barre vers toi, à partir d’une position où les bras sont pratiquement tendus.<br><br>

Étape 3 : Note que comme pour tous les exercices dos, ta cage thoracique doit être sortie. À aucun moment ton dos ne devra se retrouver rond.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);