<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/config.php"));

// Configuración de idiomas para esta página
$thisPageLanguages = array(
  "es" => "marketing/",
  "en" => "marketing/"
);

// Color del logo (puede ser "withe" o "black" dependiendo del fondo del Hero)
$logoColorToShow = "withe";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  // Meta tags de la landing
  $pageTitle = "Mutanto | Marketing";
  $pageDescription = "Potencia tu marca con nuestros servicios de marketing digital.";
  $pageKey = "Marketing, Mutanto, Servicios Digitales";
  $pageUrl = URL_SITE . $language . "/" . $thisPageLanguages[$language];
  $pageCardDescription = $pageDescription;
  $pageCardImagen = $pageUrl . "mutantoImagenCard.png"; // Puedes cambiar esta imagen
  ?>
  
  <!-- Inclusión del Head (Meta tags globales, CSS base, etc.) -->
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']. "/includes/head.php")) ?>
  
  <!-- Estilos reutilizados de la home o específicos -->
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/home.css">
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/servicios.css">
</head>
<body>
  <!-- Loader / Preloader -->
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']. "/includes/loader.php")) ?>
  
  <!-- Cookies Banner -->
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/cookies.php")) ?>
  
  <!-- ========================================== -->
  <!-- 1. HEADER -->
  <!-- ========================================== -->
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php")) ?>

  <main>
    <!-- ========================================== -->
    <!-- 2. HERO -->
    <!-- ========================================== -->
    <!-- Puedes reutilizar la animación inicial o crear un bloque más sencillo -->
    <section id="marketing-hero" style="min-height: 80vh; display: flex; flex-direction: column; align-items: center; justify-content: center; position: relative;">
        <div class="textCenter">
            <h1 class="blancoMuntanto" style="font-size: 4rem; font-weight: 800;">Marketing Digital</h1>
            <p class="blancoMuntanto" style="font-size: 1.5rem; margin-top: 20px;">Hacemos que tu marca destaque.</p>
        </div>
        <div class="mutanto__elements-button-with-bgLine" style="margin-top: 50px;">
            <button class="mutanto__elements-button" onclick="window.location.href='#marketing-contact'">
                Empezar
            </button>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 3. BENEFITS -->
    <!-- ========================================== -->
    <section id="marketing-benefits" style="padding: 100px 0;">
        <div class="textCenter mutanto__fix-1">
            <h2 class="verdeMutanto">BENEFICIOS</h2>
            <h2 class="blancoMuntanto" style="font-weight: 700; margin-bottom: 50px;">POR QUÉ ELEGIRNOS</h2>
        </div>
        <!-- Aquí va la grilla de beneficios (puedes basarte en las cards de index.php) -->
        <div class="container" style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <!-- Placeholder Beneficio 1 -->
            <div style="background: #111; padding: 30px; border-radius: 20px; max-width: 300px; text-align: center;">
                <h3 class="blancoMuntanto">Estrategia</h3>
                <p class="blancoMuntanto" style="opacity: 0.7;">Pensamos cada paso para asegurar el éxito.</p>
            </div>
            <!-- Placeholder Beneficio 2 -->
            <div style="background: #111; padding: 30px; border-radius: 20px; max-width: 300px; text-align: center;">
                <h3 class="blancoMuntanto">Creatividad</h3>
                <p class="blancoMuntanto" style="opacity: 0.7;">Diseños y copys que atrapan a tu audiencia.</p>
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- 4. PROJECTS -->
    <!-- ========================================== -->
    <section id="marketing-projects" style="padding: 100px 0;">
        <div class="textCenter">
            <h2 class="blancoMuntanto" style="margin-bottom: 50px;">Casos de Éxito</h2>
        </div>
        <!-- Aquí puedes copiar el bloque <div class="mutnto__element_cardOne-Structure"> del home -->
    </section>

    <!-- ========================================== -->
    <!-- 5. SERVICES -->
    <!-- ========================================== -->
    <section id="marketing-services" style="padding: 100px 0;">
         <div class="textCenter">
            <h2 class="blancoMuntanto" style="margin-bottom: 50px;">Nuestros Servicios</h2>
        </div>
        <!-- Aquí puedes copiar el bloque <div class="mutanto__elements-card-two-Structure"> del home o los tabs de servicios.php -->
    </section>

    <!-- ========================================== -->
    <!-- 6. TESTIMONIALS -->
    <!-- ========================================== -->
    <!-- Reutilizamos el componente de reviews de la home -->
    <section id="marketing-testimonials">
        <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/home-user-reviwe.php")) ?>
    </section>

    <!-- ========================================== -->
    <!-- 7. CONTACT -->
    <!-- ========================================== -->
    <!-- Reutilizamos el footer de contacto estilo mesh de la home -->
    <section id="marketing-contact" class="backgroundMesh">
        <div class="animated-figure div5">
          <img src="<?php echo (URL_SITE)?>img/mutanto-ovni-green.svg" alt="MUTANTO UFO/OVNI">
        </div>
        <div class="mutanto__title_fix-feb2024">
          <h2 class="blancoMuntanto">¿Querés potenciar <br>tu marca digital?</h2>
        </div>
        <div class="mutanto__elements-button-with-bgLine mutanto__fix-2">
            <button alt="Charlemos" onclick="window.location.href = '<?php echo (URL_SITE . $language . "/contacto") ?>'" class="mutanto__elements-button">Agendar Llamada</button>
        </div>
    </section>
  </main>

  <!-- ========================================== -->
  <!-- 8. MINI FOOTER -->
  <!-- ========================================== -->
  <!-- Reutilizamos el footer global, que ya es un mini footer -->
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']. "/includes/footer.php")) ?>

  <!-- Scripts al final del body -->
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/after-body.php")) ?>
  <script src="<?php echo (URL_SITE) ?>js/main.js"></script>
  <!-- Agrega scripts específicos para sliders o animaciones de marketing aquí -->
</body>
</html>
