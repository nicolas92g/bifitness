<?php
include("../../source/siteStructure.php");

$content = "";

if (!isset($_POST['status']) || $_POST['status'] != 'COMPLETED'){
    $content = "
        <section class='pageContainer'>
            <h1>Votre requête est invalide !</h1>
        </section>
    ";
}
else{
    $content = "
        <section class='pageContainer'>
            <h1>Merci d'avoir choisi bifitness !</h1>
            <a href='pdfs/TP1.pdf' download>Clicker pour télécharger votre programme</a>
        </section>
    ";
}

echo genSiteContent("../..", $content);