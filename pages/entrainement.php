<?php
include ("../source/siteStructure.php");

$content = "
<section class='pageContainer'>
    <img src='../assets/programmeGratuit1.png' alt='programme Gratuit page 1' class='freeProgramme'>
    <a href='programmes/pdfs/1%20nutrition%20femme%20masse%20-%2045KG.pdf' download='programmeGratuitFemme.pdf'>
        Cliquez ici pour télécharchez le programme pour les femmes gratuitement
    </a>
    <a href='programmes/pdfs/Homme%20masse%205X%20programme%20prise%20de%20muscle.pdf' download='programmeGratuitHomme.pdf'>
        Cliquez ici pour télécharchez le programme pour les hommes gratuitement
    </a>
</section>
";

echo genSiteContent("..", $content);