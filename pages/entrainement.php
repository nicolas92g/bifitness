<?php
include ("../source/siteStructure.php");

$content = "
<section class='pageContainer' id='freeProgContainer'>
    <div class='amazonWindow'>
        <h2>Programme Homme</h2>
        <img src='../assets/programmeGratuit1.png' alt='programme Gratuit homme' class='freeProgramme'>
        <a href='programmes/free/PROGRAMME%20GRATUIT%20HOMME.pdf' download='programmeGratuitFemme.pdf'>
            Télécharger le programme
        </a>
    </div>
    <div class='amazonWindow'>
        <h2>Programme Femme</h2>
        <img src='../assets/PROGRAMME%20GRATUIT%20FEMME.png' alt='programme Gratuit femme' class='freeProgramme'>
        <a href='programmes/free/PROGRAMME%20GRATUIT%20FEMME.pdf' download='programmeGratuitHomme.pdf'>
            Télécharger le programme
        </a>
    </div>
</section>
";

echo genSiteContent("..", $content);