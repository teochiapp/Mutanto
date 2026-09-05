<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
$logoColorToShow = "black";
//page Translations
$thisPageLanguages = array(
  "es" => "sobre-nosotros/",
  "en" => "about-us/"
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $pageTitle = "This is the Mutateam";
  $pageDescription = "We work as a team to think of digital solutions that make people's lives easier";
  $pageKey = "Mutanto,UX design,Interface design,Digital creation,Visual design";
  $pageUrl = URL_SITE . $language . "/" . $thisPageLanguages[$language];
  $pageCardDescription = $pageDescription;
  $pageCardImagen = $pageUrl . "mutantoImagenCard.png";
  ?>
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/head.php")) ?>
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>packs/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>packs/owlcarousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/staff-pics.css">
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/columns-cards.css">
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/quienes-somos.css">

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
    <!-------  Div 1: Mutateam -->
    <div class="mutanto-services___aboutAs">
      <div class="mutanto-services___title">
        <img src="<?php echo (URL_SITE) ?>img/black-start.svg" alt="star bullet decoration">
        <h5 class="">Who are we?</h5>
        <h3>People designing for people</h3>
      </div>
      <div class="mutanto-space___ space02"></div>
      <div class="mutanto-services___BordeFrame_smallTextAboveTitle">
      </div>
      <h1>The fantabulous</h1>
      <picture>
        <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>img/about-us/mutateam-globos-mobile.png 1x, <?= (URL_SITE) ?>img/about-us/mutateam-globoes-mobile@2x.png 2x">
        <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>img/about-us/mutateam-globo.png 1x, <?= (URL_SITE) ?>img/about-us/mutateam-globo@2x.png 2x">
        <img src="<?= (URL_SITE) ?>img/about-us/mutateam-globos.png" alt="mutateam" title="mutateam">
      </picture>

      <div class="mutanto-services___start-footer-mobile">
      </div>
      <div class="mutanto-services___start-footer">
        <div class="mutanto-services___start-footer-logo">
          <picture>
            <img src="<?php echo (URL_SITE) ?>img/muntanto-logo-dark-mode-text-uix-ux-web-desing.svg" alt="Mutanto logo" title="Mutanto Logo">
          </picture>
        </div>
        <div class="mutanto-services___startLine"></div>
        <p>DESING TEAM</p>
      </div>
    </div>
    <!-------  End Div 1: Mutateam-->
    <!-------  Div 2: Texto-->
    <div class="mutanto-services__texto">
      <h2>We ensure that every corner of the digital world becomes easier and more beautiful. Our balanced mix of thinkers and design planners works to satisfy and improve people's quality of life.</h2>
    </div>
    <!------- End Div 2: Texto -->
    <!------- Div 3: Equipo-->
    <div class="mutanto-services__equipo">
      <div class="mutanto-services___title">
        <img src="<?php echo (URL_SITE) ?>img/black-start.svg" alt="star bullet decoration">
        <h5 class="">Our little faces</h5>
        <h3>Team mentality, ALWAYS</h3>
      </div>
      <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/aboub-us-staffPics.php")) ?>
    </div>
    </div>
    <!------- End Div 3: Staff pics -->
    <!------- Div 4: Somos un equipo-->
    <div class="mutanto-services__somos-equipo" style="margin-top: 180px !important;">
      <div class="mutanto-services___title">
        <img src="<?php echo (URL_SITE) ?>img/black-start.svg" alt="star bullet decoration">
        <h5 class="">Our values</h5>
        <h3>We are a team...</h3>
      </div>
      <div class="mutanto_element_column">
        <div class="mutanto_element_column-card">
          <picture>
            <source srcset="<?php echo (URL_SITE) ?>img/about-us/mutanto-team-explorer.png 1x, <?php echo (URL_SITE) ?>img/about-us/mutanto-team-explorer@2x.png 2x">
            <img src="<?php echo (URL_SITE) ?>img/about-us/mutanto-team-explorer.png" alt="MutaTeam" title="MutaTeam" alt="The Mutateam playing explorers and researchers behind a plant, making investigative gestures." title="Mutanto- explorer team">
          </picture>
          <h3>Explorer</h3>
          <p>Curious by nature, we embrace the chaos of innovation. We navigate seas of ideas, unleash boundless creativity, and launch experiments into space. Discovery is our mischief, making every day exciting!😄 🌟</p>
        </div>
        <div class="mutanto_element_column-card">
          <picture>
            <source srcset="<?php echo (URL_SITE) ?>img/about-us/mutanto-team-dynamics.png 1x, <?php echo (URL_SITE) ?>img/about-us/mutanto-team-dynamics@2x.png 2x">
            <img src="<?php echo (URL_SITE) ?>img/about-us/mutanto-team-dynamics.png" alt="A designer doing a handstand in the Mutanto office while two designers support him to demonstrate strength and agility." title="Mutant - Dynamic Team">
          </picture>
          <h3>Dynamic</h3>
          <p>There are no secrets here, only clarity. We share information like confetti, communicate like Zen masters, and build trust with every word. Our transparency lays the foundation for success. 💥🚀</p>
        </div>
        <div class="mutanto_element_column-card">
          <picture>
            <source srcset="<?php echo (URL_SITE) ?>img/about-us/mutanto-transparnet.png 1x, <?php echo (URL_SITE) ?>img/about-us/mutanto-transparnet@2x.png 2x">
            <img src="<?php echo (URL_SITE) ?>img/about-us/mutanto-transparnet.png" alt="The Mutant team squeezed together and making faces behind a transparent glass" title="Mutant - Transparent Team">
          </picture>
          <h3>Transparent</h3>
          <p>Here, there are no secrets, only clarity. We handle information with confidence, communicate transparently, and trust with every word. Our transparency lights the path to success. 🎊 🥹 </p>
        </div>
      </div>
    </div>
    <!------- End Div 4: Somos un equipo-->
    <!------- Div 5: Diseno de Otro mundo-->
    <style>
      .blackTransition {
        background-color: black;
        transition: all 1s;
      }

      .whiteTransition {
        background-color: white;
        transition: all 1s;
      }
    </style>
    <div class="mutanto-services__diseno-de-otro-mundo" data-scroll data-scroll-event-progress="progressEvent">
      <div class="mutanto-space___ space50"></div>
      <picture data-scroll data-scroll-repeat data-scroll-offset="50%,50%" data-scroll-call="progressEvent">
        <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>img/about-us/mutanto-uix-ui-mutateam-collage-mobile.png 1x, <?php echo (URL_SITE) ?>img/about-us/mutanto-uix-ui-mutateam-collage-mobile@2x.png 2x">
        <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>img/about-us/mutanto-uix-ui-mutateam-collage.png 1x, <?php echo (URL_SITE) ?>img/about-us/mutanto-uix-ui-mutateam-collage@2x.png 2x">
        <img src="<?php echo (URL_SITE) ?>img/about-us/mutanto-uix-ui-mutateam-collage.png" alt="Digital composition featuring various elements such as team photos and phrases representative of the Mutant spirit in the brand's graphic style." title="Mutant - Design from Another World">
    </div>
    <!------- End Div 5: Diseno de Otro mundo-->
    <!------- PreEnded-->
    <?php $prefooterText = "Do you want to know more about our team?" ?>
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/preended.php")) ?>
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
<script src="<?php echo (URL_SITE) ?>js/about-us.js"></script>

</html>