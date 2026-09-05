<?php 
    $URL_CONTACTO = "/contacto/";
    $text_button = "Charlemos";
    if ($language == "en") {
        $URL_CONTACTO = "/contact-us/";
        $text_button = "Let’s talk";
    }

?>
<button class="mutanto__elements-button" onclick="window.location.href='<?php echo(URL_SITE).$language.$URL_CONTACTO ?>'"><?php echo($text_button)?></button>