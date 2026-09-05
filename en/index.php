<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/config.php"));
$thisPageLanguages = array(
  "es" => "",
  "en" => ""
);

$proyectURL = "proyectos/";
if ($language == "en") {
  $proyectURL = "projects/";
}

//Color of the logo
$logoColorToShow = "withe";
?>
<!DOCTYPE html>

<head>
  <?php
  $pageTitle = "Mutanto | UX UI Design Team";
  $pageDescription = "We create solutions through design. We design the user experience and user interface for your app or website.";
  $pageKey = "UX UI Design,Mutanto,Interface design,UX,Design services";
  $pageUrl = URL_SITE . $language . "/" . $thisPageLanguages[$language];
  $pageCardDescription = $pageDescription;
  $pageCardImagen = $pageUrl . "mutantoImagenCard.png";
  ?>
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php")) ?>
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/home.css">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

</head>
<html lang="en">

<body>
  <!-- loader -->
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/loader.php")) ?>
  <!-- End loader -->
  <!-- Cookies -->
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/cookies.php")) ?>
  <!-- End Cookies -->
  <!-- Header -->
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php")) ?>
  <!-- End Header -->
  <style>
    .mutanto__elements-card-one-proyectBttn div span {
      font-size: 13px !important;
    }
  </style>


  <!-------  Content Here -->
  <main>
    <!-------  Div 1:  Animacion Intro-->
    <div id="mutanto-animation-intro" data-scroll data-scroll-repeat data-scroll-call="hiddenLanguajeSelector">
      <div class="mutanto-animation-intro__text">We create</div>
      <?php include(realpath($_SERVER['DOCUMENT_ROOT'] .   "/mutanto-home-animation/mutantoAnimation.php")) ?>
    </div>

    <div class="mutanto-animation-intro__buttons">
      <div class="mutanto__elements-button-with-bgLine extendedIntro">
        <button class="mutanto__elements-button extenedIntro" onclick="fistPage(locomotiveScroll)" title="Click para continuar" alt="Click para continuar">
          <i class="fa-solid fa-arrow-down-long"></i>
        </button>
      </div>
      <style>
        .mutanto-animation-intro__mutanto__elements-button span {
          display: none;
        }
      </style>
      <div class="mutanto-animation-intro__mutanto__elements-button">

        <?php include(realpath($_SERVER['DOCUMENT_ROOT'] .   "/includes/contact-icons.php")) ?>
      </div>
    </div>

    <!-------  End Div 1 -->
    <!-------  Div 2:  TRANSFORMANDO PROBLEMAS EN OPORTUNIDADES-->
    <?php require(realpath($_SERVER['DOCUMENT_ROOT'] . "/css/card-one-home-css.php")) ?>
    <div class="mutanto-space___ fixMobile1" style="height: 120px;"></div>
    <div class="textCenter mutanto__fix-1" id="fistPage">
      <h2 id="mutanto__title_01" class="verdeMutanto">TURNING</h2>
      <h2 id="mutanto__title_02" style="font-weight: 700;margin-bottom: 94px" class="blancoMuntanto">PROBLEMS INTO OPPORTUNITIES</h2>
      <div class="mutanto-space___ fixMobile1 "></div>
    </div>
    <!-- Card One -->
    <div class="mutnto__element_cardOne-Structure" data-scroll data-scroll-enable-touch-speed data-scroll-class="animationForElements">
      <!-- Card #2 -->
      <style>
        .mutanto__elements-card-one a div i {
          text-decoration: none;
          color: var(--negromutanto);
        }

        .owl-carousel .owl-stage-outer {
          overflow: visible !important;
        }
      </style>
      <div class="mutanto__elements-card-one systel-Project">
        <div class="mutanto__elements-card-one-hederCard">
          <div class="mutanto__elements-card-one-proyectName">SYSTEL</div>
          <div class="mutanto__elements-card-one-proyectTags hidden">
            <a href="#">Visual Design</a>
            <a href="#">Figma</a>
            <a href="#">Website</a>
          </div>
        </div>
        <div class="mutanto__elements-card-one-proyectTitle">Technological minimalism</div>
        <div class="mutanto__elements-card-one-proyectDescription hidden">
          How much does good design weigh? This is how we worked on the identity of a company that manufactures and sells scales.
        </div>
        <a href="<?php echo (URL_SITE . $language . "/" . $proyectURL . "systel/") ?>" alt="Systel" title="Systel">
          <div class="mutanto__elements-card-one-proyectBttn hidden">
            <div><i class="fa-solid fa-arrow-right-long"></i></div>
            <div><span>Read more</span></div>
          </div>
        </a>
      </div>
      <!-- Card #3 -->
      <div class="mutanto__elements-card-one wellyGo-Project">
        <div class="mutanto__elements-card-one-hederCard">
          <div class="mutanto__elements-card-one-proyectName">WELLY GO</div>
          <div class="mutanto__elements-card-one-proyectTags hidden">
            <a href="#">MVP</a>
            <a href="#">Research</a>
            <a href="#">UI</a>
            <a href="#">Landing Page</a>
          </div>
        </div>
        <div class="mutanto__elements-card-one-proyectTitle">So much more than an ordering App</div>
        <div class="mutanto__elements-card-one-proyectDescription hidden">
          We designed an MVP app that revolutionizes the way we place orders.
        </div>
        <a href="<?php echo (URL_SITE . $language . "/" . $proyectURL . "welly-go/") ?>" alt="Welly Go" title="Welly Go">
          <div class="mutanto__elements-card-one-proyectBttn hidden">
            <div><i class="fa-solid fa-arrow-right-long"></i></div>
            <div><span>Read more</span></div>
          </div>
        </a>
      </div>
      <!-- Card #3-A -->
      <div class="mutanto__elements-card-one bocho-Project">
        <div class="mutanto__elements-card-one-hederCard">
          <div class="mutanto__elements-card-one-proyectName">BOCHO</div>
          <div class="mutanto__elements-card-one-proyectTags hidden">
            <a href="#">Visual Design</a>
            <a href="#">UI</a>
            <a href="#">Accesibility</a>
            <a href="#">Research</a>
          </div>
        </div>
        <div class="mutanto__elements-card-one-proyectTitle">A different mouse,<br> an adapted mouse</div>
        <div class="mutanto__elements-card-one-proyectDescription hidden">
          We designed the interface of a mouse that uses head tracking. What is that?
        </div>
        <a href="<?php echo (URL_SITE . $language . "/" . $proyectURL . "bocho/") ?>" alt="Bocho" title="Bocho">
          <div class="mutanto__elements-card-one-proyectBttn hidden">
            <div><i class="fa-solid fa-arrow-right-long"></i></div>
            <div><span>Read more</span></div>
          </div>
        </a>
      </div>
      <!-- Card #4 -->
      <div class="mutanto__elements-card-one slapp-Project">
        <div class="mutanto__elements-card-one-hederCard">
          <div class="mutanto__elements-card-one-proyectName">SLAPP</div>
          <div class="mutanto__elements-card-one-proyectTags hidden">
            <a href="#">Visual Design</a>
            <a href="#">Landing Page</a>
            <a href="#">Prototyping</a>
          </div>
        </div>
        <div class="mutanto__elements-card-one-proyectTitle">Your network metrics, elevated</div>
        <div class="mutanto__elements-card-one-proyectDescription hidden">
          Discover everything happening in your networks and identify the actions that will help you achieve your goals.
        </div>
        <a href="<?php echo (URL_SITE . $language . "/" . $proyectURL . "slapp/") ?>" alt="Slapp" title="Slapp">
          <div class="mutanto__elements-card-one-proyectBttn hidden">
            <div><i class="fa-solid fa-arrow-right-long"></i></div>
            <div><span>Read more</span></div>
          </div>
        </a>
      </div>
      <!-- Card #5 -->
      <div class="mutanto__elements-card-one cref-Project">
        <div class="mutanto__elements-card-one-hederCard">
          <div class="mutanto__elements-card-one-proyectName">Cref</div>
          <div class="mutanto__elements-card-one-proyectTags hidden">
            <a href="#">Visual Design</a>
            <a href="#">UX</a>
            <a href="#">Accesibility</a>
          </div>
        </div>
        <div class="mutanto__elements-card-one-proyectTitle">Let’s create, stir and whisk</div>
        <div class="mutanto__elements-card-one-proyectDescription hidden">
          Transforming the flavor of a signature pastry into a vector.
        </div>
        <a href="<?php echo (URL_SITE . $language . "/" . $proyectURL . "cref/") ?>" alt="Cref" title="Cref">
          <div class="mutanto__elements-card-one-proyectBttn hidden">
            <div><i class="fa-solid fa-arrow-right-long"></i></div>
            <div><span>Read more</span></div>
          </div>
        </a>
      </div>
      <!-- Card #6 ex 1 -->
      <div class="mutanto__elements-card-one hst-pathways">
        <div class="mutanto__elements-card-one-hederCard">
          <div class="mutanto__elements-card-one-proyectName">HST<br>Pathways</div>
          <div class="mutanto__elements-card-one-proyectTags hidden">
            <a href="#">Graphic desing</a>
            <a href="#">Landing page</a>
            <a href="#">Website</a>
          </div>
        </div>
        <div class="mutanto__elements-card-one-proyectTitle">Health management is also designed</div>
        <div class="mutanto__elements-card-one-proyectDescription hidden">
          We introduce HST Pathways to the medical community in a professional and industry-appropriate language.
        </div>
        <a href="<?php echo (URL_SITE . $language . "/" . $proyectURL . "hts-pathways/") ?>" alt="HST Pathway" title="HST Pathway">
          <div class="mutanto__elements-card-one-proyectBttn hidden">
            <div><i class="fa-solid fa-arrow-right-long"></i></div>
            <div><span>Read more</span></div>
          </div>
        </a>
      </div>
    </div>
    <div class="mutanto-space___" style="height: 70px;"></div>
    <!-- Button & Line -->
    <div class="mutanto__elements-button-with-bgLine mutanto__fix-2 ">
      <button style="width: 243px !important" title="Ver Proyectos" onclick="window.location.href = '<?php echo (URL_SITE . $language . "/" . $proyectURL) ?>'" class="mutanto__elements-button">See Projects</button>
    </div>
    <!-- End Div 2 -->
    <div class="mutanto-space___" style="height: 144px;"></div>
    <!-- Div 2.5: From Latam -->
    <div class="container__formLatam">
      <div class="mutanto__elements-rounded-box ">
        <div class="-topSide">
          <div class="-left">
            <h1>From <span>LATAM</span> to the world</h1>
            <p>Trust our team to take your ideas to the next level, no matter where you are. At Mutanto, we turn distance into an advantage, offering creative and effective solutions from any corner of the world.</p>
          </div>
          <div class="-right">
            <picture>
              <source srcset="<?php echo (URL_SITE) ?>img/mutanto-argantina-flag.png  1x,<?php echo (URL_SITE) ?>img/mutanto-argantina-flag@2x.png 2x">
              <img src="<?php echo (URL_SITE) ?>img/mutanto-argantina-flag.png " alt="Argentina" title="Argentina">
            </picture>
          </div>
        </div>
        <div class="-buttonsSide">
          <button title="Meet the team" onclick="window.location.href = '<?php echo (URL_SITE . $language . "/about-us/") ?>'" class="mutanto__elements-button">Meet the team</button>
        </div>
        <img class="mutanto_latam_talent" src="../img/mutanto-latam-talent.svg" alt="Talento latino, Latam talent" title="Talento latino, Latam talent">
      </div>
    </div>
    <!-- END Div 2.5: From Latam -->
    <!-- Div 3: Algunos clientes -->
      <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/home-marquee.php")) ?>
    <!-- End Div 3 -->
    <!-- Div 4: Nuestros Servicios -->
    <style>
      .mutanto__elements-card-two-Structure .owl-carousel .owl-stage-outer {
        left: -28px;
      }
    </style>

    <div id="muntanto-nuestros-servicios">
      <div class="mutanto_update_08_2024_header_services">
        <h4 class="blancoMuntanto textCenter mutanto__fix-5">OUR SERVICES</h4>
        <div class="-arrows-containter">
          <div class="mutanto__elements-arrow-rigth btnBack" alt="Back" title="Back"><i class="fa-solid fa-arrow-left-long"></i></div>
          <div class="mutanto__elements-arrow-rigth btnNext" alt="Next" title="Next"><i class="fa-solid fa-arrow-right-long"></i></div>
        </div>
      </div>
      <!-- Card Two -->
      <div class="mutanto__elements-card-two-Structure owl-carousel" data-scroll data-scroll-enable-touch-speed data-scroll-class="animationForElements">
        <!-- Card #1 -->
        <div class="mutanto__elements-card-two">
          <div class="mutanto__elements-card-two-TagName">
            <span>UX</span>
            <span>UI</span>
            <span>MOBILE DESIGN</span>
            <span>USER INTERFACE</span>
            <span>MVP</span>
          </div>
          <div class="mutanto__elements-card-two-title">APP DESIGN</div>
          <div class="mutanto__elements-card-two-description">
            We design every screen of your application. Our interfaces are usable, accessible, and carry the distinctive Mutanto touch, ensuring your app or webapp stands out in the digital world.
          </div>
          <div class="mutanto__elements-card-two-setImagen positioningItAstronaut">
            <picture>
              <source srcset="<?php echo (URL_SITE) ?>img/cards-two/astronaut.png 1x,<?php echo (URL_SITE) ?>img/cards-two/astronaut@2x.png 2x ">
              <img src="<?php echo (URL_SITE) ?>img/cards-two/astronaut.png" class="mutanto__elements-card-two-imagen-astronaut" alt="APP DESIGN">
            </picture>
            <picture>
              <source srcset="<?php echo (URL_SITE) ?>img/cards-two/plus3d.png 1x,<?php echo (URL_SITE) ?>img/cards-two/plus3d@2x.png 2x ">
              <img class="mutanto__elements-card-two-setImagen-plus3d mutamovimiento" src="<?php echo (URL_SITE) ?>img/cards-two/plus3d.png" alt="APP DESIGN">
            </picture>
            <picture>
              <source srcset="<?php echo (URL_SITE) ?>img/cards-two/asterisk3d.png 1x,<?php echo (URL_SITE) ?>img/cards-two/asterisk3d@2x.png 2x ">
              <img class="mutanto__elements-card-two-setImagen-asterisk3d mutamovimiento" src="<?php echo (URL_SITE) ?>img/cards-two/asterisk3d.png" alt="APP DESIGN">
            </picture>
          </div>
        </div>
        <!-- End Card #1 -->
        <!-- Card #2 -->
        <div class="mutanto__elements-card-two">
          <div class="mutanto__elements-card-two-TagName">
            <span>MARKETING MATERIALS</span>
            <span>BRANDING</span>
            <span>VISUAL IDENTITY</span>
          </div>
          <div class="mutanto__elements-card-two-title">BRAND DESIGN</div>
          <div class="mutanto__elements-card-two-description">
            We provide top-notch design services for all your marketing materials and design needs. With all the graphic pieces you need to continue growing and developing your brand.
          </div>
          <div class="mutanto__elements-card-two-setImagen positioningItBoxs">
            <!-- Para la imagen "mutanto-digital-desing-diseno-digital.png" -->
            <picture>
              <source srcset="<?php echo (URL_SITE) ?>img/cards-two/mutanto-digital-desing-diseno-digital.png 1x,<?php echo (URL_SITE) ?>img/cards-two/mutanto-digital-desing-diseno-digital@2x.png 2x ">
              <img class="mutanto__elements-card-two-imagen-boxs" src="<?php echo (URL_SITE) ?>img/cards-two/mutanto-digital-desing-diseno-digital.png" alt="DIGITAL DESIGN">
            </picture>

            <!-- Para la imagen "clay.png" -->
            <picture>
              <source srcset="<?php echo (URL_SITE) ?>img/cards-two/clay.png 1x,<?php echo (URL_SITE) ?>img/cards-two/clay@2x.png 2x ">
              <img class="mutanto__elements-card-two-setImagen-clay mutamovimiento" src="<?php echo (URL_SITE) ?>img/cards-two/clay.png" alt="DIGITAL DESIGNL">
            </picture>

            <!-- Para la imagen "atom.png" -->
            <picture>
              <source srcset="<?php echo (URL_SITE) ?>img/cards-two/atom.png 1x,<?php echo (URL_SITE) ?>img/cards-two/atom@2x.png 2x ">
              <img class="mutanto__elements-card-two-setImagen-atom mutamovimiento" src="<?php echo (URL_SITE) ?>img/cards-two/atom.png" alt="DIGITAL DESIGN">
            </picture>
          </div>
        </div>
        <!-- End Card #2-->
        <!-- Card #3 -->
        <div class="mutanto__elements-card-two">
          <div class="mutanto__elements-card-two-TagName">
            <span>LANDING PAGE</span>
            <span>INTERACTIVE</span>
            <span>OPTIMIZATION DESIGN</span>
          </div>
          <div class="mutanto__elements-card-two-title">WEB DESIGN</div>
          <div class="mutanto__elements-card-two-description">
            Your place in the digital world. The Internet is vast, and your online presence needs to stand out everywhere. We’ll do it the Mutanto way, with the perfect blend of style and usability your site needs.
          </div>
          <div class="mutanto__elements-card-two-setImagen positioningItRocket">
            <!-- Para la imagen "rocket.png" -->
            <picture>
              <source srcset="<?php echo (URL_SITE) ?>img/cards-two/rocket.png 1x,<?php echo (URL_SITE) ?>img/cards-two/rocket@2x.png 2x ">
              <img class="mutanto__elements-card-two-setImagen-rocket" src="<?php echo (URL_SITE) ?>img/cards-two/rocket.png" alt="WEB DESIGN">
            </picture>

            <!-- Para la imagen "balls.png" -->
            <picture>
              <source srcset="<?php echo (URL_SITE) ?>img/cards-two/balls.png 1x,<?php echo (URL_SITE) ?>img/cards-two/balls@2x.png 2x ">
              <img class="mutanto__elements-card-two-setImagen-balls mutamovimiento" src="<?php echo (URL_SITE) ?>img/cards-two/balls.png" alt="WEB DESIGN">
            </picture>

            <!-- Para la imagen "atom2.png" -->
            <picture>
              <source srcset="<?php echo (URL_SITE) ?>img/cards-two/atom2.png 1x,<?php echo (URL_SITE) ?>img/cards-two/atom2@2x.png 2x ">
              <img class="mutanto__elements-card-two-setImagen-atom2 mutamovimiento" src="<?php echo (URL_SITE) ?>img/cards-two/atom2.png" alt="WEB DESIGN">
            </picture>
          </div>
        </div>
        <!-- End Card #3 -->
      </div>
      <!-- End Card Two -->
      <div class="mutanto-space___ home four"></div>
      <!-- Button & Line -->
      <div class="mutanto__elements-button-with-bgLine" style="width: 100%;position: relative;top: -100px;left: 50%;">
        <button alt="Discover Our Services" onclick="window.location.href = '<?php echo (URL_SITE . $language . "/services") ?>'" class="mutanto__elements-button">Discover Our Services</button>
      </div>
    </div>
    <!-- End Div 4 -->
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/home-user-reviwe.php")) ?>
    <!-- END Div 4.1  -->
    <!-- Div 5: Trae tus ideas al mundo digital -->
    <div id="mutanto-trae-tus-ideas" class="backgroundMesh">
      <div class="animated-figure div5">
        <img src="<?php echo (URL_SITE) ?>img/mutanto-ovni-green.svg" alt="MUTANTO UFO/OVNI">
      </div>
      <div class="mutanto__title_fix-feb2024">
        <h2 class="blancoMuntanto">Do you want to bring your idea <br>to the digital world?</h2>
      </div>
      <div class="mutanto__elements-button-with-bgLine mutanto__fix-2">
        <button alt="Charlemos" onclick="window.location.href = '<?php echo (URL_SITE . $language . "/contact-us") ?>'" class="mutanto__elements-button">Let’s talk</button>
      </div>
    </div>
    <!-- End Div 5-->
  </main>
  <div class="mutanto-space___ home five" style="height: 350px;"></div>
  <!-------  End Content Here -->
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php")) ?>

</body>
<?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/after-body.php")) ?>
<script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.6.0/polyfill.min.js" crossorigin="anonymous"></script>
<script nomodule src="https://polyfill.io/v3/polyfill.min.js?features=Element.prototype.remove%2CElement.prototype.append%2Cfetch%2CCustomEvent%2CElement.prototype.matches%2CNodeList.prototype.forEach%2CAbortController" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>
<script src="<?php echo (URL_SITE) ?>packs/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo (URL_SITE) ?>js/main.js"></script>
<script>const language = "<?php echo $language; ?>";</script>
<script src="<?php echo (URL_SITE) ?>js/home.js"></script>

</html>