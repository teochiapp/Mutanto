<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/config.php"));
//Color of the logo
$logoColorToShow = "withe";
//page Translations
$thisPageLanguages = array(
  "es" => "proyectos/",
  "en" => "projects/"
);

if (!isset($_GET['tag'])) {
  $tagFilter = "all";
} else {
  $tagFilter = $_GET['tag'];
}

require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/dbconextion.php"));
$post_URL = URL_SITE . $language . "/" . $thisPageLanguages[$language];

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  $pageTitle = "Mutanto Proyectos";
  $pageDescription = "Diseño UX UI para llevar tu proyecto digital al próximo nivel. ¿Te interesa? Agendá una charla con el equipo 😎";
  $pageKey = " Mutanto,Diseño UX UI,Usabilidad,Diseño digital,Servicios para Start Up";
  $pageUrl = URL_SITE . $language . "/" . $thisPageLanguages[$language];
  $pageCardDescription = $pageDescription;
  $pageCardImagen = $pageUrl . "mutantoImagenCard.png";
  ?>
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/head.php")) ?>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
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
  <style>
          @media (min-width: 1200px) {
            .mutanto__elements-post-structure {
                justify-content: space-evenly;
                margin-top: 140px !important;
            }
          }

          @media (max-width : 1199px) and (min-width: 577px) {    
              .mutanto__pryectos-chat {
                  margin-top: 120px !important;
                  margin-bottom: 300px !important;
              }
          }
          
          @media (max-width: 576px) {
            .mutanto__elements-post-textContainer {
              width: 96vw !important;
            }

            .mutanto__elements-post-structure>* {
              width: 96vw !important;
            }

            .mutanto__elements-post-structure div {
              margin-top: 0px !important;
            }

            .mutanto__elements-post-structure {
              width: 96vw !important;
            }

            .mutanto__elements-post picture img {
              width: 96vw !important;
            }

            .mutanto__elements-post {
              margin-top: 24px !important;
              margin-bottom: 24px !important;
            }
            .mutanto__elements-post .mutanto__elements-post-textContainer h5 {
              margin: 0px;
              padding: 0px;
              width: 97vw !important;
              padding-right: 0px !important;
          }
          .mutanto__elements-post-textContainer {
              width: 300px;
              padding: 0px 0px !important;
            }

            .mutanto__elements-post-structure {
                margin-bottom: 50px !important;
            }
            
            .mutanto__elements-post-structure.setUp {
                margin-top: 85px !important;
            }
        }
        </style>
  <main id="top"  data-scroll data-scroll-event-progress="gotoTop">
    <!-- Post -->
    <div class="mutanto__elements-post-structure setUp" >
      <?php
      if ($tagFilter == "all") {
        $tags = "";
      } else {
        $tags = " AND proyect_tags.tags_id =" . $tagFilter;
      }

      require_once "../../vendor/autoload.php";
      use Detection\MobileDetect;
      $detect = new MobileDetect();
      $isMobile = $detect->isMobile() && !$detect->isTablet();
    
      if ($isMobile) {
        $postPerPage = 3;
        $query = 'SELECT count(id) AS numberOfPost FROM proyects LIMIT 1';
        $stmt = $pdo->query($query);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $numberOfPost =  $row['numberOfPost'];
        $numberOfPage = ceil($numberOfPost / $postPerPage);

        if (!isset($_GET['page'])) {
          $page = 1;
        } else {
          $page = $_GET['page'];
          $nextPage = $page;
        }
        $nextPage = $page;
        $pageRange = ($page - 1) * $numberOfPage;
        $sqlLimit = "LIMIT $pageRange,$postPerPage";
      } else {
        $sqlLimit = "";
      }

      $query = "SELECT DISTINCT (proyect_tags.proyects_id), proyects.name, proyects.title_" . $language . ", proyects.description_" . $language . ", proyects.dir FROM proyect_tags, proyects, tags WHERE (proyect_tags.proyects_id = proyects.id ) AND (proyect_tags.tags_id = tags.id)" . $tags . $sqlLimit;
      $stmt = $pdo->query($query);
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $post_URL = URL_SITE . $language . "/" . $thisPageLanguages[$language] . $row['dir'];
      ?>
        <div class="mutanto__elements-post">
          <a href="<?php echo ($post_URL) ?>" alt="<?php echo ($post_URL) ?>" title="<?php echo ($post_URL) ?>">
            <picture>
              <source srcset="<?php echo ($post_URL) ?>/previwe.png 1x, <? echo (URL_SITE . $language . "/" . $thisPageLanguages[$language] . $row['dir']) ?>/previwe@2x.png 2x">
              <img src="<?php echo ($post_URL) ?>/previwe.png" alt="<?php echo ($row["name"]) ?>" title="<?php echo ($row["name"]) ?>">
            </picture>
          </a>
          <div class="mutanto__elements-post-textContainer">
            <h4 class="mutanto__elements-post-title verdeMutanto"><?php echo ($row["name"]) ?></h4>
            <h5 class="mutanto__elements-post-title-description blancoMuntanto"><?php echo ($row['description_es']) ?></h5>
          </div>
        </div>
      <?php } ?>
    </div>
    <style>
      .mutanto__elements-button-with-bgLine {
        margin:  20px 0px 0px 0px !important;
      }
     </style> 
    <?php
    require_once(realpath($_SERVER['DOCUMENT_ROOT']  . "/includes/paginator.php"));
    //Add title to the section
    $titleH2 = "¿Querés traer tu idea al<br> mundo digital?";
    $buttonText = "Charlemos";
    $URL_CONTACTO = "/contacto/";
    if ($language == "en") {
      $titleH2 = "Do you want to bring your idea to<br> the digital world?";
      $buttonText = "Let’s talk";
      $URL_CONTACTO = "/contact-us/";
    }
    $seguirChumeando = "ON";
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
<script src="<?php echo (URL_SITE) ?>js/main.js"></script>

</html>