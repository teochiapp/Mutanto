<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "withe";
$thisPageLanguages = array(
    "es" => "proyectos/modo-avion/",
    "en" => "projects/modo-avion/"
);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    $pageTitle = "Proyectos  | Modo Avión";
    $pageDescription = "Diseñamos la interfaz de un juego en línea como parte de la campaña de promoción de un sencillo";
    $pageKey = "Mutanto,Proyectos,Modo Avión,Diseño de juego,Storytelling";
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
    mutanto_ui_ux_game_desing_modo_avion
    <!-------  Content Here -->
    <main id="top" data-scroll data-scroll-event-progress="gotoTop">
        <!-- Div 1: Bocho Header -->
        <div class="mutanto__pryectos">
            <div class="mutanto__pryectos-header">
                <h2>Modo Avión: diseñar para entretener</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon.png 1x, <?php echo (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon.png" width="102" height="102" alt="Modo Avion icon" title="Modo Avion icon">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon_imagen_header-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon_imagen_header-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon_imagen_header.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon_imagen_header@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon_imagen_header.png" alt="Pantalla de inicio del juego con estética 8 bit de los 90 con Pau Pazos caricaturizada como co-protagonista" title="Pantalla de inicio del juego de Modo Avión">
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
                                <span class="verdeMutanto">2 meses</span>
                            </div>
                        </div>
                        <style>
                            @media (max-width: 576px) {
                                .mutanto__elements-cliente-row {
                                    height: 340px;
                                }
                            }
                        </style>
                        <div class="mutanto__elements-cliente-row">
                            <div class="mutanto__elements-cliente-tags">
                                <span>Visual design</span>
                                <span>Game Design</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">
                                    Pusimos en juego (literal) nuestras habilidades para crear alta historia. ¿Qué pasa si ganas? Te llevás la NFT song de Paula Pazos. Entonces el mutateam hizo lo que mejor sabe hacer: enganchar a las personas en experiencias suuuper divertidas.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- Client Go to website -->
                    <style>
                        @media (max-width: 1443px) and (min-width: 993px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                top: -8px;
                             }
                        }
                    </style>
                    <div class="mutanto__elements-cliente-goToWebSite">
                        <h4>Descubre a la artista</h4>
                        <p>Conoce más sobre la mente creativa detrás de Modo Avión. Explora su obra, sus inspiraciones y su trayectoria artística.</p>
                        <?php
                        $URL_DESTINATION = "https://www.paulapazos.com";
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
            $titleH4 = "Más allá de la interfaz";
            $titleH2 = " Había una vez…";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <style>
                h5 a {
                    text-decoration: underline;
                    color: var(--verdemutanto);
                }

                .setup03 {
                    align-items: center;
                    justify-content: center;
                }
            </style>
            <div class="mutanto__pryectos-text-image setup03">
                <h5 class="mutanto__pryectos-text-margin-right">
                    A todas las personas <strong> nos gustan las historias. Es nuestra manera de conocer el mundo. </strong> Y la gamificación, en parte, se trata de poner a las personas usuarias en el lugar principal de cualquier cuento.<br><br>
                    Para eso hace falta conocer los ingredientes fundamentales de cualquier relato. Un protagonista, un problema, y un objetivo. Una fórmula irresistible para cualquiera.<br><br>
                    El desafío del Mutateam fue <strong> alinearse a una campaña creativa de comunicación con una interfaz </strong> capaz de <strong> divertir, retener y motivar </strong> a las personas a que escuchen “<a href="https://www.paulapazos.com" target="_new">Modo Avión</a>”, by Paula Pazos.
                </h5>
                <a href="https://www.paulapazos.com" target="_new" alt="Modo Avión cover featuring a tablet with the main game screen against a backdrop of a sky with clouds and an 8-bit aesthetic" title="Cover Art of Modo Avión, Available on spotify">
                    <picture>
                        <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_once_pone_time-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_once_pone_time-mobile@2x.png 2x">
                        <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_once_pone_time.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_once_pone_time@2x.png 2x">
                        <img src="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_once_pone_time.png" alt="Carátula de Modo Avión donde aparece una tablet con la pantalla principal del juego sobre un fondo de cielo con nubes y estética 8 bit" title="Cover Art de Modo Avión, disponible en Spotify">
                    </picture>
                </a>
            </div>
        </div>
            <!-- End Div 2: Inclusión y autonomía -->
                    <!-- Cuotes  -->
                    <?php 
            $quoteText = "Trabajar con Mutanto siempre es una experiencia excelente. Inicialmente, conocí al equipo mientras buscaba especialistas en UX/UI para colaborar en proyectos con mis clientes. En 2022 se sumaron para liderar el diseño de mi proyecto \"Modo Avión\", un juego de escape virtual creado en Unity. Lo que más valoro de Mutanto es su capacidad para escuchar y comprender mis objetivos y necesidades específicas para cada proyecto, su creatividad, compromiso y dedicación.";
            $quoteAuthor = "Paula Pazos";
            $quotePosition = "Creadora, Modo avión";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
            <!-- Div 3:  Usando el bocho -->
            <div class="mutanto__pryectos div__setup">
                <?php
                //Add title to the section
                $titleH4 = "Modo Avión";
                $titleH2 = "A volar con imaginación";
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
                <div class="mutanto__pryectos-text-image setup03">
                    <h5 class="mutanto__pryectos-text-margin-right">El juego que propone <strong>Modo Avión </strong> tiene una premisa bastante simple: alcanzar el vuelo. <br><br>
                        El equipo puso a disposición la experiencia adquirida durante la infancia en largas horas de Super Mario y Donkey Kong <strong> para generar una estética 8 bit </strong>. El contexto ideal ✨ <br><br>
                        Con Pau Pazos convertida en avatar como co-protagonista, el juego te atrapa, porque <strong> sigue la misma dinámica que un escape room </strong>, con acertijos y con un nivel de complejidad que va creciendo.
                    </h5>
                    <picture>
                        <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_8_bits-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_8_bits-mobile@2x.png 2x">
                        <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_8_bits.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_8_bits@2x.png 2x">
                        <img src="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_8_bits.png" alt="Collage creativo de stickers relacionados al mundo NFT que también forma parte de uno de los desafíos del juego" title="Collage creativo de stickers con estética 8 bit que forman parte del juego">
                    </picture>
                </div>
            </div>
            <!-- End Div 3  Usando el bocho -->
            <!-- Div 4:  Usando en accion -->
            <div class="mutanto__pryectos div__setup">
                <?php
                //Add title to the section
                $titleH4 = "El proceso creativo";
                $titleH2 = "Y el resultado es:";
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
                <div class="mutanto__pryectos-aloneImagen minMarginTop">
                    <picture>
                        <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_result-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_result-mobile@2x.png 2x">
                        <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_result.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_result@2x.png 2x">
                        <img src="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_result.png" alt="Montaje creativo de capturas de pantalla con los desafíos que propone el juego" title="Capturas de pantalla con algunos de los niveles y acertijos de Modo Avión">
                    </picture>
                </div>
            </div>
            <!-- End Div 4  Bocho en accion -->
            <?php
            //Add title to the section
            $titleH2 = "¿Querés convertir tu proyecto<br>en un gran caso de éxito?";
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