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
    $pageDescription = "We designed the website of a leading company in weighing instruments. We show you how we communicate the virtues of the company on the site ⚖";
    $pageKey = "Mutanto,Projects,Systel,Web design,UI design";
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
        @media (max-width : 576px) {

            /* Mobile ORDER */
            main div:nth-child(1) {
                order: 0;
            }

            main div:nth-child(2) {
                order: 3;
            }

            main div:nth-child(3) {
                order: 2;
            }

            main div:nth-child(4) {
                order: 4;
            }

            main div:nth-child(5) {
                order: 5;
            }

            main div:nth-child(6) {
                order: 6;
            }

            main div:nth-child(7) {
                order: 7;
            }

            main div:nth-child(8) {
                order: 8;
            }
        }
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
                <h2>In search of technological minimalism</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_icon.png 1x,<?php echo (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_icon.png" width="102" height="102" alt="Systel logo" title="Systel Logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_header-imagen-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_header-imagen-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_header-imagen.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_header-imagen@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_header-imagen.png"  alt="Home screen of the Systel website applied to a laptop." title="Mockup of the Systel website in desktop version.">
                </picture>

                <!-- Client Description Table and Link to Website -->
                <div class="mutanto__elements-cliente-tableAndGo-structure">
                    <!-- Client Description Table -->
                    <div class="mutanto__elements-cliente-description-structure">
                        <div class="mutanto__elements-cliente-header">
                            <div class="mutanto__elements-cliente-header-icon">
                                <img src="<?php echo (URL_SITE) ?>img/mdi_axis-arrow.png" alt="Project summary">
                            </div>
                            <div class="mutanto__elements-cliente-header-dateAndTime" style="gap: 6px;">
                                <span>2022</span>
                                <span> - </span>
                                <span class="verdeMutanto">Currently</span>
                            </div>
                        </div>
                        <style>
                             @media (max-width: 576px) {
                            .mutanto__elements-cliente-row {
                                height: 324px;
                            }
                        }
                        </style>
                        <div class="mutanto__elements-cliente-row">
                            <div class="mutanto__elements-cliente-tags">
                                <span>Visutal Desing</span>
                                <span>Figma</span>
                                <span>Website</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">Systel is a leader in the commercialization of scales and weighing instruments for businesses, healthcare institutions and industry.</h5>
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

                        @media (max-width: 1444px) and (min-width: 577px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                bottom: -135px;
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
                <img src="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_2.png"  alt="Collage of several mobile phones displaying the Systel website design in mobile version." title="Mockup of the Systel website in mobile version.">
            </picture>
        </div>
        <!-- End End Div 1.1: Alone Imagen -->
        </div>
        <!-- Div 2: Historia y tradicion -->
        <div class="mutanto__pryectos-historia-y-tradicicon div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Technological minimalism";
            $titleH2 = "History and tradition";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <h5>Systel needed to renew its website and leave a technological mark <strong>without losing sight of the trajectory of a leading company</strong>.<br><br>The main objective was to modernize its image in the digital world to contribute to Systel's positioning as a leading brand in the industry.</h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_1-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_1-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_1.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_1@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_app_previwe_1.png" alt="Creative collage of the informational cards that Systel displays in the design of its website in mobile version" title="Mobile view of one of the sections of the site.">
                </picture>

            </div>
        </div>
        <!-- End Div 2: Historia y tradicion -->
                <!-- Cuotes  -->
                <?php 
            $quoteText = "We have had the privilege of working with Mutanto for more than two years on Systel's ambitious digital transformation project.<br>
            We chose Mutanto because of their client-centric approach and their consolidated track record in the market, especially in projects covering such fundamental aspects as Branding, UX and UI. In addition to its ability to adapt to the work team. <br>
            Every result delivered by Mutanto has exceeded our expectations, generating a significant impact on our objectives.<br>
            What stands out the most about Mutanto's team is their flexibility, adaptability and the speed with which they approach each project. Their commitment to each client.";
            $quoteAuthor = "Soledad Mansilla";
            $quotePosition = "Marketing leader, Systel Argentina";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
        <!-- Div 3: Que tiene de especial una balanza -->
        <div class="mutanto__pryectos-que-tiene-de-especial-una-balanza div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Product Qualities";
            $titleH2 = "What is so special about a scale";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_previwe_3-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_previwe_3-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_previwe_3.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_previwe_3@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_previwe_3.png" alt="Creative composition of graphic elements present in the design process of Systel's website." title="Cards, photographs, and colors used to create the website.">
                </picture>
                <h5>
                In general, for the end consumer in a store or the patient who uses it in the doctor's office, <strong>a scale might not be a product that attracts much attention</strong>.<br><br>
                But for this segment, <strong>it means precision, innovation, and progress</strong> (it is usually one of the first and most expensive purchases for a business). How can we reflect this?<br><br>
                We’ve chosen to associate each scale with a product and a person, to evoke the context of use of the scales and empathize with the people who visit the website.
                </5>
            </div>
        </div>
        <!-- End Div 3: Que tiene de especial una balanza -->
        <!--  Div 4: Desing Systel, digo system -->
        <div class="mutanto__pryectos-desingg-systel div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Coherence and consistency";
            $titleH2 = "Design Systel. I mean, system";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <picture>
                <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_system_previwe_3-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_system_previwe_3-mobile@2x.png 2x">
                <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_system_previwe_3.png 1x, <?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_system_previwe_3@2x.png 2x">
                <img src="<?= (URL_SITE) ?>es/proyectos/systel/mutanto_ui_ux_website_figma_visual_desing_systel_scale_system_previwe_3.png" alt="Buttons, spacing, typography, colors, and other elements that make up the web page design system." title="Website design system.">
            </picture>

        </div>
        <!-- End Div 4: Desing Systel, digo system -->
        <?php
        //Add title to the section
        $titleH2 = "Do you want to know more about this project?";
        $buttonText = " Let's talk";
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