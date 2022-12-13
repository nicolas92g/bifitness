<?php
include ("../source/siteStructure.php");

$content = "

<section class='pageContainer'>
    <div></div>
    <div>
        <h1>Bienvenue !</h1>
        <p>
            Vous allez répondre à un questionnaire de quelques questions
            qui vont nous permettre de créer le programme correspondant 
            à vos envies, vos objectifs, votre niveau et votre matériel
        </p>
    </div>
    
    <button onclick='goToPage(1)'>Appuyez pour commencer</button>
    
</section>

<section class='pageContainer'>
    <h1>Quel est votre sexe ?</h1>
</section>

<section class='pageContainer'>
    
</section>

<script src='../js/programmes.js'></script>
";

echo genSiteContent("..", $content);
