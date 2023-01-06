<?php
include("../../source/siteStructure.php");
require '../../source/PHPMailer/src/Exception.php';
require '../../source/PHPMailer/src/PHPMailer.php';
require '../../source/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

const SEXE = 1;
const OBJECTIF_HOMME = 2;
const OBJECTIF_FEMME = 3;
const POIDS = 7;
const NBR_SEANCE = 10;
const MAIL = 11;
const NOM = 5;

$userMailAdress = $_POST[MAIL];
$userName = htmlspecialchars($_POST[NOM]);

//try{
//    $logs = fopen("users.log", "a");
//    fwrite($logs, "name = " . $userName . " / mail = " . $userMailAdress . '\n');
//    fclose($logs);
//}
//catch (Exception $e)
//{
//    echo $e->errorMessage();
//}


$content = "";

if (!isset($_POST[SEXE])){
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

        if ($_POST[OBJECTIF_HOMME] == "masse"){
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
        else if ($_POST[OBJECTIF_HOMME] == "seche"){
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

        //musculation
        switch ($_POST[NBR_SEANCE]){
            case "3":
                $pdfTraining = "Femme programme 3 X SEMAINE (1)";
                break;
            case "4":
                $pdfTraining = "femme programme 4 X SEMAINE";
                break;
            case "5":
                $pdfTraining = "femme programme 5 X SEMAINE";
                break;
            case "6":
                $pdfTraining = "femme programme 6 X SEMAINE (1)";
                break;
        }

        if ($_POST[OBJECTIF_FEMME] == "forme"){

            //nutrition
            if ($_POST[POIDS] <= 45){
                $pdfNutrition = "1 nutrition femme masse - 45KG";
            }
            else if ($_POST[POIDS] <= 55){
                $pdfNutrition = "2 nutrition homme masse 45 - 55 KG";
            }
            else if ($_POST[POIDS] <= 65){
                $pdfNutrition = "3 nutrition femme masse 55 - 65 KG";
            }
            else{
                $pdfNutrition = "4 nutrition femme masse + 65KG";
            }
        }
        else if ($_POST[OBJECTIF_FEMME] == "affiner"){
            //nutrition
            if ($_POST[POIDS] <= 55){
                $pdfNutrition = "1 nutrition femme sèche - 55KG";
            }
            else if ($_POST[POIDS] <= 65){
                $pdfNutrition = "2 nutrition femme sèche 55 KG - 65KG";
            }
            else if ($_POST[POIDS] <= 75){
                $pdfNutrition = "3 nutrition femme sèche 65 KG - 75 KG";
            }
            else{
                $pdfNutrition = "4 nutrition femme sèche + 75 KG (1)";
            }
        }
    }




    $content = "
        <section class='pageContainer'>
            <h1>Merci d'avoir choisi bifitness !</h1>
            <p>Vérifier votre boîte mail nous vous avons envoyé vos programmes à l'adresse suivante : $userMailAdress</p>
        </section>
    ";

    try {
        //addresses
        $mail->setFrom('bilel.msa@bifitness.fr');
        $mail->addAddress($userMailAdress);

        //pdfs
        $mail->addAttachment("pdfs/$pdfTraining.pdf", "ProgrammeMusculationBifitness.pdf");
        $mail->addAttachment("pdfs/$pdfNutrition.pdf", "ProgrammeNutritionBifitness.pdf");

        //contenu
        $mail->isHTML();
        $mail->Subject = 'Votre Programme Bifitness';
        $mail->Body = "
        <p>Cher(e) $userName,<br>
        Nous vous remercions d'avoir choisi bifitness !<br>
        Vous trouverez dans ce mail un programme musculation et nutrition en pièce jointe.
        Vous êtes désormais abonnés à l'abonnement Bifitness, vous recevrez donc votre programme mensuellement.
        </p>
        <h4>Bon entrainement et Amusez vous bien !</h4>
        ";

        $mail->send();
    }
    catch (Exception $e)
    {
        /* PHPMailer exception. */
        echo $e->errorMessage();
    }
    catch (\Exception $e)
    {
        /* PHP exception (note the backslash to select the global namespace Exception class). */
        echo $e->getMessage();
    }
}

echo genSiteContent("../..", $content, );