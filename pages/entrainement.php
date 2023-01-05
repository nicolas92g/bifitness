<?php
include ("../source/siteStructure.php");

$content = "
<section class='pageContainer'>
    <iframe src='programmes/pdfs/femme%20programme%204%20X%20SEMAINE.pdf' class='pdfReader'></iframe>
    <!--<H2>Programme Femme</H2>
    <iframe src='programmes/pdfs/femme%20programme%204%20X%20SEMAINE.pdf'></iframe>-->
</section>
";

echo genSiteContent("..", $content);