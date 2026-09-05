<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "withe";
$thisPageLanguages = array(
    "es" => "proyectos/slapp/",
    "en" => "projects/slapp/"
);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    $pageTitle = "Proyectos  | Slapp";
    $pageDescription = "Rediseñamos la interfaz de una app para analizar métricas de redes sociales";
    $pageKey = "Mutanto,Proyectos,Slapp,Diseño de app,Diseño centrado en el usuario";
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
                <h2>Slapp: más data para decidir</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon.png 1x, <?php echo (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon.png" width="102" height="102" alt="Slapp logo" title="Slapp logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon_imagen_header-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon_imagen_header-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon_imagen_header.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon_imagen_header@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon_imagen_header.png"  alt="Collage creativo de la pantalla de registro de Slapp y de los tips que brinda la web app" title="Pantalla de registro de la web app">
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
                                <span>2023</span>
                                <span><i class="fa-regular fa-clock verdeMutanto"></i></span>
                                <span class="verdeMutanto">3 meses</span>
                            </div>
                        </div>
                        <style>
                     @media (max-width: 576px) {
                    .mutanto__elements-cliente-row {
                        height: 300px;
                    }
                }
                </style> 
                        <div class="mutanto__elements-cliente-row">
                            <div class="mutanto__elements-cliente-tags">
                                <span>Visual design</span>
                                <span>Figma</span>
                                <span>Websites</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">
                                Rediseñamos Slapp, una app freemium que permite analizar redes sociales ¿Cuál es su valor diferencial? Gamificación, un lenguaje friendly y accionables: tips prácticos para levantar las métricas.
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
                                top: 5px !important;
                            }
                        }


                    </style>
                    <div class="mutanto__elements-cliente-goToWebSite">
                        <h4>Te pedimos paciencia </h4>
                        <p>El proyecto Slapp aún está en fase de desarrollo, por eso no podemos mostrarte cómo se adaptó el diseño al resultado final. Peeero, podés enterarte un poco más en su perfil de Instagram. Acá te lo dejamos:</p>
                        <?php
                        $URL_DESTINATION = "https://www.instagram.com/slapp.us/";
                        require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/element_button_visit_site.php"));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Div 1: Bocho Header -->
        <!-- Div 2:  Inclusión y autonomía -->
        <style>
                .setup03 {
                    align-items: center;
                justify-content: center;
                }
                
        </style>    
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Visualización de datos";
            $titleH2 = "Primero analizo, luego publico ";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image setup03">
                <h5 class="mutanto__pryectos-text-margin-right">
                En el mundo de las redes sociales, <strong>las métricas mandan</strong> . Es una tarea que requiere el análisis en profundidad de todos los números de una cuenta en Instagram o Facebook: tiempo promedio de vista, clics en enlaces, engagement, nuevos seguidores, me gusta y mucho más.
                Y <strong>como cada dato importa</strong> , es fundamental tener una buena lectura de todos ellos.<br><br>
                Junto con una interfaz de estilo limpio y minimalista, <strong>preocupamos por diseñar tableros que aportaran datos claros y detalladados</strong> de manera amigable.</h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_metrics-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_metrics-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_metrics.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_metrics@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_metrics.png" alt="Captura de tablero en la página principal de Slapp" title="Vista de tablero en el inicio de la Web App">
                </picture>
            </div>
            </div>
            <!-- End Div 2: Inclusión y autonomía -->
            <!-- Div 3:  Usando el bocho -->
            <div class="mutanto__pryectos div__setup">
                <?php
                //Add title to the section
                $titleH4 = "Gamification";
                $titleH2 = "El puntaje Slapp";
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
                <div class="mutanto__pryectos-text-image">
                <h5 class="mutanto__pryectos-text-margin-right">Slapp <strong>puntúa los perfiles de cada cuenta a través de métricas de referencia</strong> , así ayuda a las personas a saber si el desempeño de su perfil fue óptimo, regular o... tiene mucho por mejorar.<br><br>
                Para eso <strong> propone un juego donde los y las usuarias deben alcanzar objetivos </strong> para sumar puntos. En base a su puntaje reciben tips y consejos prácticos que podrían ayudar a mejorar los números de su comunidad.
                </h5>
                    <picture>
                        <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_gamification-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_gamification-mobile@2x.png 2x">
                        <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_gamification.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_gamification@2x.png 2x">
                        <img src="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_gamification.png"  alt="Captura de pantalla cards que contienen tips para favorecer un mejor desempeño en redes sociales" title="Cards con tips para mejorar tu &quot;puntaje Slapp'&quot;">
                    </picture>

           
                </div>
            </div>
            <!-- End Div 3  Usando el bocho -->
            <!-- Div 4:  Usando en accion -->
            <div class="mutanto__pryectos div__setup">
                <?php
                //Add title to the section
                $titleH4 = " La tarea de Mutanto";
                $titleH2 = "Research for design";
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
                <div class="mutanto__pryectos-text-image">
                    <picture>
                        <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_research-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_research-mobile@2x.png 2x">
                        <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_research.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_research@2x.png 2x">
                        <img src="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_research.png" alt="Collage creativo de pantallas de Slapp que muestra el inicio de sesión en una laptop y un tablero con los mejores horarios para publicar" title="Inicio de sesión y tablero de mejor horario para publicar ">
                    </picture>
                    <h5 class="mutanto__pryectos-text-margin-left">En primer lugar, <strong>armamos arquetipos</strong> y definimos las piezas esenciales de la experiencia.<br><br>
                    Luego <strong>entrevistamos e identificamos patrones </strong> en las necesidades de los usuarios y las trasladamos a soluciones en la pantalla. <br><br>
                    De esa manera<strong> organizamos y jerarquizamos la información</strong> en cards y paneles, según la importancia que le daban los usuarios a esa info.<br><br>
                    ¿Cuál fue la parte más difícil? Hacerlo simple. Reestructurar las cards y los paneles en una vista más limpia implicó perder información. Nuestra tarea fue entender cuánta de esa información era necesaria para las personas usuarias y por qué.<br><br>
                    </h5>
                </div>
            </div>
            <!-- End Div 4  Bocho en accion -->
            <!-- Div 5:  Usando en accion -->
            <div class="mutanto__pryectos div__setup">
                <?php
                //Add title to the section
                $titleH4 = "Slapp en funcionamiento";
                $titleH2 = "El aliado de emprendedores y CMs"; 
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
                <div class="mutanto__pryectos-text">
                    <h5>El valor diferencial de Slapp está en poder brindar info detallada y, al mismo tiempo, posibles soluciones. Este es el lugar de <strong>los accionables, consejos útiles</strong> y bien prácticos para llevarse puesta las métricas de cualquier plataforma.<br><br>
                    <strong>Slapp ofrece la información y además ayuda a las personas a procesarla y a actuar en función de esos datos </strong>. Es por eso que el diseño de la interfaz responde no solo a un concepto de análisis y dashboards bonitos, sino también a una idea de juego con fines didácticos.
                    </h5>
                </div>
                <div class="mutanto__pryectos-aloneImagen minMarginTop">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_cms-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_cms-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_cms.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_cms@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_cms.png"  alt="Montaje creativo de varias de las pantallas que componen la experiencia de usuario de Slapp, con tableros, gráficos comparativos y un puntaje" title="Pantallas de la experiencia Slapp con gráficos y elementos informativos de la cuenta">
                </picture>
            </div>
            </div>
            <!-- End Div 5  Bocho en accion -->
            <?php
            //Add title to the section
            $titleH2 = "¿Querés saber más acerca de este proyecto?";
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