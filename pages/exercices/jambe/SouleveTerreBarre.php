<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesJambe'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/b2ar8l3RkqY' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi debout, dos droit ou légèrement cambré, les pieds au niveau de la largeur d’épaules, genoux semi-fléchis.<br><br>

Étape 2 : Penche ton buste vers l’avant à 90 degrés et remonte à la verticale en gardant les épaules bien en arrière et les jambes semi-tendues.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);