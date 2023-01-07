<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesPectoraux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/kEVGWpUZKGI' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Allonge-toi sur un banc, les pieds bien calés au sol, les bras semi-tendus avec un haltère dans chaque main.<br><br>
 
 
Étape 2 : écarte tes bras, fléchis les coudes et amène les haltères au-dessus de toi.<br><br>


</p>
</section>


";

echo genSiteContent(ROOT, $content);