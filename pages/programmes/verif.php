<?php
include("../../source/siteStructure.php");

const SEXE = 1;
const POIDS = 2;
const OBJECTIF = 3;
const NBR_SEANCE = 4;

$content = "";

if (false){
    $content = "
        <section class='pageContainer'>
            <h1>Votre requête est invalide !</h1>
        </section>
    ";
}
else{
    $pdfTraining = "TP1";
    $pdfNutrition = "TP1";

    //HOMME
    if ($_POST[SEXE] == "h"){

        if ($_POST[OBJECTIF] == "masse"){
            //nutrition
            if ($_POST[POIDS] <= 65){
                $pdfNutrition = "1 nutrition homme masse - 65KG";
            }
            else if ($_POST[POIDS] <= 75){
                $pdfNutrition = "2 nutrition homme masse 66 - 75 KG";
            }
            else if ($_POST[POIDS] <= 86){
                $pdfNutrition = "_3 nutrition homme masse 76 - 86 KG";
            }
            else{
                $pdfNutrition = "4 nutrition homme masse + 87KG";
            }

            //musculation
            switch ($_POST[NBR_SEANCE]){
                case "3":
                    $pdfTraining = "Homme 3X programme prise de muscle";
                    break;
                case "4":
                    $pdfTraining = "Homme 4X programme prise de muscle";
                    break;
                case "5":
                    $pdfTraining = "Homme masse 5X programme prise de muscle";
                    break;
                case "6":
                    $pdfTraining = "Homme 6X programme prise de muscle (1)";
                    break;
            }
        }
        else if ($_POST[OBJECTIF] == "seche"){
            //nutrition
            if ($_POST[POIDS] <= 65){
                $pdfNutrition = "1 nutrition homme sèche - 65KG";
            }
            else if ($_POST[POIDS] <= 75){
                $pdfNutrition = "2 nutrition homme sèche 66 KG - 76KG (1)";
            }
            else if ($_POST[POIDS] <= 86){
                $pdfNutrition = "3 nutrition homme sèche 76 - 86KG (1)";
            }
            else{
                $pdfNutrition = "4 nutrition homme sèche + 86KG";
            }

            //musculation
            switch ($_POST[NBR_SEANCE]){
                case "3":
                    $pdfTraining = "Homme 3X sèche programme prise de muscle + sèche";
                    break;
                case "4":
                    $pdfTraining = "4X sèche programme prise de muscle + sèche (1)";
                    break;
                case "5":
                    $pdfTraining = "5X SECHE programme prise de muscle";
                    break;
                case "6":
                    $pdfTraining = "SECHE 6X programme prise de muscle";
                    break;
            }
        }
    }
    else if ($_POST[SEXE] == "f"){

    }




    $content = "
        <section class='pageContainer'>
            <h1>Merci d'avoir choisi bifitness !</h1>
            <a href='pdfs/$pdfTraining.pdf' download>Clicker pour télécharger votre programme entrainement</a>
            <a href='pdfs/$pdfNutrition.pdf' download>Clicker pour télécharger votre programme nutrition</a>
        </section>
    ";
}

echo genSiteContent("../..", $content, );
var_dump($_POST);