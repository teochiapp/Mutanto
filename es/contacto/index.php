<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "withe";
//page Translations
$thisPageLanguages = array(
  "es" => "contacto/",
  "en" => "contact-us/"
);

$passwordWebAccount = "mie*bnP4dH"
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  $pageTitle = "Mutanto ,Charlemos";
  $pageDescription = "Diseño UX UI para llevar tu proyecto digital al próximo nivel. ¿Te interesa? Agendá una charla con el equipo 😎";
  $pageKey = " Mutanto,Diseño UX UI,Usabilidad,Diseño digital,Servicios para Start Up";
  $pageUrl = URL_SITE . $language . "/" . $thisPageLanguages[$language];
  $pageCardDescription = $pageDescription;
  $pageCardImagen = $pageUrl . "mutantoImagenCard.png";
  ?>
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/head.php")) ?>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/contact.css">
</head>
<style>
  .mutanto__contacto-algunos-clientes {
    margin-top: 325px !important;
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
  <main>
    <div class="mutanto__contacto">
      <form method="post" name="form" id="form" enctype="multipart/form-data">
        <h1><span>Hola!</span><span>Hi</span><span>你<br>好</span><span>Bonjour</span><br><span>Ciao</span></h1>

        <div class="mutanto__contacto-form-table">
          <div class="mutanto__contacto-form-table-icons">
            <?php include(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/contact-icons.php")); ?>
          </div>
          <div class="mutanto__contacto-form-table-form">
            <div class="mutanto__contacto-form-ajax hidden">
              <div class="dots-container">
                <div class="custom-loader"></div>
              </div>
              <div class="mutanto__contacto-form-ajax-txt">Enviando...</div>
            </div>
            <div class="mutanto__contacto-form-inputs">
              <p style="color:var(--blancomutanto)">Nos encantan los nuevos desafíos. <br>Contanos que estás necesitando. </p>
              <div class="formbuilder-text form-group field-muntanto__contacto-form-input-name">
                <label for="muntanto__contacto-form-input-name" class="formbuilder-text-label">Nombre*</label>
                <input type="text" placeholder="Harry Potter" name="muntanto__contacto-form-input-name" access="false" id="muntanto__contacto-form-input-name" title="Ingre su nombre" aria-required="true">
                <div class="muntanto__contacto-form-err-name"></div>
              </div>
              <div class="formbuilder-text form-group field-muntanto__contacto-form-input-email">
                <label for="muntanto__contacto-form-input-email" class="formbuilder-text-label">Email*</label>
                <input type="email" placeholder="Harry@elelegido.com" name="muntanto__contacto-form-input-email" access="false" id="muntanto__contacto-form-input-email" title="Ingrese su e-mail" aria-required="true">
                <div class="muntanto__contacto-form-err-email"></div>
                <label for="muntanto__contacto-form-input-know" class="formbuilder-text-label">¿Cómo supiste de nosotros?</label>
                <input type="text" placeholder="A través del diario El Profeta" name="muntanto__contacto-form-input-know" access="false" id="muntanto__contacto-form-input-know" title="Si lo deseas, puedes contarnos cómo nos conociste." aria-required="true">
                <label for="muntanto__contacto-form-input-name" class="formbuilder-textarea-label">Contanos sobre tu proyecto*</label>
              </div>
              <div class="formbuilder-textarea form-group field-muntanto__contacto-form-input-name">
                <textarea type="textarea" placeholder="Mi proyecto es sobre la cámara de los secretos y necesitamos saber quién es el heredero de Slytheryn para salvar Hogwarts" class="form-control" name="muntanto__contacto-form-input-comments" access="false" id="muntanto__contacto-form-input-comments" title="Contanos sobre tu proyecto" aria-required="true" rows="5" cols="40"></textarea>
                <input type="file" class="attFile" name="muntanto__contacto-form-input-file" access="false" multiple="false" id="muntanto__contacto-form-input-file">
                <div class="muntanto__contacto-form-err-file"></div>
              </div>
            </div>
            <div class="formbuilder-button form-group field-muntanto__contacto-form-input-btn">
              <div class="muntanto__contacto-form-err-comments" style="margin-top: 15px;"></div>
            </div>
            <button type="button" class="mutanto__elements-button extMobil" id="sendButtonM">Enviar</button>
          </div>
        </div>
        <div class="mutanto__contacto-send-set">
          <button type="button" class="mutanto__elements-button ext " id="sendButton">Enviar</button>
          <div class="mutanto__elements-bgLine"></div>
        </div>
        <div class="mutanto__elements-bgLine extenMobile"></div>
      </form>
    </div>
    <!-- Div 3: Algunos clientes -->
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/home-marquee.php")) ?>
    <style>
      .slick-slider {
        position: absolute !important;
      }

      .mutanto__elements-bgLine.contact {
        display: none;
      }
    </style>
    <!-- End Div 3 -->
  </main>
  <!-------  End Content Here -->
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/footer.php")) ?>
</body>
<?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/after-body.php")) ?>
<script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.6.0/polyfill.min.js" crossorigin="anonymous"></script>
<script nomodule src="https://polyfill.io/v3/polyfill.min.js?features=Element.prototype.remove%2CElement.prototype.append%2Cfetch%2CCustomEvent%2CElement.prototype.matches%2CNodeList.prototype.forEach%2CAbortController" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo (URL_SITE) ?>js/main.js"></script>
<script src="https://unpkg.com/validator@latest/validator.min.js"></script>
<?php echo ("<script> const language = \"" . $language . "\"; </script>") ?>
<script src="<?php echo (URL_SITE) ?>js/contact.js"></script>
<script>
  $(document).ready(function() {
    var windowWidth = $(window).width();

    if (windowWidth > 577) {
      $('.slick.marquee').slick({
        speed: 8000,
        autoplay: true,
        autoplaySpeed: 0,
        centerMode: false,
        cssEase: 'linear',
        slidesToShow: 1,
        draggable: false,
        focusOnSelect: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        slidesToScroll: 1,
        variableWidth: true,
        infinite: true,
        initialSlide: 1,
        arrows: false,
        buttons: false
      });
    }

  });
</script>

</html>