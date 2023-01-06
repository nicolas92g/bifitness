<?php
const ROOT = "../../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");
include(ROOT . "/source/content.php");

$title = $GLOBALS['exercicesMollets'][basename(__FILE__)];

$content = "


</section>


";

echo genSiteContent(ROOT, $content);