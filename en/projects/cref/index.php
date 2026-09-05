<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "withe";
$thisPageLanguages = array(
    "es" => "proyectos/cref/",
    "en" => "projects/cref/"
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = "Projects | Cref";
    $pageDescription = "We created the logo and visual identity for a pastry brand. ";
    $pageKey = "Mutanto,Projects,Cref,Logo,Brand identity";
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
    <main  id="top"  data-scroll data-scroll-event-progress="gotoTop">
        <!-- Div 1: Bocho Header -->
        <div class="mutanto__pryectos">
            <div class="mutanto__pryectos-header">
                <h2>A unique brand for unique flavors</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon.png 1x, <?php echo (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon" width="102" height="102"  height="102" title="Cref Logo" >
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon_imagen_header-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon_imagen_header-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon_imagen_header.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon_imagen_header@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon_imagen_header.png" alt="Cref brand cookie bag and a logo variant." title="Cookie bag by Cref"
>
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
                        <style>
                     @media (max-width: 576px) {
                    .mutanto__elements-cliente-row {
                        height: 321px;
                    }
                }
                </style> 
                        <div class="mutanto__elements-cliente-row">
                            <div class="mutanto__elements-cliente-tags">
                                <span>Brand Identity</span>
                                <span>Logotype</span>
                                <span>Visual design</span>
                                <span>BarndBook</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">
                                    Cref is a dessert business that stands out in Riyadh for its original and incredibly delicious cookies. We're not exaggerating. Their product is fantastic, and the brand had to complement it.
                                </h5>
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
                            .mutanto__elements-cliente-goToWebSite p {
                                margin-bottom: 55px;
                            }
                        }

                        @media (max-width: 1443px) and (min-width: 993px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                top: -8px;
                             }
                        }
                    </style>
                    <div class="mutanto__elements-cliente-goToWebSite">
                        <h4>What is Cref doing?</h4>
                        <p>Visit Cref's Instagram profile and discover how the brand applies the logo on its graphic identity. Note: Be careful when you arrive there because you are going to see a lot of delicious things 😋</p>
                        <?php
                        $URL_DESTINATION = "https://www.instagram.com/crefcookies/";
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
            $titleH4 = "No more, no less.";
            $titleH2 = "The perfect blend";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
                        <style>
                .setup1 {
                    justify-content: center !important;
                }    
            </style>
            <div class="mutanto__pryectos-text-image setup1 ">
                <h5 class="mutanto__pryectos-text-margin-right">
                    <p> Quantity is no joke. We're not sure if this is how professionals say it, but we do know that proportions in pastry are a serious matter.
                        <br>
                        <br>
                        At Mutanto, we take this literally. To create a logo like this, you will need:
                    </p>
                    <ul>
                        <li>3 tablespoons of teamwork</li>
                        <li>A pinch of visual and aesthetic judgment (the good kind, please)</li>
                        <li>5 large servings of imagination mixed with creativity.</li>
                    </ul>
                </h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_logos-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_logos-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_logos.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_logos@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_logos.png" alt="Variations and uses of the logotype on different backgrounds with colors and images" title="Logo applications on various backgrounds">
            </picture>      
            </div>
            </div>
            <!-- End Div 2: Inclusión y autonomía -->
                                <!-- Cuotes  -->
        <?php 
            $quoteText = "I rebuilt my brand with Mutanto , they were amazing and professional.The team was very friendly and patient with me as I was keep asking for more changes 😅 When they made the designs they exceeded my expectations. I even recommended them to my friends. I honestly surprised of their intelligence and creativity!
            Sara Alswai";
            $quoteAuthor = "Sara Alswailem";
            $quotePosition = "Co-founder, Cref";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
            <!-- Div 3:  Usando el bocho -->
            <div class="mutanto__pryectos div__setup">
                <?php
                //Add title to the section
                $titleH4 = "The background we need";
                $titleH2 = "An ancient activity";
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
                <div class="mutanto__pryectos-text-image">
                    <picture>
                        <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_box-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_box-mobile@2x.png 2x">
                        <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_box.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_box@2x.png 2x">
                        <img src="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_box.png"  alt="Box of cookies made of cardboard with the brand identity created by Mutanto" title="Caja de galletas de Cref">
                    </picture>

                    <h5 class="mutanto__pryectos-text-margin-left">
                        Creating a logo for a brand that sells cookies and desserts might seem easy. But no, it's not. <strong>The creation of the cookie was almost a milestone in human history</strong>; it allowed for the easy manufacturing and transportation of food.<br>
                        <br>
                        After years and years of evolution, <strong>Cref</strong> brings you the well-sought and required preparations.<br>
                        <br>
                        How can we symbolize in a logo the process of creation and evolution of a food?
                    </h5>
                </div>
            </div>
            <!-- End Div 3  Usando el bocho -->
            <!-- Div 4:  Usando en accion -->
            <div class="mutanto__pryectos div__setup">
                <?php
                //Add title to the section
                $titleH4 = "Where we started";
                $titleH2 = "To create and stir";
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
                <style>
                    .setup2 {
                        align-items: flex-start !important;
                    }
                    @media (max-width: 1199px) and (min-width: 577px) {
                    .setup2 {
                    align-items: center !important;
                }
                }
                </style>
                <div class="mutanto__pryectos-text-image setup2">
                    <h5 class="mutanto__pryectos-text-margin-right">
                        To start the preparation, follow the Mutateam's lead and, before beginning, make sure everything is organized.<br>
                        <br>
                        For the creation of a logo like Cref's, it is crucial to have all the information surrounding the brand well-organized.
                        <br>
                        <br>
                        This way, we arrive at <strong>a concept that is easy to remember and representative of Cref</strong>.
                    </h5>
                    <picture>
                        <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_concept-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_concept-mobile@2x.png 2x">
                        <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_concept.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_concept@2x.png 2x">
                        <img src="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_concept.png" alt="Letters, tools, and elements representative of the logo creation process." title="Summary of the logo creation process.">
                    </picture>

                </div>
            </div>
            <!-- End Div 4  Bocho en accion -->
            <!-- Div 5:  Usando en accion -->
            <div class="mutanto__pryectos div__setup">
                <?php
                //Add title to the section
                $titleH4 = "Until it takes consistency";
                $titleH2 = "The final result";
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
                <div class="mutanto__pryectos-text">
                    <h5>Once we mix and process all the ingredients, we need to arrive at a piece like this: simple and tailored to the brand's needs. In this case, we took the most important elements of the industry and condensed them into a logo that reflects the activities and tools specific to the pastry business.
                    </h5>
                </div>
                <div class="mutanto__pryectos-aloneImagen minMarginTop">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_products-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_products-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_products.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_products@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_products.png" alt=""Commercial and corporate products with the applied brand identity." title="Brand identity applied to real-life cases and scenes.">
                </picture>
            </div>
            </div>
            <!-- End Div 5  Bocho en accion -->
            <!-- End Div 6 : Alone Imagen -->

            <!-- End Div 6: Alone Imagen -->
            <?php
            //Add title to the section
            $titleH2 = "¿Querés convertir tu proyecto <br> en un gran caso de éxito?";
            $buttonText = "Charlemos";
            $URL_CONTACTO = "/contacto/";
            if ($language == "en") {
                $titleH2 = "Do you want to turn your project <br> into a great success story?";
                $buttonText = "Let’s talk";
                $URL_CONTACTO = "/contact-us/";
            }
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