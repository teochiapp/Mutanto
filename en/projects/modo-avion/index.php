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
<html lang="en">

<head>
    <?php
    $pageTitle = "Projects | Modo Avión";
    $pageDescription = "We designed the interface for an online game as part of a promotional campaign for a single";
    $pageKey = "Mutanto,Projects,Modo Avión,Game Design,Storytelling";
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
                <h2>Modo Avión: design for entertainment</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon.png 1x, <?php echo (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon.png" width="102" height="102" alt="Modo Avion icon" title="Modo Avion icon">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon_imagen_header-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon_imagen_header-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon_imagen_header.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon_imagen_header@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_icon_imagen_header.png" alt="Game start screen with a 90s 8-bit aesthetic featuring a caricatured Pau Pazos as a co-protagonist" title="Home Screen of Modo Avión">
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
                                <span class="verdeMutanto">2 Months</span>
                            </div>
                        </div>
                        <div class="mutanto__elements-cliente-row">
                            <div class="mutanto__elements-cliente-tags">
                                <span>Visual design</span>
                                <span>Game Design</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">
                                We put our (literal) game skills to the test in creating an epic storyline. What happens if you win? You get Paula Pazos' NFT song. So, the Mutanto team did what they do best: engage people in super fun experiences.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <style>
                        @media (max-width: 1443px) and (min-width: 993px) {
                            .mutanto__elements-cliente-goToWebSite button {
                                top: -8px;
                             }
                        }
                    </style>
                    <!-- Client Go to website -->                    
                    <div class="mutanto__elements-cliente-goToWebSite">
                        <h4>Discover the artist!</h4>
                        <p>Learn more about the creative mind behind Modo Avión (Airplane Mode). Explore her work, inspirations, and artistic journey.</p>
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
            $titleH4 = "Beyond the interface";
            $titleH2 = "Once upon a time…";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"));
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
            Everyone <strong>loves stories. It's our way of understanding the world. </strong> And gamification, in part, is about putting users at the forefront of any story.<br><br>
            To achieve this, it's essential to understand the fundamental ingredients of any narrative—a protagonist, a problem, and an objective. An irresistible formula for anyone.<br><br>
            The Mutateam's challenge was to <strong>align with a creative communication campaign through an interface </strong> capable of  <strong> entertaining, retaining, and motivating </strong>  users to listen to “<a href="https://www.paulapazos.com" target="_new">Modo Avión</a>”, by Paula Pazos.
            </h5>
            <a href="https://www.paulapazos.com" target="_new" alt="Modo Avión cover featuring a tablet with the main game screen against a backdrop of a sky with clouds and an 8-bit aesthetic" title="Cover Art of Modo Avión, Available on spotify">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_once_pone_time-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_once_pone_time-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_once_pone_time.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_once_pone_time@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_once_pone_time.png" alt="Modo Avión cover featuring a tablet with the main game screen against a backdrop of a sky with clouds and an 8-bit aesthetic" title="Cover Art of Modo Avión, Available on spotify">
                </picture>
            </a>
            </div>
            </div>
            <!-- End Div 2: Inclusión y autonomía -->
                    <!-- Cuotes  -->
                    <?php 
            $quoteText = "Working with Mutanto is always an excellent experience. Initially, I met the team while looking for UX/UI specialists to collaborate on projects with my clients. In 2022 they came on board to lead the design of my project \"Modo Avión\", a virtual escape game created in Unity. What I value most about Mutanto is their ability to listen and understand my goals and specific needs for each project, their creativity, commitment and dedication.";
            $quoteAuthor = "Paula Pazos";
            $quotePosition = "Creator, Modo avión";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/quotes.php"));
        ?>
        <!-- End Cuotes  -->
            <!-- Div 3:  Usando el bocho -->
            <div class="mutanto__pryectos div__setup"> 
                <?php
                //Add title to the section
                $titleH4 = "Modo Avión";
                $titleH2 = "To fly with imagination";
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
                <div class="mutanto__pryectos-text-image setup03">
                <h5 class="mutanto__pryectos-text-margin-right">The game proposed by <strong>Modo Avión</strong> has a rather simple premise: achieve flight.<br><br>
                The team leveraged their childhood experiences with long hours of Super Mario and Donkey Kong to <strong>create an 8-bit aesthetic</strong>. The ideal context ✨ <br><br>
                With Pau Pazos transformed into an avatar as a co-protagonist, the game captivates you because it<strong> follows the same dynamics as an escape room</strong>, with puzzles and a level of complexity that increases.
                </h5>
                    <picture>
                        <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_8_bits-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_8_bits-mobile@2x.png 2x">
                        <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_8_bits.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_8_bits@2x.png 2x">
                        <img src="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_8_bits.png" alt="Creative collage of NFT-themed stickers, also part of one of the game challenges" title="Creative collage of 8-bit aesthetic stickers that are part of the game.">
                    </picture>
                </div>
            </div>
            <!-- End Div 3  Usando el bocho -->
            <!-- Div 4:  Usando en accion -->
            <div class="mutanto__pryectos div__setup">
                <?php
                //Add title to the section
                $titleH4 = "The creative process";
                $titleH2 = "And this is the final result";
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
            <div class="mutanto__pryectos-aloneImagen minMarginTop">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_result-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_result-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_result.png 1x, <?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_result@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/modo-avion/mutanto_ui_ux_game_desing_modo_avion_result.png" alt="Creative montage of screenshots featuring the challenges proposed by the game" title="Screenshots showcasing some of the levels and puzzles in 'Modo Avión.">
                </picture>
            </div>
            </div>
            <!-- End Div 4  Bocho en accion -->
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