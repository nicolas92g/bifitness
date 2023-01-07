<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesEpaules'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/oUFLy8BsXO0' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Assieds-toi sur un banc, le dos droit ou légèrement cambré, tu vas prendre une haltère dans chaque main.<br><br>
 
Étape 2 : Tu vas développer les haltères au-dessus de ta tête.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);