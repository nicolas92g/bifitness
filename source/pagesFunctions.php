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
        <input type='number' step='1' id='$inputId'><span> $unit</span><br>
        <button onclick='onNumberValidation(\"$inputId\")'>Valider</button>
    </section>
    ";
}