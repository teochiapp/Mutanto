<?php
require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/config.php"));

// Configuración de idiomas para esta página
$thisPageLanguages = array(
  "es" => "marketing/",
  "en" => "marketing/"
);

$logoColorToShow = "withe";

// 1. DICCIONARIO DE DATOS (INGLÉS)
require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/img/marketing/services/icons.php"));

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
        'eyebrow' => 'PORTFOLIO',
        'title' => 'Highlighted projects',
        'items' => [
            [
                'category' => 'HEALTHCARE | B2B',
                'name' => 'HST Pathways',
                'description' => 'Ongoing design support for a U.S. based B2B SaaS company. Social media, email banners, presentations, and campaign assets.',
                'tags' => ['Social Media', 'UX/UI Design', 'Marketing Kits', 'Print Assets', 'Web Design', 'Graphic Design'],
                'images' => [URL_SITE . 'img/projects/HTS Pathways/imageFull.webp'],
                'mobile_images' => [URL_SITE . 'img/projects/HTS Pathways/imageMobile.webp']
            ],
            [
                'category' => 'MARKETING | B2B',  
                'name' => 'Erio Marketing',
                'description' => 'Web design and social media assets in partnership with a US-based marketing agency.',
                'tags' => ['Social Media', 'UX/UI Design', 'Web Design','Graphic Design'],
                'images' => [URL_SITE . 'img/projects/Erio Marketing/imageFull.webp'],
                'mobile_images' => [URL_SITE . 'img/projects/Erio Marketing/imageMobile.webp']
            ],
            [
                'category' => 'TRADE MARKETING | B2B',
                'name' => 'GU Trade',
                'description' => 'Long-term brand and design partnership. Visual identity, social media, presentations and communication assets.',
                'tags' => ['Branding', 'Social Media', 'Print Assets', 'Pitch Decks', 'Web Design', 'Graphic Design'],  
                'images' => [URL_SITE . 'img/projects/GU Trade/imageFull.webp'],
                'mobile_images' => [URL_SITE . 'img/projects/GU Trade/imageMobile.webp']
            ],
            [
                'category' => 'NONPROFIT | EDUCATION',
                'name' => 'Next Girl Up',
                'description' => 'Full creative buildout for a US nonprofit empowering high school girls in business and marketing. From brand identity and website to campaign materials and certificates.',
                'tags' => ['Branding', 'Social Media', 'Marketing Kits', 'Print Assets', 'Web Design', 'Graphic Design'],
                'images' => [URL_SITE . 'img/projects/Next Girl UP/imageFull.webp'],
                'mobile_images' => [URL_SITE . 'img/projects/Next Girl UP/imageMobile.webp']
            ]
        ]
    ],
    'services' => [
        'header' => 'SERVICES',
        'title' => 'Our areas of expertise',
        'items' => [
            [
                'title' => 'Landing pages',
                'icon' => $serviceIcons['landing']
            ],
            [
                'title' => 'Email banners and newsletters',
                'icon' => $serviceIcons['email']
            ],
            [
                'title' => 'Pitch decks and one-pagers',
                'icon' => $serviceIcons['pitch']
            ],
            [
                'title' => 'Social ads, static and motion',
                'icon' => $serviceIcons['social']
            ],
            [
                'title' => 'Web design and redesign',
                'icon' => $serviceIcons['web']
            ],
            [
                'title' => 'Brand and campaign assets',
                'icon' => $serviceIcons['brand']
            ]
        ]
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
