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
          $pageTitle = "Proyectos  | Bocho";
          $pageDescription = "Diseñamos la interfaz para Bocho, un mouse fuera de lo convencional que se maneja con movimientos de cabeza";
          $pageKey = " Mutanto , Proyectos , Bocho , Accesibilidad, Diseño de interfaz";
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
                <h2>Un mouse distinto, un mouse adaptado</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon.png" width="102" height="102" alt="Bocho Logo" title="Bocho Logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_header-imagen_mobile.png 1x, <?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_header-imagen_mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_header-imagen.png 1x, <?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_header-imagen@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_header-imagen.png" alt="Collage creativo de las pantallas y opciones que ofrece Bocho" title="Interfaz de Bocho en versión tablet">
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
                                <span class="verdeMutanto">3 meses</span>
                            </div>
                        </div>
                        <style>
                             @media (max-width: 576px) {
                            .mutanto__elements-cliente-row {
                                height: auto;
                            }
                        }
                        </style>
                        <div class="mutanto__elements-cliente-row">
                            <div class="mutanto__elements-cliente-tags">
                                <span>Branding</span>
                                <span>User interface</span>
                                <span> Wireframing</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">Diseñamos una interfaz para un mouse que ayuda a personas con movilidad reducida a trabajar, jugar y acceder a todas las funcionalidades de una compu.</h5>
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
                        <h4>Descubrí Bocho</h4>
                        <p>¿Te gana la curiosidad? Te invitamos a conocer el Instagram de Bocho, para que te saques todas las dudas y puedas conocer de qué trata la tecnología aplicada a la inclusión.</p>
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
            $titleH4 = "¿Qué es headtracking?";
            $titleH2 = " Inclusión y autonomía";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <h5 class="mutanto__pryectos-text-margin-right"><strong>Bocho</strong> es un mouse con un diseño distinto a los convencionales. Está pensado para que personas con cuadriplejía o enfermedades neurodegenerativas puedan desarrollar más independencia en su experiencia de uso. <br><br>
                    <strong>En Mutanto diseñamos la interfaz para este mouse</strong> que funciona con una cámara web y unos lentes con sticker reflectante. La cámara web, conectada a una computadora, detecta el sticker y sus movimientos. Así, la persona usuaria controla el cursor con movimientos de cabeza.<br><br>
                    El objetivo es facilitar y ampliar las funcionalidades de una computadora a personas que requieren una experiencia diferente en el uso del dispositivo.
                </h5>

                <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer@2x.png 2x ">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer.png" alt="Laptop con sticker reflectante y lentes sobre el teclado con la pantalla que muestra la interfaz de Bocho" title="Laptop con sticker reflectante e interfaz de Bocho">
                </picture>   
            </div>
        </div>
        <!-- End Div 2: Inclusión y autonomía -->
        <!-- Cuotes  -->
        <?php 
            $quoteText = "He estado trabajando personalmente con Mutanto desde hace un par de años y no puedo dejar de destacar lo mucho que me gusta trabajar con ellos. Son muy detallistas, escuchan muy bien nuestros \"constantes\" comentarios y tienen una mentalidad innovadora. En mi empresa, ya es un verbo \"Mutantear algo\", cuando quieres hacerlo más cool, bien diseñado y actualizado.Ha sido un placer, y sin duda muchas más cosas que hacer juntos.";
            $quoteAuthor = "Héctor Costa";
            $quotePosition = "Co-fundador, Bocho Project";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
        <!-- Div 3:  Usando el bocho -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Una interfaz personalizada";
            $titleH2 = "Usando el bocho";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
            <picture>
                    <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_mobile@2x.png 2x">
                    <source media="(min-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app.png" alt="Pantalla de una laptop con la interfaz de Bocho operativa en el sistema" title="Interfaz de Bocho integrada a la pantalla">
                </picture>       
                <h5 class="mutanto__pryectos-text-margin-left">Construimos una interfaz que pudiera permitir distintos modos de configuración y personalización.<br><br>
                    El componente principal de la UI es una rueda, que está integrada por distintos íconos. Cada ícono representa una función: click izquierdo, doble click, click derecho y scroll.<br><br>
                    Bocho permite configurar atajos, el tamaño de la interfaz en la pantalla y la velocidad de respuesta, con el objetivo de adaptarse con éxito al uso de cada persona.
                </h5>
            </div>
        </div>
        <!-- End Div 3  Usando el bocho -->
        <!-- Div 4:  Usando en accion -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "¿Cómo se ve en la compu?";
            $titleH2 = "Bocho en acción";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text">
                <h5>La interfaz de Bocho se adapta a la computadora y se integra como un componente más de la pantalla. Una vez calibrado ya está listo para usar.</h5>
            </div>
        </div>
        <!-- End Div 4  Bocho en accion -->
        <!-- End Div 5 : Alone Imagen -->
        <div class="mutanto__pryectos-aloneImagen minMarginTop">
            <picture>
                <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_2_mobile.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_2_mobile@2x.png 2x">
                <source media="(min-width : 576px)" srcset="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_2.png 1x,<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_2@2x.png 2x">
                <img src="<?php echo (URL_SITE) ?>es/proyectos/bocho/mutanto_ui_ux_branding_user_interface_wireframing_icon_previwe_app_computer_2.png" alt="Mockup de una laptop con la interfaz de Bocho operativa y en el momento de onboarding para las personas usuarias" title="Onboarding de Bocho operativo en una laptop">
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