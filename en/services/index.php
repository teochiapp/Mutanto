<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "black";
  //page Translations
  $thisPageLanguages = array(
    "es" => "servicios/",
    "en" => "services/"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
      $pageTitle = "Mutanto | Our services  🛸";
      $pageDescription = "App design, web design and landing page design. Digital graphic pieces to place brands in the digital world";
      $pageKey = " App design, Landing page,UX,Design services,Web design";
      $pageUrl = URL_SITE.$language."/".$thisPageLanguages[$language];
      $pageCardDescription = $pageDescription;
      $pageCardImagen = $pageUrl."mutantoImagenCard.png";
  ?>
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/head.php")) ?>
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>packs/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>packs/owlcarousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/tab1.css">
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/tab2.css">
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/servicios.css">
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
    <!-------  Div 1: Expenriencas-->
    <div class="mutanto-services___start">
      <div class="mutanto-services___title" style=" margin-bottom: -63px;">
        <img src="<?php echo (URL_SITE) ?>img/black-start.svg">
        <h5 class="">SERVICES</h5>
        <h3>What is our job?</h3>
      </div>
      <div class="mutanto-services___startframe">
        <div class="mutanto-services___BordeFrame">
          <h1 style="margin-top: 25px">We create the</h1>
          <picture>
            <source media="(max-width : 576px)" srcset="<?php echo(URL_SITE) ?>img/services/en-experiencias-globos-mobile.png 1x, <?php echo(URL_SITE) ?>img/services/en-experiencias-globos-mobile@2x.png 2x">
            <source media="(min-width : 577px)" srcset="<?php echo(URL_SITE) ?>img/services/en-experiencias-globos.png 1x, <?php echo(URL_SITE) ?>img/services/en-experiencias-globos@2x.png 2x">
            <img src="<?php echo(URL_SITE) ?>img/services/en-experiencias-globos.png" alt="experiencias" title="experiencias">
          </picture>
          <style>
                @media (max-width : 576px) {
                  .extent {
                    text-align: center;
                    white-space: normal !important;
                  }
                }
          </style>
          <h1 class="extent">that the world is looking for</h1>
        </div>
      </div>
      <p style="text-align: center;position: relative;top: -130px; visibility:hidden">We discover unmet needs, <br>generate concepts and bring ideas to life.</p>
      <style>
        .mutanto-services___start-footer-mobile p {
          display: none;
        }
      </style>
      <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/mutanto_desing-team.php")) ?>
    </div>
    <!-------  End Div 1: Expenriencas-->
    <!-------  Div 2: UIUX-->
    <div class="mutanto-services__uiux">
      <div class="mutanto-services___title">
        <img src="<?php echo (URL_SITE) ?>img/black-start.svg">
        <h5 class="">SERVICES</h5>
        <h3>What is UX/UI design?</h3>
      </div>
      <div class="mutanto-space___ space02"></div>

      <div class="mutanto-services__uiux_two-tabs">
        <!-- Tab #1 -->
        <div class="mutanto__elements-tabOne-structure">
          <div class="mutanto__elements-tabOne">
            <div class="mutanto__elements-tabOne-header">
              <div class="mutanto__elements-tabOne-header-title">
                <h3><strong>UX</strong></h3>
              </div>
              <div id="tab1" class="mutanto__elements-tabOne-header-buttons">
              </div>
            </div>
            <div class="mutanto__elements-tabOne-content">
              <h5 id="uxresearch" class="blancoMuntanto" style="margin: 0px;">
                <mark>An intuitive interface</mark> makes people's lives easier, which is ultimately what interests us. Interviews, surveys, and anything that helps us understand what people need is valuable to us.
                <br><br>
                <mark>The first step to solving a problem</mark> is asking yourself the right question. But how do we fully understand the problem? That's the key question.
                <span class="brSpace"><br><br></span>
              </h5>
            </div>
          </div>
        </div>
        <!-- End Tab #1 -->
        <!-- Tab #2 -->
        <div class="mutanto__elements-tabOne-structure">
          <div class="mutanto__elements-tabOne">
            <div class=" mutanto__elements-tabOne-header">
            <div class="mutanto__elements-tabOne-header-title">
              <h3><strong>UI</strong></h3>
            </div>
            <div id="tab2" class="mutanto__elements-tabOne-header-buttons">
            </div>
          </div>
          <div class="mutanto__elements-tabOne-content">
            <h5 id="uxresearch" class="blancoMuntanto" style="margin: 0px;">
            As we get to know the problem better, the magic happens. And the Mutateam graduated from Hogwarts.<br><br>
              <mark>Why? Because we are experts in visual design</mark>, you damn muggle. By experts, we mean *obsessed with perfection and attention to detail to levels that are sometimes off the charts. We are not just a pretty UI.<br><br> We also know how to make an interface simple, easy to use, and intuitive. As Jobs said, &quot;Design is not just what it looks like and feels like. Design is how it works&quot;.
            </h5>
          </div>
        </div>
      </div>
      <!-- End Tab #2 -->
    </div>
    </div>
    <!------- End Div 2: UIUX-->
    <!------- Div 3: Servicios UX/Ui-->
    <div class="mutanto-services__servicios-uiux">
      <div class="mutanto-services___title">
        <img src="<?php echo (URL_SITE) ?>img/black-start.svg">
        <h3>Digital Design Services</h3>
      </div>
      <div class="mutanto-space___ space42"></div>
      <!-- Black Line -->
      <div class="mutanto__elements-blackLine"></div>
      <div class="mutanto-services__servicios-uiux-tab2">
        <!-- Tab #2 -->
        <div id="tab2_uiuxservices" class="mutanto__elements-tabTwo-structure">
          <div class="mutanto__elements-tabTwo">
            <div class="mutanto__elements-tabTwo-header">

              <div id="mutanto__elements-tabTwo-header-buttons_slider" class="mutanto__elements-tabTwo-header-buttons owl-carousel  owl-theme">
                <span btnaction="appdesing" class="selected">App Design</span>
                <span btnaction="webdesing" class="available">Web Design</span>
                <span btnaction="landingpage" class="available">Landing page</span>
                <span btnaction="mpv" class="available">MVP</span>
              </div>

            </div>

            <div class="mutanto__elements-tabTwo-content">
              <div id="appdesing" class="mutanto__elements-tabTwo-content-set">
                <div class="mutanto__elements-tabTwo-content-left">
                  <h5>We create the ideal flow, screens, and components to make everyone love your app. <br> We investigate, identify problems, and solve them with quality solutions.</h5>
                </div>
                <div class="mutanto__elements-tabTwo-content-right">
                <picture>
                  <source media="(max-width : 576px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_app_desing-mobil.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_app_desing-mobil@2x.png 2x">
                  <source media="(min-width : 577px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_app_desing.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_app_desing@2x.png 2x">
                  <img src="<?php echo(URL_SITE) ?>mg/services/mutanto_uix_ui_app_desing.png" alt="App Design" title="App Design">
                </picture>
                </div>
              </div>
              <div id="webdesing" class="mutanto__elements-tabTwo-content-set">
                <div class="mutanto__elements-tabTwo-content-left">
                  <h5>
                    We create sites suited to trends and your business needs. Modern, elegant, and easy to use.<br>
                    We not only create new websites but also redesign outdated ones or those needing a revamp.</h5>
                </div>
                <div class="mutanto__elements-tabTwo-content-right">
                <picture>
                  <source media="(max-width : 576px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_web_desing-mobil.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_web_desing-mobil@2x.png 2x">
                  <source media="(min-width : 577px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_web_desing.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_web_desing@2x.png 2x">
                  <img src="<?php echo(URL_SITE) ?>mg/services/mutanto_uix_ui_app_desing.png" alt="Web Desing" title="Web Desing">
                </picture>
                </div>
              </div>
              <div id="landingpage" class="mutanto__elements-tabTwo-content-set">
                <div class="mutanto__elements-tabTwo-content-left">
                  <h5>The first impression is the most important. <br>
                  We create impactful sites and pages designed to be remembered.</h5>
                </div>
                <div class="mutanto__elements-tabTwo-content-right">
                <picture>
                  <source media="(max-width : 576px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_landing_page-mobil.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_landing_page-mobil@2x.png 2x">
                  <source media="(min-width : 577px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_landing_page.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_landing_page@2x.png 2x">
                  <img src="<?php echo(URL_SITE) ?>mg/services/mutanto_uix_ui_app_desing.png" alt="Landing Page" title="Landing Page">
                </picture>
                </div>
              </div>
              <div id="mpv" class="mutanto__elements-tabTwo-content-set">
                <div class="mutanto__elements-tabTwo-content-left">
                  <h5>Let's bring your ideas to life. We have experience executing concepts from scratch and we love it! <br>
                  We design the app and prepare it so you can validate your idea and successfully enter the market. And yes, sometimes mistakes happen. Better to make them efficiently and sustainably</h5>
                </div>
                <div class="mutanto__elements-tabTwo-content-right">
                <picture>
                  <source media="(max-width : 576px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_mvp-mobil.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_mvp-mobil@2x.png 2x">
                  <source media="(min-width : 577px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_mvp.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_mvp@2x.png 2x">
                  <img src="<?php echo(URL_SITE) ?>mg/services/mutanto_uix_ui_app_desing.png" alt="MVP" title="MVP">
                </picture>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!------- End Div 3: Servicios UX/Ui-->
    <!------- Div 4: Servicios Digitales-->
    <div class="mutanto-services__servicios-digitales">
      <div class="mutanto-services___title">
        <img src="<?php echo (URL_SITE) ?>img/black-start.svg">
        <h3>Integrated Branding & Marketing Design</h3>
      </div>
      <div class="mutanto-space___ space42"></div>
      <!-- Black Line -->
      <div class="mutanto__elements-blackLine"></div>
      <div class="mutanto-services__servicios-digitales-uiux-tab2">
        <!-- Tab #2 -->
        <div id="tab2_digitalServices" class="mutanto__elements-tabTwo-structure">
          <div class="mutanto__elements-tabTwo">
            <div class="mutanto__elements-tabTwo-header">
              <div class="mutanto__elements-tabTwo-header-buttons" style="margin-top: 24px;margin-bottom: 17px;padding-left: 5vw;padding-right: 5vw;">
                <span btnaction="branding" class="selected"  title="Branding" alt="Branding">Branding</span>
                <span btnaction="grafica" class="available" title="Graphic design" alt="Graphic design">Graphic design</span>
              </div>
            </div>
            <div class="mutanto__elements-tabTwo-content">
              <div id="branding" class="mutanto__elements-tabTwo-content-set">
                <div class="mutanto__elements-tabTwo-content-left">
                  <h5>To position your brand, you need a solid digital identity. <br><br> We create logos, brand manuals, and complete corporate images that not only distinguish you from your competition but also seamlessly integrate with your marketing team's decisions, empowering them with the visual tools they need to succeed.</h5>
                </div>
                <div class="mutanto__elements-tabTwo-content-right">
                <picture>
                  <source media="(max-width : 576px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_branding-mobil.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_branding-mobil@2x.png 2x">
                  <source media="(min-width : 577px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_branding.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_branding@2x.png 2x">
                  <img src="<?php echo(URL_SITE) ?>mg/services/mutanto_uix_ui_app_desing.png" alt="Branding" title="Branding">
                </picture>
                </div>
              </div>
              <div id="grafica" class="mutanto__elements-tabTwo-content-set">
                <div class="mutanto__elements-tabTwo-content-left">
                  <h5>A brief is all we need to design the digital pieces you’re looking for.<br><br>
                  Social media posts, icons, presentations, and more. <br>
                  Flyers, web banners, social media covers, digital brochures, and everything that strengthens your presence in the digital world.</h5>
                </div>
                <div class="mutanto__elements-tabTwo-content-right">
                <picture>
                  <source media="(max-width : 576px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_servicios-graficos-mobil.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_servicios-graficos-mobil@2x.png 2x">
                  <source media="(min-width : 577px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_servicios-graficos.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_servicios-graficos@2x.png 2x">
                  <img src="<?php echo(URL_SITE) ?>mg/services/mutanto_uix_ui_servicios-graficos.png" alt="Branding" title="Graphic design" alt="Graphic design">
                </picture>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!------- End Div 4: Servicios UX/Ui-->
    <!------- Div 5: Tu idea al siguiente nivel-->
    <div class="animated-figure div5">
      <img src="<?php echo (URL_SITE) ?>img/mutanto-ovni-svg.svg"  alt="Mutanto OVNI (animation)">
    </div>
    <div class="mutanto-services__tuIdeaLa">
      <h2 style="font-weight: 600;line-height: 134.5%;text-align: center;"> Do you want to take your idea<br> to the next level?</h2>
      <div class="mutanto__elements-button-with-bgLine">
      <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/element_button_charlemos.php")) ?>
      </div>
    </div>
    <!------- End Div 5: Tu idea al siguiente nivel-->

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
<script src="<?php echo (URL_SITE) ?>js/services.js"></script>
</html>