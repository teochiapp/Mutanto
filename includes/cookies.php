<style>
/* ------------------- Cookies  ----------------------------*/


#mutanto__cookies {
    position: fixed;
    bottom: 40px;
    left: 0;
    height: 222px;
    z-index: 5;
    left: 50%;
    transform: translate(-50%, 0%);
    width: 90%;
}

.mutanto__cookies_cookie {
    z-index: 6;
    position: relative;
    width: 141px;
    height: 143px;
}

.mutanto__cookies_box {
    position: relative;
    height: 222px;
    display: flex;
    z-index: -1;
    padding: 24px 24px;
    flex-flow: column nowrap;
    justify-content: center;
    border-radius: 16px;
    border: 1px solid white;
    background: var(--negromutanto);
    backdrop-filter: blur(2px);
}

.mutanto__cookies_box>h3 {
    margin-top: 20px;
    margin-left: 21px;
}

.mutanto__cookies_box>p {
    margin-left: 21px;
    margin-top: -30px
}

.mutanto__cookies_box>p>a {
    text-decoration: underline;
    color: white;
}

.mutanto__cookies_box>p>a:hover {
    color: var(--verdemutanto);
}

.mutanto__cookies_buttons {
    display: flex;
    flex-flow: row nowrap;
    gap: 16px;
    align-items: center;
    margin-bottom: 10px;
    justify-content: flex-end;
    margin-right: 24px;
}

.mutanto__cookies_buttons span a {
    color: white;
    font-family: Poppins;
    line-height: normal;
    font-style: normal;
    font-size: 16px;
    font-weight: 400;
    text-decoration: none;
}

.mutanto__cookies_buttons span a:hover {
    color: var(--verdemutanto);
}

.mutanto__elements-button.-reverse {
    background-color: var(--verdemutanto) !important;
    color: var(--negromutanto) !important;
}

.mutanto__elements-button.-reverse:hover {
    background-color: var(--blancomutanto) !important;
}


@media (max-width : 1199px) and (min-width: 577px) { 
  

}


@media (max-width: 576px) { 
    


    .mutanto__cookies_box {
        
        height: 380px;
        bottom: 150px;
    }

    .mutanto__cookies_box>h3 {
        margin-top: 0px;
        font-size: 25px;
        margin-bottom: 40px;
 
        }

        .mutanto__cookies_cookie {
            z-index: 6;
            position: absolute;
            left: 50%;
            transform: translate(-50%);
            width: 141px;
            height: 143px;
            top: 18px;
        }

        .mutanto__cookies_box>p {
            margin-right: 21px;    
        }

} 

/* ------------------- End Cooies ----------------------------*/

<?php 
    $urlLegal = URL_SITE . $language . "/legal";
    $cookiesTitle = "Las cookies son un mundo";
    $cookiesText = 'Usamos cookies propias para optimizar la navegación y cookies de terceros para analizar el tráfico. Decide cómo quieres gestionar tus cookies o consulta nuestra. <a href="'.$urlLegal.'" target="new" title="Política de Cookies">Política de Cookies</a>.';
    $cookiesRechazar = "Rechazar";
    $cookiesAcepto = "Aceptar todas";
    if ($language == "en") {
        $cookiesTitle = "Cookies are a whole world";
        $cookiesText = 'We use third-party cookies to generate audience statistics and our own to give you a better experience on our site. By continuing to navigate, you agree to their use. <a href="'.$urlLegal.'" target="new" title="Cookie Policy">Cookie Policy</a>.';
        $cookiesRechazar = "Decline";
        $cookiesAcepto = "Accept all";
    }

?>

</style>
<div id="mutanto__cookies">
    <div class="mutanto__cookies_box">
        <h3 class="blancoMuntanto"><?php echo($cookiesTitle) ?></h3>
        <p class="blancoMuntanto"><?php echo($cookiesText) ?></p>
        <div class="mutanto__cookies_buttons">
            <span ><a href="https://www.google.com/" title="<?php echo($cookiesRechazar)?>"><?php echo($cookiesRechazar)?></a></span>
            <button class="mutanto__elements-button -reverse" id="mutanto__cookies_button_yes" alt="Cookies OK"><?php echo($cookiesAcepto) ?></button>
        </div>
    </div>
</div>
<script>
   function setCookie(name, value, days) {
        const expires = new Date();
        expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
        document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
    }
    const mutantoCookiesButtnYes = document.querySelector("#mutanto__cookies_button_yes");
    
    mutantoCookiesButtnYes.addEventListener("click", function() {
        setCookie("mutanto", "yes", 30);
        document.querySelector("#mutanto__cookies").style.display = "none";
        

    });
    
</script>