<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "withe";
$thisPageLanguages = array(
    "es" => "proyectos/bocho/",
    "en" => "projects/bocho/"
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php
          $pageTitle = "Projects | Bocho";
          $pageDescription = "We designed the interface for Bocho, an out-of-convention mouse that can be controlled with head movements";
          $pageKey = "Mutanto,Projects,Bocho,Accesibility,UI design";
          $pageUrl = URL_SITE.$language."/".$thisPageLanguages[$language];
          $pageCardDescription = $pageDescription;
          $pageCardImagen = $pageUrl."mutantoImagenCard.png";
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
        <!-- Div 1: Bocho Header -->
        <div class="mutanto__pryectos">
            <div class="mutanto__pryectos-header">
                <h2>A different mouse, an adapted mouse</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon.png" width="102" height="102" alt="Bocho Logo" title="Bocho Logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_header-imagen_mobile.png 1x, <?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_header-imagen_mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_header-imagen.png 1x, <?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_header-imagen@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_header-imagen.png" alt="Creative collage of the screens and options offered by Bocho." title="Bocho's interface in tablet version.">
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
                                <span>2022</span>
                                <span><i class="fa-regular fa-clock verdeMutanto"></i></span>
                                <span class="verdeMutanto">3 Months</span>
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
                                <span>Branding</span>
                                <span>User interface</span>
                                <span>Wireframing</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">We designed an interface for a mouse that helps people with reduced mobility to work, play and access all the functionalities of a computer.</h5>
                            </div>
                        </div>
                    </div>
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
                                top: 5px !important;
                            }
                        }
                    </style>

                    <!-- Client Go to website -->
                    <div class="mutanto__elements-cliente-goToWebSite">
                        <h4>Discover Bocho</h4>
                        <p> Is curiosity getting the best of you? We invite you to check out Bocho's Instagram to clear up any doubts and learn more about the technology applied to inclusion.</p>
                        <?php
                        $URL_DESTINATION = "https://www.instagram.com/bocho.at/";
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
            $titleH4 = "What is head tracking?";
            $titleH2 = "Inclusion and autonomy";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php")) 
            ?>
            <div class="mutanto__pryectos-text-image">
                <h5 class="mutanto__pryectos-text-margin-right"><strong>Bocho</strong> is a mouse with a different design from conventional ones. It is designed so that people with quadriplegia or neurodegenerative disorders can have a more independent user experience.<br><br>
                    <strong>At Mutanto, we designed the interface for this mouse</strong> that works with a webcam and lenses with reflective stickers. The webcam, connected to a computer, detects the sticker and its movements. Thus, the user controls the cursor with head movements.<br><br>
                    The objective is to facilitate and expand the functionalities of a computer for people who require a different experience in using the device.
                </h5>

                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer@2x.png 2x ">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer.png" alt="Laptop with a reflective sticker and glasses on the keyboard, with the screen displaying the Bocho interface." title="Laptop with a reflective sticker and the Bocho interface">
                </picture>   
            </div>
        </div>
        <!-- End Div 2: Inclusión y autonomía -->
        <!-- Cuotes  -->
        <?php 
            $quoteText = " I've been personally working with Mutanto for a couple of years now and I can't stress enough how much I like working with them. Very detail-oriented, great listeners to our \"constant\" feedback, and out-of-the-box thinkers. In my company, it's now a verb \"to Mutantificate something\", when you want to make it cooler, well-designed, and up-to-date.It's been a pleasure, and definitely many more things to do together.";
            $quoteAuthor = "Héctor Costa";
            $quotePosition = "Co-founder, Bocho Project";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
        <!-- Div 3:  Usando el bocho -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "A custom interface";
            $titleH2 = "Using Bocho";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
            <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_mobile@2x.png 2x">
                    <source media="(min-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app.png"  alt="Screen of a laptop with the Bocho interface operational in the system." title="Bocho interface integrated into a computer screen.">
                </picture>       
                <h5 class="mutanto__pryectos-text-margin-left">We built an interface that permits different configurations and customization modes.<br><br>
                The main component of the UI is a wheel, which is made up of different icons. Each icon represents a function: left click, double click, right click and scroll.<br><br>
                Bocho allows you to configure shortcuts, the size of the interface on the screen and the response speed, with the aim of successfully adapting to each person's use.
                </h5>
            </div>
        </div>
        <!-- End Div 3  Usando el bocho -->
        <!-- Div 4:  Usando en accion -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "How does it look?";
            $titleH2 = "Bocho in action";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text">
                <h5>Bocho's interface adapts to the computer and is integrated as another component of the screen. Once calibrated, it is ready to use.</h5>
            </div>
        </div>
        <!-- End Div 4  Bocho en accion -->
        <!-- End Div 5 : Alone Imagen -->
        <div class="mutanto__pryectos-aloneImagen minMarginTop">
            <picture>
                <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_2_mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_2_mobile@2x.png 2x">
                <source media="(min-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_2.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_2@2x.png 2x">
                <img src="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_2.png" alt="Mockup of a laptop with the operational Bocho interface during the onboarding process for users." title="Operational Bocho onboarding on a laptop.">
            </picture>

        </div>
        <!-- End Div 5: Alone Imagen -->
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