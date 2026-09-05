<?php
$menuOptions = [
  "es" => ["Home", "Proyectos", "Servicios", "Equipo", "Charlemos"],
  "en" => ["Home", "Projects", "Services", "Team", "Let's talk"],
];
$menuPageToGo = [
  "es" => ["", "proyectos/", "servicios/", "sobre-nosotros/", "contacto/"],
  "en" => ["", "projects/", "services/", "about-us/", "contact-us/"],
];

$urlToHome = URL_SITE . $language . "/";

?>

<style>
  /*
    @media (min-height:600px) and (max-height:760px) {
      .offcanvas-nav__item {
        height: 100px !important; 
      }
    }
    */
</style>
<header>
  <!-- logo  -->
  <div id="header__mutanto-logo">
    <div class="header__mutanto-logo-img-desktop">
      <a href="<?php echo ($urlToHome) ?>" title="Home" alt="Home">
        <img src="<?php echo (URL_SITE) ?>img/mutanto-logo.svg" title="Mutanto" alt="Muntanto Circle Logo">
      </a>
    </div>
    <div class="header__mutanto-logo-img-mobil">
      <a href="<?php echo ($urlToHome) ?>" title="Home" alt="Home">
        <img src="<?php echo (URL_SITE) ?>img/mutanto-logo-mobile.svg" title="Mutanto" alt="Muntanto Circle logo for mobils">
      </a>
    </div>
    <?php
    function setColorTextLogo($logoColorToShow)
    {
      switch ($logoColorToShow) {
        case "black":
          return ("img/muntanto-logo-dark-mode-text-uix-ux-web-desing.svg");
          break;
        case "withe":
          return ("img/muntanto-logo-text-uix-ux-web-desing.svg");
          break;
      }
    }
    ?>
    <span class="header__mutanto-logo-txt">
      <a href="<?php echo ($urlToHome) ?>" title="Home" alt="Home">
        <img src="<?php echo (URL_SITE . setColorTextLogo($logoColorToShow)) ?>" alt="Mutanto Logo UX UI WEB" title="Mutanto Logo UX UI WEB">
      </a>
    </span>
    <span class="header__mutanto-logo-txt-dark-mode">
      <a href="<?php echo ($urlToHome) ?>" title="Home" alt="Home">
        <img src="<?php echo (URL_SITE) ?>img/muntanto-logo-dark-mode-text-uix-ux-web-desing.svg" alt="Mutanto Logo UX UI WEB" title="Mutanto Logo UX UI WEB"></span>
    </a>
  </div>
  <!-- End Logo  -->
  <!-- Language Selector  -->
  <div class="header__mutanto-select-language">
    <!-- Espanol  -->
    <?php

    if ($logoColorToShow == "black") {
      echo '
                      <style>
                      .header__mutanto-select-language .active a{                
                        color: var(--negromutanto) !important;
                        text-align: right;
                        font: 700 16px/150% Poppins;
                        letter-spacing: -0.176px;
                        opacity: 1;
                        cursor: default;
                      }
                      .header__mutanto-language span a {
                        text-decoration: none;
                        color: var(--negromutanto);
                        opacity: 0.5;
                      }
                      
                      .header__mutanto-language span a:hover {
                        opacity: 1;
                      }

                      </style>
              ';
    } else {
      echo '
              <style>
              .header__mutanto-select-language .active a{                
                color: var(--verdemutanto) !important;
                text-align: right;
                font: 700 16px/150% Poppins;
                letter-spacing: -0.176px;
                opacity: 1;
                cursor: default;
              }
              .header__mutanto-language span a {
                text-decoration: none;
                color: var(--blancomutanto);
                opacity: 0.5;
              }
              
              .header__mutanto-language span a:hover {
                opacity: 1;
              }

              </style>
            ';
    }

    function changeLanguageSelector($langugeSelected, $languageToChange, $textOfButton, $titleOfButton, $thisPageLanguages)
    {
      if ($langugeSelected == $languageToChange) {
        echo (' <span class="header__mutanto-language-capitals-letters active">' . "\n");
        echo ('  <a href="">' . $textOfButton . '</a>' . "\n");
      } else {
        echo (' <span class="header__mutanto-language-capitals-letters">');
        echo ('<a href="' . URL_SITE . 'language/select.php?change-language=' . $languageToChange . '&page=' . $thisPageLanguages[$languageToChange] . '" title="' . $titleOfButton . '">' . $textOfButton . '</a>');
      }
      echo ('</span>' . "\n");
    }
    ?>
    <div class="header__mutanto-language">
      <?php changeLanguageSelector($language, "es", 'ESP', "Cambiar al lenguaje español", $thisPageLanguages) ?>
      <span class="header__mutanto-language-full-word-hide">&ensp;&ensp;&nbsp;&nbsp;&nbsp;AÑOL</span>
    </div>
    <!-- English  -->
    <div class="header__mutanto-language">
      <?php changeLanguageSelector($language, "en", "ENG", "Switch to the English language", $thisPageLanguages); ?>
      <span class="header__mutanto-language-full-word-hide">&ensp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp;LISH</span>
    </div>
  </div>
  <!-- End Language Selector  -->
  <!-- Menu  -->
  <div class="header">
    <div class="header-row row">
      <button class="hamburger-toggle">
        <span class="hamburger-menu">
          <img class="header__muntanto-hamburger-menu-images hamburger-menu-center-imagens hamburger-menu-open-menu" src="<?php echo (URL_SITE) ?>img/mutanto-header-menu.svg" alt="Mutanto Menu" title="Mutanto Menu">
          <img class="header__muntanto-hamburger-menu-images hamburger-menu-center-imagens hamburger-menu-close-menus" src="<?php echo (URL_SITE) ?>img/mutanto-header-menu-close.svg" alt="Mutanto Menu Close" title="Mutanto Menu close">
        </span>
      </button>
    </div>
  </div>
  <div class="Site-interface">
    <div class="offcanvas">
      <div class="animated-figure">
        <img src="<?php echo (URL_SITE) ?>img/mutanto-ovni-svg.svg">
      </div>
      <div class="offcanvas-nav__back-arrow-buttn">
        <i class="fa-solid fa-arrow-left" alt="Volver/Back" title="Volver/Back"></i>
      </div>
      <nav class="offcanvas-nav">
        <ul class="offcanvas-nav__list">
          <a href="<?php echo (URL_SITE . $language . "/") ?>" class="offcanvas-nav__link" alt="<?php echo ($menuOptions[$language][0]) ?>" title="<?php echo ($menuOptions[$language][0]) ?>">
            <li class="offcanvas-nav__item">
              <?php echo ($menuOptions[$language][0]) ?>
            </li>
          </a>
          <li class="offcanvas-nav__item__line-separator">
            <div class="offcanvas-nav__item__line-separator-gradient"></div>
          </li>
          <a href="<?php echo (URL_SITE . $language . "/" . $menuPageToGo[$language][1]) ?>" class="offcanvas-nav__link" alt="<?php echo ($menuOptions[$language][1]) ?>" title="<?php echo ($menuOptions[$language][1]) ?>">
            <li class="offcanvas-nav__item">
              <?php echo ($menuOptions[$language][1]) ?>
            </li>
          </a>
          <li class="offcanvas-nav__item__line-separator">
            <div class="offcanvas-nav__item__line-separator-gradient"></div>
          </li>
          <a href="<?php echo (URL_SITE . $language . "/" . $menuPageToGo[$language][2]) ?>" class="offcanvas-nav__link" alt="<?php echo ($menuOptions[$language][2]) ?>" title="<?php echo ($menuOptions[$language][2]) ?>">
            <li class="offcanvas-nav__item">
              <?php echo ($menuOptions[$language][2]) ?>
            </li>
          </a>
          <li class="offcanvas-nav__item__line-separator">
            <div class="offcanvas-nav__item__line-separator-gradient"></div>
          </li>
          <li class="offcanvas-nav__item">
            <a href="<?php echo (URL_SITE . $language . "/" . $menuPageToGo[$language][3]) ?>" class="offcanvas-nav__link" alt="<?php echo ($menuOptions[$language][3]) ?>" title="<?php echo ($menuOptions[$language][3]) ?>">
              <?php echo ($menuOptions[$language][3]) ?>
          </li>
          </a>
          <li class="offcanvas-nav__item__line-separator">
            <div class="offcanvas-nav__item__line-separator-gradient"></div>
          </li>
          <a href="<?php echo (URL_SITE . $language . "/" . $menuPageToGo[$language][4]) ?>" class="offcanvas-nav__link" alt="<?php echo ($menuOptions[$language][4]) ?>" title="<?php echo ($menuOptions[$language][4]) ?>">
            <li class="offcanvas-nav__item">
              <?php echo ($menuOptions[$language][4]) ?>
            </li>
          </a>
          <li class="offcanvas-nav__item__line-separator">
            <div class="offcanvas-nav__item__line-separator-gradient"></div>
          </li>
        </ul>
      </nav>
    </div>
    <div class="toggle-circle">
      <div class="row">
        <svg class="hamburger-toggle__circle" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
          <circle cx="16" cy="16" r="16" />
        </svg>
      </div>
    </div>
  </div>
  <!-- End Menu -->
