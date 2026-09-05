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
<html lang="es">

<head>
  <?php
  $pageTitle = "Este es el Mutateam ✨";
  $pageDescription = "Trabajamos en equipo para pensar en soluciones digitales que hagan más fácil la vida de las personas";
  $pageKey = "Mutanto,Diseño UX UI,Usabilidad,Agencia de diseño,Creatividad digita";
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
<style>
  @media  (min-width: 1200px) and (max-height: 877px ) {
    .mutanto-services___aboutAs {
      margin-top: 0px !important;
    }
  }
</style>
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
    <!-------  Div 1: Mutateam -->
    <div class="mutanto-services___aboutAs">
      <div class="mutanto-services___title">
        <img src="<?php echo (URL_SITE) ?>img/black-start.svg" alt="star bullet decoration">
        <h5 class="">¿Quiénes somos?</h5>
        <h3>Personas diseñando para las personas</h3>
      </div>
      <div class="mutanto-space___ space02"></div>
      <div class="mutanto-services___BordeFrame_smallTextAboveTitle">
      </div>
      <h1>El fantabuloso</h1>
      <picture>
        <source media="(max-width : 576px)" srcset="<?= (URL_SITE) ?>img/about-us/mutateam-globos-mobile.png 1x, <?= (URL_SITE) ?>img/about-us/mutateam-globoes-mobile@2x.png 2x">
        <source media="(min-width : 577px)" srcset="<?= (URL_SITE) ?>img/about-us/mutateam-globo.png 1x, <?= (URL_SITE) ?>img/about-us/mutateam-globo@2x.png 2x">
        <img src="<?= (URL_SITE) ?>img/about-us/mutateam-globos.png" alt="MutaTeam" title="MutaTeam">
      </picture>
      <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/mutanto_desing-team.php")) ?>
    </div>
    <!-------  End Div 1: Mutateam-->
    <!-------  Div 2: Texto-->
    <div class="mutanto-services__texto">
      <h2>Nos encargamos de que cada rincón del mundillo digital se vuelva mas fácil y bonito, con un mix equilibrado entre pensantes y proyectistas del diseño para lograr satisfacer y mejorar la calidad de las personas.</h2>
    </div>
    <!------- End Div 2: Texto -->
    <!------- Div 3: Equipo-->
    <div class="mutanto-services__equipo">
      <div class="mutanto-services___title">
        <img src="<?php echo (URL_SITE) ?>img/black-start.svg" alt="star bullet decoration">
        <h5 class="">Nuestras caritas</h5>
        <h3>Mente de equipo, SIEMPRE</h3>
      </div>
      <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/aboub-us-staffPics.php")) ?>

      </div>
    </div>
    </div>
    <!------- End Div 3: Staff pics -->
    <!------- Div 4: Somos un equipo-->
    <div class="mutanto-services__somos-equipo" style="margin-top: 180px !important;">
      <div class="mutanto-services___title">
        <img src="<?php echo (URL_SITE) ?>img/black-start.svg" alt="star bullet decoration">
        <h5 class="">Nuestros valores</h5>
        <h3>Somos un equipo...</h3>
      </div>
      <div class="mutanto_element_column">
        <div class="mutanto_element_column-card">
          <picture>
            <source srcset="<?php echo (URL_SITE) ?>img/about-us/mutanto-team-explorer.png 1x, <?php echo (URL_SITE) ?>img/about-us/mutanto-team-explorer@2x.png 2x">
            <img src="<?php echo (URL_SITE) ?>img/about-us/mutanto-team-explorer.png" alt="El Mutaequipo jugando a ser exploradores y exploradoras detrás de una planta, haciendo gestos de investigación" title="Mutanto- equipo explorador" >
          </picture>
          <h3>Explorador</h3>
          <p>¡Curioso por naturaleza, abrazamos el caos de la innovación! Navegamos por mares de datos, desenterramos ideas enterradas y lanzamos experimentos al espacio. ¡Descubrimientos o travesuras, nunca un día aburrido! 😄 🌟</p>
        </div>
        <div class="mutanto_element_column-card">
          <picture>
            <source srcset="<?php echo (URL_SITE) ?>img/about-us/mutanto-team-dynamics.png 1x, <?php echo (URL_SITE) ?>img/about-us/mutanto-team-dynamics@2x.png 2x">
            <img src="<?php echo (URL_SITE) ?>img/about-us/mutanto-team-dynamics.png" alt="Un diseñador parado de manos en la oficina mutantera mientras dos diseñadoras lo sostienen para mostrar fuerza y agilidad" title="Mutanto- equipo dinámico" >
          </picture>
          <h3>Dinámico</h3>
          <p>Giramos ideas a la velocidad del rayo, saltamos obstáculos como campeones olímpicos y transformamos desafíos en oportunidades. ¡Nuestra energía es contagiosa y nuestra agilidad es imparable! 💥🚀</p>
        </div>
        <div class="mutanto_element_column-card">
          <picture>
            <source srcset="<?php echo (URL_SITE) ?>img/about-us/mutanto-transparnet.png 1x, <?php echo (URL_SITE) ?>img/about-us/mutanto-transparnet@2x.png 2x">
            <img src="<?php echo (URL_SITE) ?>img/about-us/mutanto-transparnet.png" alt="El equipo Mutanto algo apretado y haciendo muecas detrás de un vidrio transparente" title="Mutanto- equipo transparente">
          </picture>
          <h3>Transparente</h3>
          <p>Aquí no hay secretos, solo claridad. Compartimos información como confeti, comunicamos como maestros zen y construimos confianza con cada palabra. ¡Nuestra transparencia ilumina el camino hacia el éxito! 🎊 🥹 </p>
        </div>
      </div>
    </div>
    <!------- End Div 4: Somos un equipo-->
    <!------- Div 5: Diseno de Otro mundo-->
  <style>
    .blackTransition {
      background-color: black;
      transition: all 1s;
      color: white;
    }
    .whiteTransition {
      background-color: white;
      transition: all 1s;
      color: black;
    }
  </style>
    <div id="ldl" class="mutanto-services__diseno-de-otro-mundo">
      <div class="mutanto-space___ space50"></div>
      <picture data-scroll data-scroll-repeat data-scroll-offset="50%,50%" data-scroll-call="progressEvent">
        <source media="(max-width : 576px)" srcset="<?php echo (URL_SITE) ?>img/about-us/mutanto-uix-ui-mutateam-collage-mobile.png 1x, <?php echo (URL_SITE) ?>img/about-us/mutanto-uix-ui-mutateam-collage-mobile@2x.png 2x">
        <source media="(min-width : 577px)" srcset="<?php echo (URL_SITE) ?>img/about-us/mutanto-uix-ui-mutateam-collage.png 1x, <?php echo (URL_SITE) ?>img/about-us/mutanto-uix-ui-mutateam-collage@2x.png 2x">
        <img src="<?php echo (URL_SITE) ?>img/about-us/mutanto-uix-ui-mutateam-collage.png"  alt="Composición digital que incluye carios elementos como fotografías del equipo y frases representativas del espíritu Mutanto con el estilo gráfico de la marca" title="Mutanto- Diseño de otro mundo">
      </picture>
    </div>
 
    <!------- End Div 5: Diseno de Otro mundo-->
    <!------- PreEnded-->
    <?php $prefooterText = "¿Querés saber más de <br>nuestro equipo?" ?>
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