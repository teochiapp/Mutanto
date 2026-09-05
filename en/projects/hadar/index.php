<?php

require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "withe";
$thisPageLanguages = array(
    "es" => "proyectos/hadar/",
    "en" => "projects/hadar/"
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = "Proyectos  | Hadar";
    $pageDescription = "We designed the logo for a recruitment company specialized in the IT sector. We tell you what Hadar is and how we reflect its values ⭐";
    $pageKey = "Mutanto,Projects,Hadar,Diseño de logo,Branding";
    $pageUrl = URL_SITE . $language . "/" . $thisPageLanguages[$language];
    $pageCardDescription = $pageDescription;
    $pageCardImagen = $pageUrl . "mutantoImagenCard.png";
    ?>
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/head.php")) ?>
    <link rel="stylesheet" href="<?php echo (URL_SITE) ?>packs/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo (URL_SITE) ?>packs/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/proyects.css">
    <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/proyect__titles.css">

</head>

<body>
    <!-- loader -->
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/loader.php")) ?>
    <!-- End loader -->
    <!-- Cookies -->
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/cookies.php")) ?>
    <!-- End Cookies -->
    <!-- Header -->
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/header.php")) ?>
    <!-- End Header -->

    <!-------  Content Here -->
    <main id="top"  data-scroll data-scroll-event-progress="gotoTop">
        <!-- Div 1: Hadra Header -->
        <div class="mutanto__pryectos">
            <div class="mutanto__pryectos-header">
                <h2>Hadar: technology and recruitment in summary</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_hader_icon.png 1x,<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_hader_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_hader_icon.png" width="102" height="102" alt="Hardar Logo" title="Hardar Logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_mobile.png 1x, <?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen.png 1x, <?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen.png" alt="Accreditation cards with the aesthetic guidelines that Mutanto developed for Hadar." title="Hadar's branding applied to accreditation cards.">
                </picture>
                <!-- Client Description Table and Link to Website -->
                <div class="mutanto__elements-cliente-tableAndGo-structure">
                    <!-- Client Description Table -->
                    <div class="mutanto__elements-cliente-description-structure">
                        <div class="mutanto__elements-cliente-header">
                            <div class="mutanto__elements-cliente-header-icon">
                                <img src="<?php echo (URL_SITE) ?>img/mdi_axis-arrow.png">
                            </div>
                            <div class="mutanto__elements-cliente-header-dateAndTime">
                                <span>2021</span>
                                <span><i class="fa-regular fa-clock verdeMutanto"></i></span>
                                <span class="verdeMutanto">2 Months</span>
                            </div>
                        </div>
                        <style>
                </style>    
                        <div class="mutanto__elements-cliente-row">
                            <div class="mutanto__elements-cliente-tags">
                                <span>Branding</span>
                                <span>Social Media</span>
                                <span>Graphics</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">We designed the logo of Hadar, a company dedicated to the selection of IT profiles for companies in the technology sector.</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Client Go to website -->
                    <style>
                           @media (max-width: 1199px) and (min-width: 577px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                top: 0px;
                            }
                        }

                        @media (max-width: 576px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                margin: 20px;
                                position: inherit;
                                top: -40px;
                                width: 200px;
                            }
                        }
                        @media (max-width: 1443px) and (min-width: 993px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                top: 5px !important;
                            }
                        }
                    </style>
                    <div class="mutanto__elements-cliente-goToWebSite">
                       
                            <h4>Learn more about Hadar</h4>
                            <p>We provide you with the link to their LinkedIn profile so you can explore the company and the evolution of its visual identity.</p>
                       
                        <?php
                        $URL_DESTINATION = "https://ar.linkedin.com/in/talent-hadar-470949218";
                        require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/element_button_visit_site.php"));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Div 1: hadra Header -->
        <!-- Div 2:Logo en contexto-->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "How does it look in real life?";
            $titleH2 = "Logo in context";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text">
                <h5>Hadar is also a star. Hence, our main inspiration for the construction of the logo, along with the most important references in the field.</h5>
            </div>
        </div>
        <!-- End Div 2:Logo en contexto -->
        <!-- End Div 3.1: Alone Imagen -->
        <div class="mutanto__pryectos-aloneImagen minMarginTop">
            <picture>
                <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_desing_mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_desing_mobile@2x.png 2x">
                <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_desing.png 1x,<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_desing@2x.png 2x">
                <img src="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_desing.png" alt="Digital mockups of business cards, gift bags, and coffee mugs with the aesthetics and logo that Mutanto built for Hadar." title="Corporate products featuring the logo and graphic guidelines of Hadar.">
            </picture>

        </div>
        <!-- End End Div 3.1: Alone Imagen -->
        <!-- Div 4:  Dos opciones: el mismo concepto
 -->
        <div class="mutanto__pryectos-que-tiene-de-especial-una-balanza div__setup">
            <?php
            //Add title to the section
            $titleH4 = "To choose";
            $titleH2 = "Two options: same concept";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_options.png 1x,<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_options@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_options.png" "Two logo options that the team presented to Hadar with small variations in color and shape" title="Logo variants that pursue the same essential concept">
                </picture>
                <h5 class="mutanto__pryectos-text-margin-left">We've selected two variants using the same concepts and presenting a typographic proposal adjusted to the activity carried out by Hadar</h5>
            </div>
        </div>
        <!-- End Div 4:  Dos opciones: el mismo concepto-->
        <?php
        //Add title to the section
        $titleH2 = "Do you want to turn your project into a great success story?";
        $buttonText = "Let’s talk";
        include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__chat.php"))
        ?>
    </main>
    <!-------  End Content Here -->
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/footer.php")) ?>
</body>
<?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/after-body.php")) ?>
<script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.6.0/polyfill.min.js" crossorigin="anonymous"></script>
<script nomodule src="https://polyfill.io/v3/polyfill.min.js?features=Element.prototype.remove%2CElement.prototype.append%2Cfetch%2CCustomEvent%2CElement.prototype.matches%2CNodeList.prototype.forEach%2CAbortController" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>
<script src="<?php echo (URL_SITE) ?>packs/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo (URL_SITE) ?>js/main.js"></script>
<script src="<?php echo (URL_SITE) ?>js/proyects.js"></script>
<script>

</script>

</html>