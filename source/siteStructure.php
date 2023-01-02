<?php

function makeHeader($rootPath){
    return "
    <header>
        <img alt='back' src='$rootPath/assets/back.svg' width='48' onclick='history.back()'>
        <h3>BIFITNESS</h3>
        <img alt='logo' src='$rootPath/assets/icon.png' width='48' onclick='location.href = \"$rootPath/index.php\"'>   
    </header>
    ";
}
function makeFooter(){
    return "
    <footer>
        <p>
            &copy; 2022 bifitness company
        </p>
    </footer>
    ";
}

function genSiteContent($rootPath, $content, $optionalHeadContent = ""){
    $footer = makeFooter();
    $header = makeHeader($rootPath);
   return "

<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='utf-8'>
        <link rel='icon' href='$rootPath/assets/icon.png'>
        <link rel='stylesheet' type='text/css' href='$rootPath/style/common.css'>
        <link rel='stylesheet' type='text/css' href='$rootPath/style/pages.css'>
        <meta name='viewport' content='width=device-width'>
        $optionalHeadContent
    </head>
    <body>
        $header
        <main>
            $content
        </main>
        $footer
    </body>
</html>

    ";
}
