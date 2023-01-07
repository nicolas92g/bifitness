<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesEpaules'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/HBsFhf3LG8I' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : mets-toi debout, le dos droit ou légèrement cambré, tu vas prendre la barre.<br><br>
 
Étape 2 : Tu vas développer la barre au-dessus de ta tête.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);