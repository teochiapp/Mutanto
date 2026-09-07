<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/config.php"));

// Configuración de idiomas para esta página
$thisPageLanguages = array(
  "es" => "marketing/",
  "en" => "marketing/"
);

$logoColorToShow = "withe";

// 1. DICCIONARIO DE DATOS (INGLÉS)
$marketingData = [
    'hero' => [
        'eyebrow' => 'ON-DEMAND DESIGN FOR MARKETING TEAMS',
        'title' => 'Your marketing team has<br>the strategy.',
        'title_highlight' => 'Who is making the assets?',
        'description' => 'We work with marketing teams to create <strong>high-quality assets</strong> for mkt campaigns, product kickoff\'s, sales strategies, brand & content, without the overhead of a traditional agency.'
    ],
    'benefits' => [
        'header' => 'BENEFITS',
        'title' => 'WHY CHOOSE US',
        'items' => [
            [
                'title' => 'Strategy',
                'description' => 'We plan every step to ensure success.'
            ],
            [
                'title' => 'Creativity',
                'description' => 'Designs and copy that captivate your audience.'
            ]
        ]
    ],
    'projects' => [
        'title' => 'Success Stories'
    ],
    'services' => [
        'title' => 'Our Services'
    ],
    'contact' => [
        'title' => 'Do you want to boost <br>your digital brand?',
        'button_text' => 'Book a Call'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $pageTitle = "Mutanto | Marketing";
  $pageDescription = "Boost your brand with our digital marketing services.";
  $pageKey = "Marketing, Mutanto, Digital Services";
  $pageUrl = URL_SITE . $language . "/" . $thisPageLanguages[$language];
  $pageCardDescription = $pageDescription;
  $pageCardImagen = $pageUrl . "mutantoImagenCard.png";
  ?>
  
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']. "/includes/head.php")) ?>
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/home.css">
  
  <!-- NUEVO: CSS Modular de Marketing -->
  <link rel="stylesheet" href="<?php echo (URL_SITE) ?>css/marketing/main.css">
</head>
<body>
  <!-- Loader is disabled for the marketing page to prevent unstyled flashes, as its CSS is in the main site bundle -->
  <!-- <?php // require_once(realpath($_SERVER['DOCUMENT_ROOT']. "/includes/loader.php")) ?> -->
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/cookies.php")) ?>
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/header-marketing.php")) ?>

  <main>
    <!-- 2. RENDERIZADO DE COMPONENTES -->
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/marketing/hero.php")); ?>
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/marketing/benefits.php")); ?>
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/marketing/projects.php")); ?>
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/marketing/services.php")); ?>
    
    <section id="marketing-testimonials">
        <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/home-user-reviwe.php")) ?>
    </section>

    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/marketing/contact.php")); ?>
  </main>

  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']. "/includes/footer-marketing.php")) ?>
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/after-body.php")) ?>
  <script src="<?php echo (URL_SITE) ?>js/main.js"></script>
</body>
</html>
