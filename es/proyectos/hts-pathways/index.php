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
    $pageTitle = "Proyectos  | HST Pathways";
    $pageDescription = "Diseñamos landing pages y productos digitales para Heuristic, una compañía dedicada al rubro de la salud";
    $pageKey = "Mutanto,Proyectos,HST Pathways,Web design,Salud";
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
                <h2>La gestión en salud también se diseña</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon.png 1x, <?php echo (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon.png" width="102" height="102" alt="HST Pathways logo" title="HST Pathways logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon_imagen_header-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon_imagen_header-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon_imagen_header.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon_imagen_header@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_icon_imagen_header.png" alt="Collage creativo que incluye una persona del rubro salud trabajando en su computadora con capturas de los productos de HST como fondo" title="Capturas de pantalla del trabajo de Mutanto para HST">
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
                                <span>Visual design</span>
                                <span>Landing Page</span>
                                <span>Graphic design</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">
                                    HST Pathways brinda soluciones de software a empresas y profesionales del rubro de la salud. A través de múltiples productos digitales, esta compañía busca hacer más eficiente y agradable la experiencia para especialistas, administrativos y pacientes.
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
            $titleH4 = "Digitalizar los procesos";
            $titleH2 = "Salud 3.0 ";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <style>
                .setup03 {
                    align-items: center;
                    justify-content: center;
                }
            </style>
            <div class="mutanto__pryectos-text-image setup03">
                <h5 class="mutanto__pryectos-text-margin-right">
                    <strong>La gestión de la salud es cosa seria </strong>. Turnos, historias clínicas, registros, pagos… Son varios los factores que intervienen en esa dimensión más “burocrática” cada vez que tenemos que ir al médico.<br><br>
                    Casi siempre, todo se puede hacer más simple. Es por esto que <strong> Mutanto se convirtió en un aliado estratégico de HST Pathways </strong>, con la misión de proveer interfaces y estructuras alineadas tanto a las necesidades del sector como a las expectativas del equipo HST.<br><br>
                    ¿Cuál es la demanda puntual de HST? Presentar sus productos a la comunidad médica de manera correcta y en un lenguaje acorde al sector.
                </h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_healt-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_healt-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_healt.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_healt@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_healt.png" alt="Mockup de una carátula diseñada para HST aplicada a una laptop con un fondo abstracto que incluye líneas curvas" title="Mockup de Mutanto para HST">
                </picture>
            </div>
        </div>
        <!-- End Div 2: Inclusión y autonomía -->

        <!-- Cuotes  -->
        <?php
    $quoteText = "He tenido el placer de trabajar con Mutanto durante más de un año y no puedo recomendarlos lo suficiente. Anteriormente, nuestra empresa tenía un diseñador interno a tiempo completo y, al principio, estaba nervioso por la posibilidad de subcontratar a una agencia. Sin embargo, Mutanto ha sido un socio de ensueño. Son rápidos y receptivos y crean hermosos diseños. Siempre me impresiona cómo pueden cumplir con nuestras pautas de marca, pero nada parece redundante o predecible. Nunca dicen que no a cualquier proyecto que les pedimos y están tan interesados ​​en los resultados como nosotros. ¡Estoy muy agradecido por su asociación!";
        $quoteAuthor = "Erica Palmer";
        $quotePosition = "SR. Content Marketing Manager, HST Pathways";
        include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
        <!-- Div 3:  Usando el bocho -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "El rol del equipo";
            $titleH2 = "¿Qué me recomienda, Doctor Mutanto?";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_dr_mutanto-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_dr_mutanto-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_dr_mutanto.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_dr_mutanto@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_dr_mutanto.png" alt="Montaje creativo en formato cuadrícula con capturas de productos de diseño gráfico y digital realizados por Mutanto para HST" title="Flyer, posters y piezas de diseño digital de HST Pathways">
                </picture>
                <h5 class="mutanto__pryectos-text-margin-left">Trabajamos en varias de las piezas digitales que saca a la cancha <strong> HST</strong>, desde el diseño para campañas de e-mail marketing y piezas de difusión hasta landing pages y product pages.<br><br>
                    Diseñamos para <strong> potenciar la llegada y la imagen de la marca </strong> con pantallas que priorizan un contenido informativo y, sobre todo, útil.
                </h5>

            </div>
        </div>
        <!-- End Div 3  Usando el bocho -->
        <!-- Div 4:  Usando en accion -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "Versátiles y adaptables";
            $titleH2 = "Vamos hacia soluciones integrales";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <h5 class="mutanto__pryectos-text-margin-right">Destacamos <strong> nuestra colaboración con HST Pathways porque nos muestra versátiles y adaptables </strong> . El estilo visual del sector salud no es… digamos… tan rebelde y divertido como puede llegar a ser el estilo gráfico mutantero. <br><br>
                    Podemos adaptarnos a este y a muchos otros contextos porque <strong> sabemos que diseñar es comunicar y que hay un montón de circunstancias que debemos tener en cuenta </strong> .<br><br>
                    Es por esa misma razón es que algunos clientes <strong> nos eligen para que les brindemos un servicio global, pensando en lo macro </strong> e integrando el trabajo de Mutanto en la estrategia de la empresa.
                </h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_solution-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_solution-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_solution.png 1x, <?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_solution@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/hts-pathways/mutanto_ui_ux_visual_desing_graphics_desing_landing_page_hts_pathways_solution.png" alt="Montaje creativo de piezas como presentaciones y páginas de producto aplicado a varios dispositivos en una estética 3D" title="Piezas digitales de diseño para HST aplicadas en diversos dispositivos">
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