</header>
<!-- Go to top -->
<style>
  #gotoTop {
    position: fixed;
    right: 8%;
    bottom: 10vh;
    z-index: 1;
  }
</style>
<?php 
  $altTop = "Arriba";
  if ($language == "en") {
    $altTop = "Top";
  }
?>
<div id="gotoTop">
  <div data-scroll-to="#top" data-scroll-to-href="#top" alt="<?php echo($altTop)?>" title="<?php echo($altTop)?>">
  <i class="fa-solid fa-arrow-up-long"></i>
</div>
</div>
<!-- End Go to top -->
<script>
  //August 2024 Update - Support Scale
  function detectZoom() {
    return Math.round(window.devicePixelRatio * 100);
}

if (detectZoom() != 100 && detectZoom() > 100) {
    scale = 1;
    console.log(scale);
    const divsForScaleSupport = ['header','#header__mutanto-logo','.header-row','.row','.header__mutanto-select-language','.offcanvas-nav__list'];
    divsForScaleSupport.forEach((d) => {
      let div = null;  
      if (d == ".row") {
          div = document.querySelector(".Site-interface "+d);
      } else {
          div = document.querySelector(d);
      }
        
        div.classList.add(d.replace(".","").replace("#","")+"-scale-support");
    });
}
</script> 