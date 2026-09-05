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
<html lang="es">

<head>
    <?php
    $pageTitle = "Proyectos  | Cref";
    $pageDescription = "Creamos el logo y la identidad visual para una marca pastelera";
    $pageKey = "Mutanto,Proyectos,Cref,Logo,Identidad de marca";
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
                <h2>Una marca única para sabores únicos</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon.png 1x, <?php echo (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon" width="102" height="102" title="Cref Logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon_imagen_header-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon_imagen_header-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon_imagen_header.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon_imagen_header@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_icon_imagen_header.png" alt="Bolsa de galletas de la marca Cref y una variante del logo" title="Bolsa de galletas Cref">
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
                                    Cref es un negocio de postres que destaca en Riyadh por sus originales y tan, pero tan ricas y sabrosas cookies. No exgeramos. Su producto es genial y la marca debía acompáñarlo.
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
                        <h4>¿Qué está haciendo Cref?</h4>
                        <p>Entrá al perfil de Instagram de Cref y descubrí cómo la <br>marca aplica el logo en el desarrollo de su identidad gráfica.<br> Ojo, entrá bajo tu propia responsabilidad: hay un montón de cosas ricas 😋</p>
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
            $titleH4 = "Ni más ni menos";
            $titleH2 = "La mezcla justa";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <style>
                .setup1 {
                    justify-content: center !important;
                }
            </style>
            <div class="mutanto__pryectos-text-image setup1">
                <h5 class="mutanto__pryectos-text-margin-right">
                    <p>Con las cantidades no se jode. No sabemos si es esa la manera en que lo dicen los profesionales, pero sí sabemos que las proporciones en pastelería son cosa seria.<br>
                        <br>
                        En Mutanto tomamos esto al pie de la letra. Para crear un logo como este, usted necesitará:
                    </p>
                    <ul>
                        <li>3 cucharadas de trabajo en equipo</li>
                        <li>Una pizca de criterio visual y estético (del bueno, por favor)</li>
                        <li>5 grandes porciones de imaginación mezcladas con creatividad.</li>
                    </ul>
                </h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_logos-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_logos-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_logos.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_logos@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_logos.png" alt="Variantes y usos del imagotipo sobre distintos fondos con colores e imágenes" title="Usos del logo sobre distintos fondos">
                </picture>
            </div>
        </div>
        <!-- End Div 2: Inclusión y autonomía -->
        <!-- Cuotes  -->
        <?php
        $quoteText = "Reconstruí mi marca con Mutanto, fueron increíbles y profesionales. El equipo fue muy amable y paciente conmigo ya que seguía pidiendo más cambios 😅Cuando hicieron los diseños superaron mis expectativas. Incluso se los recomendé a mis amigos. ¡Honestamente me sorprendió su inteligencia y creatividad!";
        $quoteAuthor = "Sara Alswailem";
        $quotePosition = "Co-Fundadora de Cref";
        include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"))
        ?>
        <!-- End Cuotes  -->
        <!-- Div 3:  Usando el bocho -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "el background que necesitamos";
            $titleH2 = "Una actividad milenaria";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_box-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_box-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_box.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_box@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_cref_box.png" alt="Caja de galletas hecha de cartón con la identidad de Cref que creó Mutanto" title="Caja de galletas de Cref">
                </picture>

                <h5 class="mutanto__pryectos-text-margin-left">
                    Hacer un logo para una marca que vende galletas y postres parece fácil. Pero no, no lo es. <strong>La creacíón de la galleta fue casi un hito en la historia de la humanidad</strong>, permitió fabricar y transportar alimento de manera superfácil. <br>
                    <br>
                    Después de años y años de evolución, llegaron las bien buscadas y requeridas preparaciones de <strong>Cref</strong>.<br>
                    <br>
                    ¿Cómo podemos simbolizar en un logo ese proceso de creación y evolución de un alimento?
                </h5>
            </div>
        </div>
        <!-- End Div 3  Usando el bocho -->
        <!-- Div 4:  Usando en accion -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "por dónde empezamos";
            $titleH2 = "A crear, revolver y (de)batir";
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
                    Para empezar la preparación haga como el Mutaequipo y antes de comenzar con todo, preocúpese por tener todo ordenado.<br>
                    <br>
                    Para la creación de un logo como el de Cref es fundamental tener ordenada toooda la información alrededor de la marca.
                    <br>
                    <br>
                    De esa manera llegamos a <strong>un concepto fácil de recordar y representativo de Cref</strong>.
                </h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_concept-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_concept-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_concept.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_concept@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_concept.png" alt="Letras, utensilios y elementos representativos del proceso de creación del logotipo" title="Síntesis del proceso de creación del logo">
                </picture>

            </div>
        </div>
        <!-- End Div 4  Bocho en accion -->
        <!-- Div 5:  Usando en accion -->
        <div class="mutanto__pryectos div__setup">
            <?php
            //Add title to the section
            $titleH4 = "hasta que tome consistencia";
            $titleH2 = "El resultado final";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text">
                <h5>Una vez que mezclamos y procesamos todos los ingredientes tenemos que llegar a una pieza como esta: simple y ajustada a las necesidades de la marca. En este caso tomamos los elementos más importantes del rubro y los condensamos en un logo que reflejara las actividades y los utensilios propoios de la pastelería.
                </h5>
            </div>
            <div class="mutanto__pryectos-aloneImagen minMarginTop">
            <picture>
                <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_products-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_products-mobile@2x.png 2x">
                <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_products.png 1x, <?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_products@2x.png 2x">
                <img src="<?= (URL_SITE) ?>es/proyectos/cref/mutanto_ui_ux_brand_identity_logotype_visual_desing_brandbook_products.png" alt="Productos comerciales y corporativos con la identidad de marca aplicada" title="Identidad de marca aplicada a casos y escenas reales">
            </picture>
        </div>
        </div>
        <!-- End Div 5  Bocho en accion -->
        <?php
        //Add title to the section
        $titleH2 = "¿Querés convertir tu proyecto <br> en un gran caso de éxito?";
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