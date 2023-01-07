<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesDorsaux'][basename(__FILE__)];

$content = "

<section class='pageTextContainer'>
    <h1>$title</h1>
    <iframe src='https://www.youtube.com/embed/FQT-re0FKLk' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
<p>Étape 1 : Mets-toi debout, buste penché en avant, le genou et la main du même côté posés sur un banc, le bas du dos légèrement cambré, l’autre main en prise neutre à un haltère.<br><br>
 
Étape 2 : Tu vas tirer l’haltère vers toi, à partir d’une position où le bras est pratiquement tendu.<br><br>

Étape 3 : Note que comme pour tous les exercices dos, ta cage thoracique doit être sortie. À aucun moment ton dos ne devra se retrouver rond.<br><br></p>
</section>


";

echo genSiteContent(ROOT, $content);