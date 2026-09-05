<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "withe";
$thisPageLanguages = array(
    "es" => "proyectos/systel/",
    "en" => "projects/systel/"
);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    $pageTitle = " Proyectos  | Systel";
    $pageDescription = "Diseñamos la web de una empresa líder en instrumentos de pesaje. Te mostramos cómo transmitimos las virtudes de la empresa en el sitio ⚖";
    $pageKey = "Mutanto , Proyectos , Systel , Diseño web , Diseño UI";
    $pageUrl = URL_SITE . $language . "/" . $thisPageLanguages[$language];
    $pageCardDescription = $pageDescription;
    $pageCardImagen = $pageUrl . "mutantoImagenCard.png";
    ?>
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/head.php")) ?>
    <link rel="stylesheet" href="<?php echo (URL_SITE) ?>packs/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo (URL_SITE) ?>packs/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/proyects.css">
    <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/proyect__titles.css">
    <style>

    </style>
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
        <!-- Div 1: Systel Header -->
        <div class="mutanto__pryectos">
            <div class="mutanto__pryectos-header">
                <h2>En búsqueda del minimalismo tecnológico</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_icon.png 1x,<?php echo (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_icon.png" width="102" height="102" alt="Systel Logo" title="Systel Logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_header-imagen-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_header-imagen-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_header-imagen.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_header-imagen@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_header-imagen.png"  alt="Pantalla de inicio del sitio web de Systel aplicado a una Laptop" title="Mockup del sitio web de Systel en versión desktop">
                </picture>

                <!-- Client Description Table and Link to Website -->
                <div class="mutanto__elements-cliente-tableAndGo-structure">
                    <!-- Client Description Table -->
                    <div class="mutanto__elements-cliente-description-structure">
                        <div class="mutanto__elements-cliente-header">
                            <div class="mutanto__elements-cliente-header-icon">
                                <img src="<?php echo (URL_SITE) ?>img/mdi_axis-arrow.png" alt="Resumen de proyecto">
                            </div>
                            <div class="mutanto__elements-cliente-header-dateAndTime" style="gap: 6px;">
                                <span>2022</span>
                                <span> - </span>
                                <span class="verdeMutanto">Actualidad</span>
                            </div>
                        </div>

                        <div class="mutanto__elements-cliente-row">
                            <div class="mutanto__elements-cliente-tags">
                                <span>Visutal Desing</span>
                                <span>Figma</span>
                                <span>Website</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">Systel es líder en la comercialización de balanzas e instrumentos de pesaje para negocios, instituciones sanitarias y la industria.</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Client Go to website -->
                    <style>
                        .mutanto__elements-cliente-goToWebSite {
                            background-image: url("<?php echo (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_previwe.png");
                            background-size: cover
                           
                        }

                        @media (-webkit-min-device-pixel-ratio: 2),
                        (min-resolution: 192dpi) {
                            .mutanto__elements-cliente-goToWebSite {
                                background-image: urlw("<?php echo (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_previwe@2x.png");
                                background-position: center center;
                                background-size: 100%;
                                
                            }
                        }

                        @media (max-width: 1199px) and (min-width: 577px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                bottom: -170px;
                                top: auto;
                        }
                        }

                        @media (max-width: 1443px) and (min-width: 993px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                bottom: -170px;
                                top: auto;
                        }
                        }

                     @media (max-width:577px) {
                        .mutanto__elements-cliente-goToWebSite {
                            height: 259px;
                            background-size: cover
                        }
                     }
                    </style>
                    <div class="mutanto__elements-cliente-goToWebSite">
                        <?php
                        $URL_DESTINATION = "https://systel-global.com/argentina/";
                        require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/element_button_visit_site.php"));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Div 1: Systel Header -->
        <!-- End Div 1.1: Alone Imagen -->
        <div class="mutanto__pryectos-aloneImagen">
            <picture>
                <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_2-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_2-mobile@2x.png 2x">
                <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_2.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_2@2x.png 2x">
                <img src="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_2.png"  alt="Collage de varios celulares mostrando el diseño web de Systel en versión mobile" title="Mockup del sitio web de Systel en versión mobile.">
            </picture>

        </div>
        <!-- End End Div 1.1: Alone Imagen -->
        </div>
        <!-- Div 2: Historia y tradicion -->
        <div class="mutanto__pryectos-historia-y-tradicicon">
            <?php
            //Add title to the section
            $titleH4 = "MINIMALISMO TECNOLÓGICO";
            $titleH2 = "Historia y tradición";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <h5 class="mutanto__pryectos-text-margin-right">Systel necesitaba renovar su página web y mostrar una impronta tecnológica <strong>sin perder de vista la trayectoria de una empresa líder</strong>.<br><br>El objetivo principal era modernizar su imagen en el mundo digital para contribuir al posicionamiento de Systel como marca referente en la industria.</h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_1-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_1-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_1.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_1@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_1.png" alt="Collage creativo de las tarjetas informativas que Systel muestra en el diseño de su sitio web en versión mobile" title="Vista mobile de una de las secciones del sitio.">
                </picture>
            </div>
        </div>
        <!-- End Div 2: Historia y tradicion -->
        <!-- Cuotes  -->
        <?php 
            $quoteText = "Hemos tenido el privilegio de trabajar con Mutanto durante más de dos años en el ambicioso proyecto de transformación digital de Systel.<br>
            Elegimos a Mutanto por su enfoque centrado en el cliente y su trayectoria consolidada en el mercado, especialmente en proyectos que abarcan aspectos tan fundamentales como Branding, UX y UI. Ademas de su capacidad de adaptabilidad al equipo de trabajo. <br>
            Cada resultado entregado por Mutanto ha superado nuestras expectativas, generando un impacto significativo en nuestros objetivos. <br>
            Lo que más destaca del equipo de Mutanto es su  flexibilidad, capacidad de adaptación y la rapidez con la que abordan cada proyecto. Su compromiso con cada cliente.";
            $quoteAuthor = "Soledad Mansilla";
            $quotePosition = "Marketing leader, Systel Argentina";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
        <!-- Div 3: Que tiene de especial una balanza -->
        <div class="mutanto__pryectos-que-tiene-de-especial-una-balanza div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Las cualidades del producto";
            $titleH2 = " Qué tiene de especial una balanza";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_previwe_3-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_previwe_3-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_previwe_3.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_previwe_3@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_previwe_3.png" alt="Composición creativa de los elementos gráficos presentes en el proceso de diseño de la web de Systel" title="Cards, fotografías y colores utilizadas para crear el sitio web.">
                </picture>

                <h5 class="mutanto__pryectos-text-margin-left">En general, para el consumidor final de un almacén o el paciente que la utiliza en el consultorio médico,<strong> una balanza no es un producto que llame mucho su atención.</strong><br><br>Pero para este segmento <strong> precisión, innovación y progreso</strong> (suele ser de las primeras y más costosas compras de un comercio). <strong>¿Cómo podemos reflejarlo?</strong><br><br>Elegimos asociar cada balanza con un producto y una persona, para evocar el contexto de uso de las balanzas y empatizar con las personas que visitan la web.
                    </5>
            </div>
        </div>
        <!-- End Div 3: Que tiene de especial una balanza -->
        <!--  Div 4: Desing Systel, digo system -->
        <div class="mutanto__pryectos-desingg-systel div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Coherencia y consistencia";
            $titleH2 = " Design Systel, digo system";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <picture>
                <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_system_previwe_3-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_system_previwe_3-mobile@2x.png 2x">
                <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_system_previwe_3.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_system_previwe_3@2x.png 2x">
                <img src="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_system_previwe_3.png"  alt="Botones, espaciados, tipografías, colores y otros elementos que conforman el sistema de diseño de la página web" title="Design system del sitio web.">
            </picture>

        </div>
        <!-- End Div 4: Desing Systel, digo system -->
        <?php
        //Add title to the section
        $titleH2 = "¿Querés saber más acerca<br> de este proyecto?";
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