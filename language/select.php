<?php
    require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
    if (!isset($_GET["change-language"])) {
        $newLanguage = "";
    } else {
        $newLanguage = $_GET["change-language"];
    }

    if (!isset($_COOKIE["mutanto-language"])) {
        setcookie("mutanto-language", "en", time() + (86400 * 30), "/");
        $language = "en";
    } elseif ($newLanguage != "") {
        setcookie("mutanto-language", $newLanguage, time() + (86400 * 30), "/");
        $language = $newLanguage;
        $destinationPage = $_GET['page'];
        header("Location: " . URL_SITE . $language . "/" . $destinationPage);
    } else {
        $language = $_COOKIE["mutanto-language"];
        
    } 
   
?>
