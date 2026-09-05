<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "withe";
$thisPageLanguages = array(
    "es" => "proyectos/welly-go/",
    "en" => "projects/welly-go/"
);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    $pageTitle = "  Proyectos  | Welly Go";
    $pageDescription = "Esta no es otra app de pedidos. Welly Go es la app indicada para personas que por salud o elección necesitan pedir platos veganos, vegetarianos o sin TACC 🐇 ⚖";
    $pageKey = "Mutanto,Proyectos,Welly Go,Diseño de app,Prototipado";
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
        <!-- Div 1: Welly Go Header -->
        <div class="mutanto__pryectos">
            <div class="mutanto__pryectos-header">
                <h2>Mucho más que una APP de pedidos</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvpwelly-go_icon.png 1x,<?php echo (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvpwelly-go_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvpwelly-go_icon.png" width="102" height="102" alt="Logo Welly Go" title="Logo Welly Go">
                </picture>

            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen.png" alt="Pantalla de inicio de la app de Welly Go en un celular con comida saludable sin TACC en el fondo sobre una mesa" title="Pantalla de inicio de la app.">
                </picture>

                <!-- Client Description Table and Link to Website -->
                <div class="mutanto__elements-cliente-tableAndGo-structure">
                    <!-- Client Description Table -->
                    <div class="mutanto__elements-cliente-description-structure">
                        <div class="mutanto__elements-cliente-header">
                            <div class="mutanto__elements-cliente-header-icon">
                                <img src="<?php echo (URL_SITE) ?>img/mdi_axis-arrow.png">
                            </div>
                            <div class="mutanto__elements-cliente-header-dateAndTime" style="gap: 6px;">
                                <span>2022</span>
                                <span> - </span>
                                <span class="verdeMutanto">Actualidad</span>
                            </div>
                        </div>

                        <div class="mutanto__elements-cliente-row">
                            <div class="mutanto__elements-cliente-tags">
                                <span>Figma</span>
                                <span>iOS</span>
                                <span>Writing</span>
                                <span>UI Design</span>
                                <span>Research</span>
                                <span>MVP</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto"><strong>Welly Go</strong> simplifica la manera de explorar opciones y pedir comida de origen vegetal y sin TACC desde el celu.</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Client Go to website -->
                    <style>
                        .mutanto__elements-cliente-goToWebSite {
                            background-image: url("<?php echo (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go__previwe.png");
                            background-size: cover;
                        }

                        @media (-webkit-min-device-pixel-ratio: 2),
                        (min-resolution: 192dpi) {
                            .mutanto__elements-cliente-goToWebSite {
                                background-image: url("<?php echo (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go__previwe@2x.png");
                            }
                        }
                        @media (max-width: 1444px) and (min-width: 577px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                bottom: -170px;
                                top: auto;
                            }
                        }

                        @media (max-width: 1443px) and (min-width: 993px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                bottom: -133px !important;
                                top: auto !important;
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
                        $URL_DESTINATION = "https://www.wellygo.app";
                        require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/element_button_visit_site.php"));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Div 1: Welly Go Header -->
        <!-- Div 2: Weely Go Intro -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Welly Go";
            $titleH2 = "Un MVP, tres apps";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text">
                <h5>El desafío inicial fue <strong> conectar personas con restaurantes y, en el medio, ofrecer a riders </strong> la posibilidad de generar un ingreso extra. Pero no es una app de pedidos como cualquier otra: en Welly Go el trato y la manipulación de los alimentos debía ser full transparente y comprometida.</h5>
            </div>
        </div>
        <!-- End Div 2: Weely Go Intro -->
        <!-- End Div 1.1: Alone Imagen -->  
        <div class="mutanto__pryectos-aloneImagen minMarginTop">
            <picture>
                <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_2-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen_app_previwe_2-mobile@2x.png 2x">
                <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen_app_previwe_2.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen_app_previwe_2@2x.png 2x">
                <img src="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen_app_previwe_2.png" alt="Collage creativo de varios celulares recostados que muestran distintas pantallas de la app " title="Mockups de Welly Go con todas sus pantallas">
            </picture>
        </div>
        <!-- End End Div 1.1: Alone Imagen -->
        <!-- Div 3: ¿Qué vas a pedir hoy? -->
        <div class="mutanto__pryectos-que-tiene-de-especial-una-balanza div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Desafío número uno";
            $titleH2 = "¿Qué  vas a pedir hoy?";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <h5 class="mutanto__pryectos-text-margin-right">
                    <strong>El desafío de Mutanto fue crear una interfaz que fuera útil e intuitiva </strong>, que mostrara muchas opciones y transmitiera con seguridad que vas a comer rico, sin problemas de contaminación cruzada.<br><br>Uno de los objetivos principales de Welly Go era <strong> ofrecer a personas con celiaquía la certeza de que su plato iba a ser cuidado al máximo </strong>. <br><br> Por eso, junto con el diseño adaptamos el contenido a una voz alegre y con un mensaje claro: <strong> pedí sin preocuparte</strong> , nos vamos a encargar de que tu plato llegue tal cual lo pediste.
                </h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_3-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_3-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_3.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_3@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_3.png" alt="Pantallas de la app donde las personas usuarias eligen el restó que prefieren según sus hábitos alimenticios para iniciar su pedido " title="Mockups de las pantallas de opciones de comida vegetariana, vegana y sin TACC que ofrece la app">
                </picture>

            </div>
        </div>
        <!-- End Div 3: ¿Qué vas a pedir hoy? -->
        <!--  Div 4: Protagonistas de Welly Go -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Riders y restó";
            $titleH2 = "Protagonistas de Welly Go";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

                <style>
                    dotlottie-player {
                        width: 742px;
                        border-radius: 7.366px;
                    }

                    @media (max-width : 576px) {
                        dotlottie-player {
                            width: 100%;
                        }
                    }
                </style>
                <dotlottie-player src="https://lottie.host/913f8298-db88-45c6-9476-537698a4f6c5/Iw19twSv1f.json" background="transparent" speed="1" loop autoplay></dotlottie-player>
                <h5 class="mutanto__pryectos-text-margin-left">
                    Welly Go permite a las personas ver y pedir platos acordes a sus hábitos alimenticios, por eso <strong> teníamos que darle al restó una interfaz donde pudiera cargar sus platos de manera ágil, pero completa </strong> .<br><br>
                    Diseñamos una web app <strong> pensada para la dinámica y el ritmo de trabajo gastronómico </strong>, donde los pedidos son rápidamente comprensibles en un modelo de tablero Kanban.<br><br>
                    Tenemos una persona con hambre y un restaurante dispuesto a prepararle su plato ¿Quién se lo va a llevar? Para riders <strong> creamos una app con una interfaz clara y adaptada a un contexto de calle </strong>.<br><br>
                    Representamos al rider con un conejito simpaticón y estructuramos su experiencia en pasos, ubicando su trayectoria en un mapa.
                </h5>

            </div>
        </div>
        <!-- End Div 4: Protagonistas de Welly Go -->
        <!-- Cuotes  -->
                <?php 
            $quoteText = "Mi experiencia con Mutanto fue maravillosa, el equipo tiene ideas innovadoras, son súper eficientes, ellos fueron los encargados de Welly Go, y siempre entendieron a la perfección nuestras necesidades. Agradecida por la calidad profesional y humana de este equipo!";
            $quoteAuthor = "Nahir Caro";
            $quotePosition = "Fundadora & Directora, Welly Go Argentina";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
        <!-- Div 5: Que el mundo nos conozca -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Landing page";
            $titleH2 = "Que el mundo nos conozca";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text">
                <h5>Explicamos las ventajas que Welly Go ofrece para cada una de las partes involucradas en la APP: un plato que llega como lo pediste, un lugar exclusivo del sector para publicar tus platos y una forma de generar un ingreso extra.</h5>
            </div>
        </div>
        <!-- End  Div 5: Que el mundo nos conozca -->
        <!-- End End Div 6.1: Alone Imagen -->
        <div class="mutanto__pryectos-aloneImagen minMarginTop">
            <picture>
                <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_4-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_4-mobile@2x.png 2x">
                <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_4.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_4@2x.png 2x">
                <img src="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_4.png" alt="Composición creativa de las pantallas de las páginas de aterrizaje de Welly Go aplicadas a laptops y celulares" title="Landing pages de Welly Go en versión mobile y desktop">
            </picture>

        </div>
        <!-- End End Div 6.1: Alone Imagen -->
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