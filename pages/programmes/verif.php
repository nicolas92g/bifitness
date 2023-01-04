<?php
include("../../source/siteStructure.php");

const SEXE = 1;
const OBJECTIF_HOMME = 2;
const OBJECTIF_FEMME = 3;
const POIDS = 4;
const NBR_SEANCE = 5;

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
            <a href='pdfs/$pdfTraining.pdf' download>Clicker pour télécharger votre programme entrainement</a>
            <a href='pdfs/$pdfNutrition.pdf' download>Clicker pour télécharger votre programme nutrition</a>
        </section>
    ";

    // Recipient
    $to = 'bifitness.msa@gmail.com';

// Sender
    $from = 'bilel@bifitness.fr';
    $fromName = 'Bilel MOUSSA';

// Email subject
    $subject = 'Votre programme Bifitness !';

// Attachment file
    $file = "pdfs/$pdfTraining.pdf";

// Email body content
    $htmlContent = ' 
    <h3>PHP Email with Attachment by CodexWorld</h3> 
    <p>This email is sent from the PHP script with attachment.</p> 
';

// Header for sender info
    $headers = "From: $fromName"." <".$from.">";

// Boundary
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

// Headers for attachment
    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

// Multipart boundary
    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
        "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

// Preparing attachment
    if(!empty($file) > 0){
        if(is_file($file)){
            $message .= "--{$mime_boundary}\n";
            $fp =    @fopen($file,"rb");
            $data =  @fread($fp,filesize($file));

            @fclose($fp);
            $data = chunk_split(base64_encode($data));
            $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .
                "Content-Description: ".basename($file)."\n" .
                "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        }
    }
    $message .= "--{$mime_boundary}--";
    $returnpath = "-f" . $from;

// Send email
    //$mail = @mail($to, $subject, $message, $headers, $returnpath);

    $to = "bifitness.msa@gmail.com";
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: bilel@bifitness.com" . "\r\n" .
        "CC: bifitness.msa@gmail.com";

    mail($to,$subject,$message,$headers);
}

echo genSiteContent("../..", $content, );