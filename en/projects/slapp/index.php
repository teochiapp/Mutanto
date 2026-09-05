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
<html lang="en">

<head>
    <?php
    $pageTitle = "Projects | Slapp";
    $pageDescription = "We redesigned the interface of an app for analyzing social media metrics";
    $pageKey = " Mutanto,Projects,Slapp,App Design,User centered design";
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
                <h2>Slapp: more data for decision-making</h2>
                <picture>
                    <source srcset="<?php echo (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon.png 1x, <?php echo (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon@2x.png 2x">
                    <img src="<?php echo (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon.png" width="102" height="102" alt="Slapp logo" title="Slapp logo">
                </picture>
            </div>
            <div class="mutanto__pryectos-header-imagen">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon_imagen_header-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon_imagen_header-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon_imagen_header.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon_imagen_header@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_icon_imagen_header.png" alt="Creative collage of Slapp's registration screen and the tips provided by the web app" title="Slapp's registration screen">
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
                                <span class="verdeMutanto">3 Months</span>
                            </div>
                        </div>
                        <style>
                </style> 
                        <div class="mutanto__elements-cliente-row">
                            <div class="mutanto__elements-cliente-tags">
                                <span>Visual design</span>
                                <span>Figma</span>
                                <span>Websites</span>
                            </div>
                            <div class="mutanto__elements-cliente-description">
                                <h5 class="blancoMuntanto">
                                We redesigned Slapp, a freemium app that enables social media analysis. What sets it apart? Gamification, a friendly language, and actionables: practical tips to boost metrics.
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
                        <h4>We ask for your patience</h4>
                        <p>Slapp project is still in the development phase, which is why we can't show you how the design is adapted to the final result. Buuut, you can find out more on their Instagram profile. Here's the link:</p>
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
            $titleH4 = " Data visualization"; 
            $titleH2 = "First analyze, then publish";
            include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
            ?>
            <div class="mutanto__pryectos-text-image setup03">
                <h5>
                In the world of social media, <strong>metrics rule</strong>. It's a task that demands in-depth analysis of all the numbers on an Instagram or Facebook account: average view time, link clicks, engagement, new followers, likes, and much more.
                And <strong>since every data point matters</strong>, it's crucial to have a comprehensive understanding of all of them.<br><br>
                Coupled with a clean and minimalist interface, <strong> we focus on designing dashboards that provide clear and detailed data</strong> in a user-friendly manner.</h5>
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_metrics-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_metrics-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_metrics.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_metrics@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_metrics.png" alt="Dashboard screenshot on the main page of Slapp" title="Main dashboard of Slapp home">
                </picture>
            </div>
            </div>
            <!-- End Div 2: Inclusión y autonomía -->
            <!-- Div 3:  Usando el bocho -->
            <div class="mutanto__pryectos div__setup">
                <?php
                //Add title to the section
                $titleH4 = "Gamification";
                $titleH2 = "Slapp score";
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
                <div class="mutanto__pryectos-text-image">
                <h5 class="mutanto__pryectos-text-margin-right">Slapp<strong> scores profiles for each account through benchmark metrics</strong>, helping individuals determine whether their profile performance was optimal, average, or in need of improvement.<br><br>
                To achieve this,<strong> it introduces a game where users strive to reach goals </strong> to accumulate points. Based on their score, they receive practical tips and advice that could assist in enhancing their community metrics.
                </h5>
                    <picture>
                        <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_gamification-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_gamification-mobile@2x.png 2x">
                        <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_gamification.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_gamification@2x.png 2x">
                        <img src="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_gamification.png" alt="Screenshots of cards containing tips to enhance performance on social media" title="Cards with tips to improve your &quot;Slapp Score&quot;.">
                    </picture>

           
                </div>
            </div>
            <!-- End Div 3  Usando el bocho -->
            <!-- Div 4:  Usando en accion -->
            <div class="mutanto__pryectos div__setup">
                <?php
                //Add title to the section
                $titleH4 = "The task of Mutanto";
                $titleH2 = "Research for design";
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
                <div class="mutanto__pryectos-text-image">
                    <picture>
                        <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_research-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_research-mobile@2x.png 2x">
                        <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_research.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_research@2x.png 2x">
                        <img src="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_research.png" alt="Creative collage of Slapp screens depicting the login interface on a laptop and a dashboard showcasing optimal posting times" title="Inicio de sesión y mejor horario para publicar.">
                    </picture>
                    <h5 class="mutanto__pryectos-text-margin-left">Firstly, <strong> we created archetypes</strong> and defined the essential elements of the experience.<br><br>
                    Then <strong>we conducted interviews to identify patterns in user </strong> needs and translated them into on-screen solutions. <br><br>
                    In this way,<strong>  we organized and prioritized information</strong>  into cards and panels based on the importance users placed on that information.<br><br>
                    What was the most challenging part? Making it simple. Restructuring the cards and panels into a cleaner view meant losing information. Our task was to understand how much of that information was necessary for users and why.<br><br>
                    </h5>
                </div>
            </div>
            <!-- End Div 4  Bocho en accion -->
            <!-- Div 5:  Usando en accion -->
            <div class="mutanto__pryectos div__setup">
                <?php
                //Add title to the section
                $titleH4 = "Slapp in operation";
                $titleH2 = "The ally of entrepreneurs and Community Managers"; 
                include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/proyect__title.php"))
                ?>
                <div class="mutanto__pryectos-text">
                    <h5>The differentiating value of Slapp lies in its ability to provide detailed information and, simultaneously, potential solutions. This is the space for <strong> actionable insights, useful and practical tips</strong> to leverage metrics on any platform.<br><br>
                    <strong>Slapp not only offers information but also assists individuals in processing it and taking action based on that data. </strong>. That's why the interface design responds not only to a concept of beautiful analysis and dashboards but also to an idea of gamification with educational purposes.
                    </h5>
                </div>
                <div class="mutanto__pryectos-aloneImagen  minMarginTop">
                <picture>
                    <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_cms-mobile.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_cms-mobile@2x.png 2x">
                    <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_cms.png 1x, <?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_cms@2x.png 2x">
                    <img src="<?= (URL_SITE) ?>es/proyectos/slapp/mutanto_ui_ux_app_desing_user_centered_desing_slapp_cms.png" alt=""Creative montage of various screens that make up the Slapp user experience, featuring dashboards, comparative charts, and a score." title="Screens from the Slapp experience showcasing graphics and informative elements related to the account.">
                </picture>
            </div>
            </div>
            <!-- End Div 5  Bocho en accion -->
            <?php
            //Add title to the section
            $titleH2 = "Do you want to know more about this project?";
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