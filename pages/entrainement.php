<?php
include ("../source/siteStructure.php");

$content = "
<section class='pageContainer'>
    <img src='../assets/programmeGratuit1.png' alt='programme Gratuit page 1' class='freeProgramme'>
</section>
";

echo genSiteContent("..", $content);