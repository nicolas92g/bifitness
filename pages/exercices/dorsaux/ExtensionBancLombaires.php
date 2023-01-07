<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesDorsaux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/yChMxKrWB0M' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Pose-toi sur le banc à lombaire, les pieds bien calés sur le plateau.<br><br>
 
 Étape 2 : Tu vas effectuer une descente puis une remontée du buste, les mains dérrière la tete.<br><br>

Étape 3 : Fait attention de bien avoir les genoux légèrement fléchis, si tu gardes les jambes complètement tendues, tes ischio-jambiers risques la déchirure.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);