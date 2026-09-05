<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "withe";
$thisPageLanguages = array(
    "es" => "proyectos/hts-pathways/",
    "en" => "projects/hts-pathways/"
);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    $pageTitle = "Projects | HST Pathways";
    $pageDescription = "We designed landings and digital products for Heuristic, a company dedicated to the health industry";
    $pageKey = "Mutanto,Projects,HST Pathways,Web design,Healthcare";
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
                <h2>Health management is also designed</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon.png 1x, <?php echo (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon.png" width="102" height="102" alt="HST Pathways logo" title="HST Pathways logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon_imagen_header-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon_imagen_header-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon_imagen_header.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon_imagen_header@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon_imagen_header.png" alt="Creative collage featuring a healthcare worker working at his computer with HST product screenshots in the background" title="Screenshots of Mutanto's work for HST">
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
                                <span>Visual design</span>
                                <span>Landing Page</span>
                                <span>Graphic design</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">
                                HST Pathways provides software solutions to healthcare companies and professionals. Through various digital products, the company aims to enhance the experience, making it more efficient and enjoyable for specialists, administrators, and patients.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- Client Go to website -->
                    <style>
                        .mutanto__elements-cliente-goToWebSite {
                            background-image: url("<?php echo (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_previwe.png");
                            background-size: cover;
                            background-color: #575757;
                            border-width: 0px;
                        }

                        @media (-webkit-min-device-pixel-ratio: 2),
                        (min-resolution: 192dpi) {
                            .mutanto__elements-cliente-goToWebSite {
                                background-image: urlw("<?php echo (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_previwe@2x.png");
                            }
                        }
                        @media (max-width: 1199px) and (min-width: 577px) {
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

                     
                        @media (max-width: 1443px) and (min-width: 993px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                top: 180px;
                             }
                        }
                    
                    </style>
                    <div class="mutanto__elements-cliente-goToWebSite">
                        <?php
                        $URL_DESTINATION = "https://www.hstpathways.com/";
                        require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/element_button_visit_site.php"));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Div 1: Bocho Header -->
        <!-- Div 2:  Inclusión y autonomía -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Digitalizing processes";
            $titleH2 = "Health 3.0";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <style>
                .setup03 {
                    align-items: center;
                    justify-content: center;
                }
            </style>
            <div class="mutanto__pryectos-text-image setup03">
                <style>
                    h5 a {
                        text-decoration: underline;
                        color: var(--verdemutanto);
                    }
                </style>
                <h5 class="mutanto__pryectos-text-margin-right">
                    <strong>Health management requires serious attention</strong>. Appointments, medical records, registers, payments... There are several factors involved in this more "bureaucratic" dimension every time we have to go to the doctor.<br><br>
                    Almost always, everything can be made simpler. This is why <strong>Mutanto became a strategic partner of HST Pathways</strong>, with the mission to provide interfaces and structures aligned with both the needs of the sector and the expectations of the HST team.<br><br>
                    What is HST's specific demand? Present their products to the medical community in a correct way and in language that aligns with the sector.
                </h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_healt-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_healt-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_healt.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_healt@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_healt.png" alt="Mockup of a cover designed for HST applied to a laptop with an abstract background including curved lines" title="Mutanto mockup for HST">
                </picture>
            </div>
        </div>
        <!-- End Div 2: Inclusión y autonomía -->

        <!-- Cuotes  -->
        <?php
                $quoteText = "I have had the pleasure of working with Mutanto for over a year now, and I can't recommend them enough. Our company previously had a full-time, in-house designer, and in the beginning, I was nervous about outsourcing to an agency. However, Mutanto has been a dream partner. They are quick and responsive and create beautiful designs. I am always impressed with how they can adhere to our brand guidelines, yet nothing feels redundant or predictable. They never say no to whatever projects we ask of them, and are equally as invested in the results as we are. I am very grateful for their partnership!";
    
        $quoteAuthor = "Erica Palmer";
        $quotePosition = "SR. Content Marketing Manager, HST Pathways";
        include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
        <!-- Div 3:  Usando el bocho -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "The role of the team";
            $titleH2 = " What do you recommend, Dr. Mutanto?";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_dr_mutanto-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_dr_mutanto-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_dr_mutanto.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_dr_mutanto@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_dr_mutanto.png"  alt="Creative montage in grid format with captures of graphic and digital design products made by Mutanto for HST." title="Flyer, posters and digital design pieces for HST Pathways">
                </picture>
                <h5 class="mutanto__pryectos-text-margin-left">We have worked to expand the digital pieces that<strong> HST</strong>  manages on social media and marketing campaigns for brand positioning related to landing pages and designs.<br><br>
                    We design to<strong> enhance the emotional landscape of the brand </strong>with secondary pieces: informative and, above all, useful content.
                </h5>

            </div>
        </div>
        <!-- End Div 3  Usando el bocho -->
        <!-- Div 4:  Usando en accion -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Versatile and adaptable";
            $titleH2 = "Towards holistic end-to-end solutions";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <h5 class="mutanto__pryectos-text-margin-right">
                We can adapt to this and many other contexts because<strong> we understand that designing is communicating and there are numerous factors we must consider</strong>.<br><br>
                For this very reason, some clients<strong> choose us to provide them with a global service, focusing on the big picture </strong> and integrating Mutanto's work into the company's strategy.
                </h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_solution-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_solution-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_solution.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_solution@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_solution.png"  alt="Creative assembly of creative pieces such as presentations and product pages applied to various devices in a 3D aesthetics" title="Digital design parts for HST applied to various devices">
                </picture>


            </div>
        </div>
        <!-- End Div 4  Bocho en accion -->
        <?php
        //Add title to the section
        $titleH2 = "Do you want to turn your project<br> into a great success story?";
        $buttonText = "Let's talk";
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