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
<html lang="es">
<head>
  <?php 
      $pageTitle = "Mutanto | Nuestros servicios 🛸";
      $pageDescription = "Diseño de apps, diseño web y de landing pages. Piezas gráficas digitales para posicionar marcas en el mundo digital";
      $pageKey = "Diseño de apps,Landing page,UX,UI,Servicios de diseño,Diseño en Córdoba";
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
<style>

  

    @media  (min-width: 1200px) and (max-height: 877px ) {
    .mutanto-services___start {
      margin-top: 13vh !important;
    }
    .mutanto-services___start-scale-support {
        margin-top: 0vh !important;
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
    <!-------  Div 1: Expenriencas-->
    <div class="mutanto-services___start">
      <div class="mutanto-services___title" style=" margin-bottom: -63px;">
        <img src="<?php echo (URL_SITE) ?>img/black-start.svg">
        <h5 class="">SERVICIOS</h5>
        <h3>¿Cuál es nuestro trabajo?</h3>
      </div>
      <div class="mutanto-services___startframe">
        <div class="mutanto-services___BordeFrame">
          <h1 style="margin-top: 25px">Traemos las </h1>
          <picture>
            <source media="(max-width : 576px)" srcset="<?php echo(URL_SITE) ?>img/services/experiencias-globos-mobile.png 1x, <?php echo(URL_SITE) ?>img/services/experiencias-globos-mobile@2x.png 2x">
            <source media="(min-width : 577px)" srcset="<?php echo(URL_SITE) ?>img/services/experiencias-globos.png 1x, <?php echo(URL_SITE) ?>img/services/experiencias-globos@2x.png 2x">
            <img src="<?php echo(URL_SITE) ?>img/services/experiencias-globos.png" alt="experiencias" title="experiencias">
          </picture>
          <style>
                @media (max-width : 576px) {
                  .extent {
                    text-align: center;
                    white-space: normal !important;
                  }
                }
          </style>
          <h1 class="extent">que el mundo busca</h1>
        </div>
      </div>
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
        <h5 class="">SERVICIOS</h5>
        <h3>¿Qué es diseño UX/UI?</h3>
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
                ¿Cómo se hace un producto digital zarpado que la gente ame usar?<br>
                <mark>Una interfaz intuitiva</mark> hace más fácil la vida de las personas, que en definitiva, es lo que nos interesa.
                Entrevistas, encuestas y cualquier cosa que sirva para entender qué necesitan las personas nos viene bien.<br>
                Porque el <mark>paso para resolver un problema</mark> es hacerse la pregunta correcta. Entender a fondo el problema, esa es la cuestión.
                <span class="brSpace"><br><br><br><br><br><br></span>
              </h5>
            </div>
          </div>
        </div>
        <!-- End Tab #1 -->
        <!-- Tab #2 -->
        <div class="mutanto__elements-tabOne-structure">
          <div class="mutanto__elements-tabOne"">
            <div class=" mutanto__elements-tabOne-header">
            <div class="mutanto__elements-tabOne-header-title">
              <h3><strong>UI</strong></h3>
            </div>
            <div id="tab2" class="mutanto__elements-tabOne-header-buttons">
            </div>
          </div>
          <div class="mutanto__elements-tabOne-content">
            <h5 id="uxresearch" class="blancoMuntanto" style="margin: 0px;">
              A medida que vamos conociendo mejor el problema viene la magia. Y acá el Mutaequipo se graduó de Hogwarts.<br>
              <mark>¿Por qué? Porque somos especialistas en diseño visual</mark>, maldito muggle. Y con especialistas queremos decir *obsesionados con la perfección y el detalle a niveles que a veces dan miedo*.
              Guarda, que no solo somos una UI bonita. También sabemos cómo hacer que esa interfaz sea sencilla, fácil de usar e intuitiva. Ya lo dijo Jobs, no solo es cómo se ve: es cómo funciona.
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
        <h3>Servicios UX/UI</h3>
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
                  <h5>Creamos los flujos, pantallas y componentes ideales para que todo el mundo ame fuerte tu app. <br>Para eso investigamos, detectamos los problemas y los resolvemos con soluciones de calidad.</h5>
                </div>
                <div class="mutanto__elements-tabTwo-content-right">
                <picture>
                  <source media="(max-width : 576px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_app_desing-mobil.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_app_desing-mobil@2x.png 2x">
                  <source media="(min-width : 577px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_app_desing.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_app_desing@2x.png 2x">
                  <img src="<?php echo(URL_SITE) ?>mg/services/mutanto_uix_ui_app_desing.png" alt="App design" title="App design">
                </picture>
                </div>
              </div>
              <div id="webdesing" class="mutanto__elements-tabTwo-content-set">
                <div class="mutanto__elements-tabTwo-content-left">
                  <h5>
                    Creamos sitios ajustados a las tendencias y a lo que tu negocio necesita. Moderno, lindo, usable. <br> Trabajamos en la creación de sitios web pero también en el rediseño de esas páginas que ya quedaron medio viejitas o necesitan una vuelta de rosca.
                  </h5>
                </div>
                <div class="mutanto__elements-tabTwo-content-right">
                <picture>
                  <source media="(max-width : 576px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_web_desing-mobil.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_web_desing-mobil@2x.png 2x">
                  <source media="(min-width : 577px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_web_desing.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_web_desing@2x.png 2x">
                  <img src="<?php echo(URL_SITE) ?>mg/services/mutanto_uix_ui_app_desing.png" alt="Web design" title="Web design">
                </picture>
                </div>
              </div>
              <div id="landingpage" class="mutanto__elements-tabTwo-content-set">
                <div class="mutanto__elements-tabTwo-content-left">
                  <h5>
                    La primera impresión es la más importante. <br>Diseñamos sitios de impacto, páginas hechas y pensadas para ser recordadas.
                  </h5>
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
                  <h5>
                    Traigamos al mundo todo eso que estás pensando. Tenemos experiencia ejecutando ideas desde cero ¡Y nos encanta!<br> Armamos la app y la preparamos para que valides tu idea y puedas insertarte en el mercado con éxito.Y sí, para eso a veces hay que equivocarse. Mejor hacerlo rápido y barato.
                  </h5>
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
        <h3>Servicios Diseño Digital</h3>
      </div>
      <div class="mutanto-space___ space42"></div>
      <!-- Black Line -->
      <div class="mutanto__elements-blackLine"></div>
      <div class="mutanto-services__servicios-digitales-uiux-tab2">
        <!-- Tab #2 -->
        <div id="tab2_digitalServices" class="mutanto__elements-tabTwo-structure">
          <div class="mutanto__elements-tabTwo">
          <div class="mutanto__elements-tabTwo-header-buttons" style="margin-top: 24px;margin-bottom: 17px;padding-left: 5vw;padding-right: 5vw;">
                <span btnaction="branding" class="selected"  title="Branding" alt="Branding">Branding</span>
                <span btnaction="grafica" class="available" title="Piezas Gráficas" alt="Piezas Gráficas">Piezas Gráficas</span>
              </div>
            <div class="mutanto__elements-tabTwo-content">
              <div id="branding" class="mutanto__elements-tabTwo-content-set">
                <div class="mutanto__elements-tabTwo-content-left">
                  <h5>Para posicionar tu marca necesitás una identidad digital sólida. Un logo, un manual y toda tu imagen corporativa van a distinguirte de tu competencia.</h5>
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
                  <h5>Un brief basta para que diseñemos las piezas digitales que estás buscando. Post para redes, íconos, presentaciones y más. <br> Flyers, banners para web, covers para redes sociales, folletería digital y todo aquello que haga más fuerte tu presencia en el universo digital.</h5>
                </div>
                <div class="mutanto__elements-tabTwo-content-right">
                <picture>
                  <source media="(max-width : 576px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_servicios-graficos-mobil.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_servicios-graficos-mobil@2x.png 2x">
                  <source media="(min-width : 577px)" srcset="<?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_servicios-graficos.png 1x, <?php echo(URL_SITE) ?>img/services/mutanto_uix_ui_servicios-graficos@2x.png 2x">
                  <img src="<?php echo(URL_SITE) ?>mg/services/mutanto_uix_ui_servicios-graficos.png" alt="Branding" title="Servicio Gráficos" alt="Servicio Gráficos">
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
      <img src="<?php echo (URL_SITE) ?>img/mutanto-ovni-svg.svg" alt="Mutanto OVNI (animation)">
    </div>
    <div class="mutanto-services__tuIdeaLa">
      <h2 style="font-weight: 600;line-height: 134.5%;">¿Querés llevar tu idea al siguiente nivel?</h2>
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
<script>
    if (scale == 1) {
      document.querySelector(".mutanto-services___start").classList.add('mutanto-services___start-scale-support');
    }
</script>
</html>