<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "withe";
$thisPageLanguages = array(
    "es" => "proyectos/grupo-herrero/",
    "en" => "projects/grupo-herrero/"
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = " Projects | Grupo Herrero";
    $pageDescription = "We redesigned the website of a company with over 25 years of experience.";
    $pageKey = "Mutanto,Projects,Grupo Herrero,Visual design,UI design";
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
                <h2>A redesign with identity.</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon.png" width="102" height="102" alt="Grupo Herror Logo" title="Grupo Herror Logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon_header-imagen-mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon_header-imagen-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon_header-imagen.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon_header-imagen@2x.png 2x ">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_icon_header-imagen.png" alt="Creative assembly of the screens from Grupo Herrero's website." title="Screenshots of Grupo Herrero's website.">
                </picture>s
                <!-- Client Description Table and Link to Website -->
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
                                <span class="verdeMutanto">3 Months</span>
                            </div>
                        </div>
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
                                    Grupo Herrero is a long-standing family business that needed a more modern image. However, not everything can be built from scratch; 25 years is a lot of time. So, what is the essence of the company?
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
                        <h4>Explore the website</h4>
                        <p>Visit Grupo Herrero's website and discover how Mutanto's ideas were executed to allow thousands of internet users to access the site.</p>
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
            $titleH4 = "Convergence";
            $titleH2 = "Between experience and a youthful perspective";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <h5 class="mutanto__pryectos-text-margin-right">Every family-owned business possesses a notable characteristic: the coexistence of different generations, all dedicated to a common interest<br><br>
                    Grupo Herrero is no exception. The goal was to reflect that diversity on the website. But what are the values and vision of the company?<br><br>
                    The challenge was to renew Grupo Herrero's image in a way that would allow us to preserve the company's identity without endangering its prestige.<br><br>
                </h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_webpage-mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_webpage-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_webpage.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_webpage@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_webpage.png" alt="Abstract composition featuring a hand holding a sheet with the design system we use to create the website" title="Design System for Grupo Herrero.">
                </picture>

            </div>
        </div>
        <!-- End Div 2: Inclusión y autonomía -->
        <!-- Cuotes  -->
        <?php
        $quoteText = "I have worked with the team on the design of my website. They have operated with a high level of professionalism and are always available for questions and changes. Coming from a negative experience, I have found an effective solution with them.";
        $quoteAuthor = "Federico Herrero";
        $quotePosition = "Executive partner, Grupo Herrero";
        include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
        <!-- Div 3:  Usando el bocho -->
        <div class="mutanto__pryectos div__setup">
            <div class="mutanto__pryectos-text-image">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_previwe-mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_previwe-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_previwe.png 1x,<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_previwe@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_previwe.png" alt="Forms and graphic elements of Grupo Herrero's identity blended with representative photographs from the industry." title="Graphic elements of Grupo Herrero's identity.">
                </picture>
                <h5 class="mutanto__pryectos-text-margin-left">Cutting straight to the point<strong> here's the Mutanto tip for tackling any redesign</strong>: the idea is to bridge the gap between the real and virtual worlds.<br>
                    <br>
                    In other words,<strong>we couldn't redesign the website without getting to know the company, without understanding what and who Grupo Herrero is addressing</strong>.
                    <br>
                    <br>
                    We dove headfirst into the industry, extracting concepts, colloquialisms, and an entire vocabulary specific to the sector.
                    <br>
                    <br>
                    <strong>We examined their imprint, language, and connection with clients</strong>,  leveraging all these elements to ensure that the site redesign is just that—a redesign, not starting from scratch.
                </h5>
            </div>
        </div>
        <!-- End Div 3  Usando el bocho -->
        <!-- Div 4:  Usando en accion -->
        <div class="mutanto__pryectos div__setup">
            <div class="mutanto__pryectos-aloneImagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_app_previwe-mobile.png 1x, <?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_app_previwe-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_app_previwe.png 1x, <?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_app_previwe@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/grupo-herrero/mutanto_ui_ux_branding_visual_desing_research_prototying_wireframing_app_previwe.png" alt="Screenshots of some sections of Grupo Herrero's website in its mobile version." title="Screenshots of Grupo Herrero's website mobile version.">
                </picture>
            </div>
        </div>
        <!-- End Div 5: Alone Imagen -->
        <?php
        //Add title to the section
        $titleH2 = "Do you want to turn your project<br>into a great success story?";
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