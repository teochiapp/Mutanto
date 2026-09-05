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
<html lang="es">

<head>
    <?php
    $pageTitle = "Proyectos  | Hadar ";
    $pageDescription = "EDiseñamos el logo de una empresa de reclutamiento especializada en el sector IT. Te contamos qué es Hadar y cómo reflejamos sus valores ⭐";
    $pageKey = "Mutanto,Proyectos,Hadar,Diseño de logo,Branding";
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
                <h2>Hadar: tecnología y recruitment en síntesis</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_hader_icon.png 1x,<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_hader_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_hader_icon.png" width="102" height="102" alt="Hardar Logo" title="Hardar Logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_mobile.png 1x, <?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen.png 1x, <?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen.png" alt="Tarjetas de acreditación con los lineamientos estéticos que Mutanto desarrolló para Hadar" title="Branding de Hadar aplicado en tarjetas de acreditación">
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
                                <span class="verdeMutanto">2 meses</span>
                            </div>
                        </div>

                        <div class="mutanto__elements-cliente-row">
                            <div class="mutanto__elements-cliente-tags">
                                <span>Branding</span>
                                <span>Redes Sociales</span>
                                <span>Gráfica</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">Diseñamos el logo de Hadar, una empresa dedicada a la selección de perfiles IT para empresas del rubro tecnología.</h5>
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
                        <h4>Conocé más sobre Hadar</h4>
                        <p>Te dejamos el link a su perfil de LinkedIn para que puedas explorar la empresa y la evolución de su identidad visual.</p>
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
            $titleH4 = "¿Cómo se ve en la compu?";
            $titleH2 = "Logo en contexto";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text">
                <h5>Hadar también es una estrella. De allí nuestra principal inspiración para la construcción del logo, junto a las referencias más importantes del rubro.</h5>
            </div>
        </div>
        <!-- End Div 2:Logo en contexto -->
        <!-- End Div 3.1: Alone Imagen -->
        <div class="mutanto__pryectos-aloneImagen minMarginTop">
            <picture>
                <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_desing_mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_desing_mobile@2x.png 2x">
                <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_desing.png 1x,<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_desing@2x.png 2x">
                <img src="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_header-imagen_desing.png" alt="Montajes de tarjetas de presentación, bolsas de regalo y tazas de café con la estética y el logo que Mutanto construyó para Hadar" title="Productos corporativos con el logo y los lineamientos gráficos de Hadar">
            </picture>

        </div>
        <!-- End End Div 3.1: Alone Imagen -->
        <!-- Div 4:  Dos opciones: el mismo concepto
 -->
        <div class="mutanto__pryectos-que-tiene-de-especial-una-balanza div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Para elegir";
            $titleH2 = "Dos opciones: el mismo concepto
            ";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_options.png 1x,<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_options@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/hadar/mutanto_ui_ux_branding_social_media_visual-desing_options.png" alt="Dos opciones de logo que el equipo presentó a Hadar con pequeñas variaciones en color y forma" title="Variantes de logo que persiguen el mismo concepto">
                </picture>

                <h5 class="mutanto__pryectos-text-margin-left">Concluimos en 2 variantes utilizando los mismos conceptos y presentando una propuesta tipográfica ajustada a la actividad que realiza Hadar.</h5>
            </div>
        </div>
        <!-- End Div 4:  Dos opciones: el mismo concepto-->
        <?php
        //Add title to the section
        $titleH2 = "¿Querés convertir tu proyecto <br> en un gran caso de éxito?";
        $buttonText = " Charlemos";
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