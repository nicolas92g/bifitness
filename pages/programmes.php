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
    
    <button>Appuyez pour commencer</button>
    
</section>


";

echo genSiteContent("..", $content);
