<?php
    require_once(realpath($_SERVER['DOCUMENT_ROOT']."/config.php"));
    require_once(realpath($_SERVER['DOCUMENT_ROOT']."/dependencys/dependencys-db.php"));

     class DependencyManager {
        public function __construct($dependencysToLoad,$dependencys,$rootDir) {
            foreach ($dependencysToLoad as $filesToLoad) {
               
               $file = realpath($rootDir.$dependencys[$filesToLoad]);
               if ($file) {
                  require_once($file);
               } else {
                  echo ("Error to load : " .$file);
               }
            }
        }
     }
?>