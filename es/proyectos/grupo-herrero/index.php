<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "withe";
$thisPageLanguages = array(
    "es" => "proyectos/grupo-herrero/",
    "en" => "projects/grupo-herrero/"
);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    $pageTitle = " Proyectos  | Grupo Herrero";
    $pageDescription = "Rediseñamos el sitio web de una empresa con más de 25 años de trayectoria";
    $pageKey = "Mutanto,Proyectos,Grupo Herrero,Diseño visual,Diseño web";
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
    <main id="top" data-scroll data-scroll-event-progress="gotoTop">
        <!-- Div 1: Bocho Header -->
        <div class="mutanto__pryectos">
            <div class="mutanto__pryectos-header">
                <h2>Un rediseño con identidad</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon.png" width="102" height="102" alt="Grupo Herror Logo" title="Grupo Herror Logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon_header-imagen-mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon_header-imagen-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon_header-imagen.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon_header-imagen@2x.png 2x ">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon_header-imagen.png" alt="Montaje creativo de las pantallas del sitio web de Grupo Herrero" title="Capturas del sitio web de Grupo Herrero">
                </picture>s
                <!-- Client Description Table and Link to Website -->
                <style>
                    @media (max-width: 1199px) and (min-width: 577px) {
                        .mutanto__elements-cliente-goToWebSite button {
                            top: 0px;
                        }

                        .mutanto__elements-cliente-row {
                            height: 330px;
                        }

                        .mutanto__elements-cliente-description-structure,
                        .mutanto__elements-cliente-goToWebSite {
                            height: 365px !important;
                        }
                    }

                    @media (min-width:577px) {
                        .mutanto__elements-cliente-header {
                            padding: 6px 32px !important;
                        }

                        .mutanto__elements-cliente-description-structure {
                            max-width: 60%;
                        }

                        /*
                        .mutanto__elements-cliente-description-structure,
                        .mutanto__elements-cliente-goToWebSite {
                             height: 290px; 
                        } */

                        .mutanto__elements-cliente-tags {
                            flex-wrap: wrap;
                        }

                    }
                </style>
                <div class="mutanto__elements-cliente-tableAndGo-structure">
                    <!-- Client Description Table -->
                    <div class="mutanto__elements-cliente-description-structure">
                        <div class="mutanto__elements-cliente-header">
                            <div class="mutanto__elements-cliente-header-icon">
                                <img src="<?php echo (URL_SITE) ?>img/mdi_axis-arrow.png">
                            </div>
                            <div class="mutanto__elements-cliente-header-dateAndTime">
                                <span>2020</span>
                                <span><i class="fa-regular fa-clock verdeMutanto"></i></span>
                                <span class="verdeMutanto">3 meses</span>
                            </div>
                        </div>
                        <style>
                            @media (max-width: 576px) {
                                .mutanto__elements-cliente-row {
                                    height: 405px;
                                }
                            }
                        </style>
                        <div class="mutanto__elements-cliente-row">
                            <div class="mutanto__elements-cliente-tags">
                                <span>Branding</span>
                                <span>Visual design</span>
                                <span>UX Research</span>
                                <span>Wireframing</span>
                                <span>UI Design</span>
                                <span>Prototyping</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">
                                    Grupo Herrero es una empresa familiar de larga trayectoria que necesitaba una imagen más moderna. Pero no se puede hacer todo desde cero, 25 años es mucho tiempo. Entonces, ¿cuál es la esencia de la firma?
                                </h5>
                            </div>
                        </div>
                    </div>

                    <!-- Client Go to website -->
                    <style>
                        @media (max-width: 1443px) and (min-width: 993px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                top: -14px !important;
                            }
                        }
                    </style>

                    <div class="mutanto__elements-cliente-goToWebSite">
                        <h4>Explorá la página web</h4>
                        <p>Entrá a la web de Grupo Herrero y descubrí cómo se ejecutaron las ideas de Mutanto para que miles de internautas accedan al sitio.</p>
                        <?php
                        $URL_DESTINATION = "https://herreroyasoc.com/";
                        require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/element_button_visit_site.php"));
                        ?>
                    </div>
                    <script>
                        let boxHeight = document.querySelector(".mutanto__elements-cliente-description-structure");
                        let goToWeb = document.querySelector(".mutanto__elements-cliente-goToWebSite");
                        
                        window.addEventListener("resize",function(){
                            console.log(boxHeight.offsetHeight + " px");
                            goToWeb.offsetHeight = boxHeight.offsetHeight + "px";
                        })
                    </script>
                </div>
            </div>
        </div>
        <!-- End Div 1: Bocho Header -->
        <!-- Div 2:  Inclusión y autonomía -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "convergencia";
            $titleH2 = "Entre la experiencia y la mirada joven";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <h5 class="mutanto__pryectos-text-margin-right">Cualquier empresa familiar tiene una característica que resalta: la convivencia de distintas generaciones, todas al servicio de un interés común.<br><br>
                    Grupo Herrero no es la excepción. El objetivo era dar cuenta de esa diversidad en el sitio web. Pero ¿cuáles son los valores y la visión de la empresa?<br><br>
                    El desafío era renovar la imagen de Grupo Herrero de manera que pudieramos conservar la identidad de la empresa sin poner en riesgo su prestigio.<br><br>
                </h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_webpage-mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_webpage-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_webpage.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_webpage@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_webpage.png" alt="Composición abstracta donde una mano sostiene una hoja con el sistema de diseño que utilizamos para crear el sitio web " title="Design System para Grupo Herrero">
                </picture>

            </div>
        </div>
        <!-- End Div 2: Inclusión y autonomía -->
        <!-- Cuotes  -->
        <?php
        $quoteText = "He trabajado con el equipo en el diseño de mi página web. Han trabajado con mucho profesionalismo y siempre están disponibles para dudas y cambios. Venía de una mala experiencia y con ellos he encontrado una solución eficaz.";
        $quoteAuthor = "Federico Herrero";
        $quotePosition = "Socio Gerente, Grupo Herrero";
        include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
        <!-- Div 3:  Usando el bocho -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "El trabajo de mutanto";
            $titleH2 = "¿De qué habla Grupo Herrero?";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_previwe-mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_previwe-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_previwe.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_previwe@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_previwe.png" alt="Formas y elementos gráficos de la identidad de Grupo Herrero mezclada con fotografías representativas del rubro" title="Elementos gráficos de la identidad de Grupo Herrero.">
                </picture>
                <h5 class="mutanto__pryectos-text-margin-left">Como no nos andamos con vueltas <strong>te damos el tip mutanto para encarar cualquier rediseño</strong>: la idea es acortar la distancia entre el mundo real y el mundo virtual. <br>
                    <br>
                    En otras palabras, <strong>no podíamos rediseñar la web sin conocer a la empresa, sin conocer de qué y a quiénes habla Grupo Herrero</strong>. <br>
                    <br>
                    Nos metimos de lleno en la industria y extrajimos conceptos, modismos y todo un vocabulario propio del sector.
                    <br>
                    <br>
                    <strong> Revisamos su impronta, su lenguaje y su vínculo con los clientes</strong> y pusimos en juego todos estos elementos para que el rediseño del sitio sea eso, un rediseño, y no un arrancar de cero.
                </h5>
            </div>
        </div>
        <!-- End Div 3  Usando el bocho -->
        <!-- Div 4:  Usando en accion -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "manos a la obra, literal";
            $titleH2 = "Clásico y moderno, pero sobre todo, útil";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <!-- End Div 4  Bocho en accion -->
            <div class="mutanto__pryectos-text">
                <h5>La interfaz de Bocho se adapta a la computadora y se integra como un componente más de la pantalla. Una vez calibrado ya está listo para usar. </h5>
            </div>
            <!-- End Div 5 : Alone Imagen -->
            <div class="mutanto__pryectos-aloneImagen minMarginTop">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_app_previwe-mobile.png 1x, <?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_app_previwe-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_app_previwe.png 1x, <?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_app_previwe@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_app_previwe.png" alt="Capturas de pantalla de algunas secciones del sitio web de Grupo Herrero en su versión mobile" title="Capturas de la versión mobile del sitio web de Grupo Herrero">
                </picture>
            </div>
        </div>
        <!-- End Div 5: Alone Imagen -->
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