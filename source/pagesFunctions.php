<?php

function makeSelectMenu($rootPath, $arrayOfElements, $folderRelativePath = ""){
    $ret = "";
    foreach ($arrayOfElements as $link => $name){
        //in the case of the working folder not in the root folder
        if ($folderRelativePath != ""){
            $ret .= "
            <section>
                <a href='$rootPath/$folderRelativePath/$link'>$name</a>
            </section>
            ";
        }
        //in case there is no sub folder
        else{
            $ret .= "
            <section>
                <a href='$rootPath/$link'>$name</a>
            </section>
            ";
        }
    }
    return $ret;
}

function makeQuestionButtonMenu($question, $id, $buttons){
    $menu = "<div>";

    foreach ($buttons as $onclick => $content){
        $menu .= "<button onclick='$onclick'>$content</button>";
    }
    $menu .= "</div>";

    return "
        <section id='$id' class='question'>
            <h2>$question</h2>
            $menu
        </section>
    ";
}

function makeQuestionNumberMenu($question, $id, $unit){

    $inputId = $id . 'Value';

    return "
    <section id='$id' class='question'>
        <h2>$question</h2>
        <input type='number' step='1' id='$inputId' placeholder='Saisissez la valeur en $unit'><br>
        <button onclick='onNumberValidation(\"$inputId\")' class='greenButton'>Valider</button>
    </section>
    ";
}

function makeQuestionButtonMenuMultipleResponse($question, $id, $buttons, $onValidation){
    $menu = "<div>";

    foreach ($buttons as $onclick => $content){
        $menu .= "<p><input type='checkbox' name='$content'> $content</p>";
    }
    $menu .= "</div>";

    return "
        <section id='$id' class='question'>
            <h2>$question</h2>
            $menu
            <button onclick='$onValidation' class='greenButton'>Valider</button>
        </section>
    ";
}

function makeQuestiontextMenu($question, $id){

    $inputId = $id . 'Value';

    return "
    <section id='$id' class='question'>
        <h2>$question</h2>
        <input type='text' id='$inputId'><br>
        <button onclick='onTextValidation(\"$inputId\")' class='greenButton'>Valider</button>
    </section>
    ";
}