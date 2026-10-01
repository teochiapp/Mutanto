<?php 
     //COMPAY NAME
     define("COMPANY_NAME","Mutanto");
     //SITE URL
     if ($_SERVER['HTTP_HOST'] == 'localhost:8000' || $_SERVER['HTTP_HOST'] == 'localhost') {
         define("URL_SITE","http://localhost:8000/");
     } else {
         define("URL_SITE","https://mutanto.com.ar/");
     }
     //Dependences
     require_once(realpath($_SERVER['DOCUMENT_ROOT']."/dependencys/dependencys.php"));
     require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/language/select.php"));
?>