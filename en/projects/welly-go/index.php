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
<html lang="en">

<head>
    <?php
    $pageTitle = "  Projects  | Welly Go";
    $pageDescription = "This is not just another ordering app. Welly Go is the right app for people who by health or choice need to order vegan, vegetarian or TACC free food 🐇";
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
                <h2>So much more than an ordering App</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvpwelly-go_icon.png 1x,<?php echo (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvpwelly-go_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvpwelly-go_icon.png" width="102" height="102" alt="Logo Welly Go" title="Logo Welly Go">
                </picture>

            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen.png"  alt="Welly Go app home screen on a cellphone with gluten-free healthy food in the background on a table" title="App home screen.">
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
                                <span class="verdeMutanto">Currently</span>
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
                                <h5 class="blancoMuntanto"><strong>Welly Go</strong> simplifies the way you explore options and order plant-based, gluten-free food from your cell phone.</h5>
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
            $titleH2 = "One MVP, three apps";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text">
                <h5>The initial challenge was to <strong>connect people with restaurants and, at the same time, offer riders</strong> the possibility of generating extra income. But it is not just another ordering app: with Welly Go, the treatment and handling of food had to be completely transparent and committed.</h5>
            </div>
        </div>
        <!-- End Div 2: Weely Go Intro -->
        <!-- End Div 1.1: Alone Imagen -->
        <div class="mutanto__pryectos-aloneImagen minMarginTop">
            <picture>
                <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_2-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen_app_previwe_2-mobile@2x.png 2x">
                <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen_app_previwe_2.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen_app_previwe_2@2x.png 2x">
                <img src="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_header-imagen_app_previwe_2.png" alt="Creative collage of several reclined smartphones displaying different screens of the app." title="Welly Go mockups with all of its screens.">
            </picture>


        </div>
        <!-- End End Div 1.1: Alone Imagen -->
        <!-- Div 3: ¿Qué vas a pedir hoy? -->
        <div class="mutanto__pryectos-que-tiene-de-especial-una-balanza div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Challenge number one";
            $titleH2 = "What are you ordering today?";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <h5 class="mutanto__pryectos-text-margin-right">
                    <strong>Mutanto's challenge was to create an interface that was useful and intuitive,</strong>showing many tasty options that are trustworthy and free from contamination. <br><br>One of the main objectives of Welly Go was to <strong> offer people with celiac disease the certainty that their meal would be taken care of to the maximum</strong>. <br><br>Together with the design, we adapted the content to a happy voice with a clear message:<strong> order without worrying</strong>, we will make sure that your meal arrives just as you ordered it.
                </h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_3-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_3-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_3.png 1x, <?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_3@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/welly-go/mutanto_ui_ux_website_figma_ios-weiting-research-mvp_welly-go_app_previwe_3.png" alt="App screens where users choose the restaurant they prefer based on their dietary habits to place their order." title="Mockups of screens displaying options for vegetarian, vegan, and gluten-free food offered by the app.">
                </picture>

            </div>
        </div>
        <!-- End Div 3: ¿Qué vas a pedir hoy? -->
        <!--  Div 4: Protagonistas de Welly Go -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Riders and restobar";
            $titleH2 = "Welly Go protagonists";
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
                Welly Go allows people to see and order meals according to their eating habits. That's why we had to give restaurants an interface where they could efficiently load their meals.<br><br>
                We created a web app designed for the dynamics and pace of the gastronomic sector, where orders are quickly understandable in a Kanban board model.<br><br>
                We have a hungry person and a restaurant willing to prepare their meal. Who is going to deliver it? For riders, we created an app with a clear interface adapted to a street context.<br><br>
                We represent the rider via a friendly bunny symbol and track their progress, locating their position on a map.
                </h5>

            </div>
        </div>
        <!-- End Div 4: Protagonistas de Welly Go -->
                <!-- Cuotes  -->
                <?php 
            $quoteText = "My experience with Mutanto was wonderful, the team has innovative ideas, and they are super efficient. They were in charge of Welly Go, and they always understood our needs perfectly. Grateful for the professional and human quality of this team!";
            $quoteAuthor = "Nahir Caro";
            $quotePosition = "Founder and Director, Welly Go Argentina";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
        <!-- Div 5: Que el mundo nos conozca -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Landing page";
            $titleH2 = "Let the world get to know us";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text">
                <h5>We explain the advantages that Welly Go offers to each of the parties involved in the APP: a meal that arrives as you ordered, an exclusive place in the sector to publish your meals and a way to generate extra income.</h5>
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
        $titleH2 = "Do you want to know more about this project?";
        $buttonText = " Let’s talk";
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