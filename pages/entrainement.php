<?php
include ("../source/siteStructure.php");

$content = "
<section class='pageContainer'>
    <h2>Programme Homme</h2>
    <img src='../assets/programmeGratuit1.png' alt='programme Gratuit page 1' class='freeProgramme'>
    <a href='programmes/pdfs/1%20nutrition%20femme%20masse%20-%2045KG.pdf' download='programmeGratuitFemme.pdf'>
        Télécharger le programme
    </a>
    <h2>Programme Femme</h2>
    <a href='programmes/pdfs/Homme%20masse%205X%20programme%20prise%20de%20muscle.pdf' download='programmeGratuitHomme.pdf'>
        Télécharger le programme
    </a>
</section>
";

echo genSiteContent("..", $content);