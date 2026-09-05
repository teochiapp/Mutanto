<?php 
    $text_button = "Visitar sitio";
    if ($language == "en") {  
        $text_button = "Visit site";
    }

?>
<button class="mutanto__elements-button" onclick="window.open('<?php echo($URL_DESTINATION)?>','_new')"><?php echo($text_button)?></button>