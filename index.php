<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  require_once($_SERVER['DOCUMENT_ROOT']  . "/config.php");
  if ( $language == "es" ) {
    //include(realpath($_SERVER['DOCUMENT_ROOT']  . "/es/index.php"));
    header("Location:".URL_SITE."es/");
    die();
  } else if ($language == "en" || $language == "") {
    //include(realpath($_SERVER['DOCUMENT_ROOT']  . "/en/index.php"));
    header("Location:".URL_SITE."en/");
    die();
  } 
?>