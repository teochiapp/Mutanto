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
        'eyebrow' => 'ON-DEMAND DESIGN SUPPORT',
        'title' => 'Design experts behind<br>your marketing team.',
        'description' => 'Get high-quality creative talent, without the stress of hiring in-house.',
        'cta_primary' => [
            'text' => 'Book a free call',
            'url'  => 'https://calendly.com/holamutanto/30min?month=' . date('Y-m')
        ],
        'cta_secondary' => [
            'text' => 'Contact us',
            'url'  => 'https://wa.me/5493516362772'
        ],
        'items' => [
            [
                'number' => '01',
                'title' => 'Fast tournaround',
                'description' => 'Deadlines don\'t wait, and neither do we.'
            ],
            [
                'number' => '02',
                'title' => 'On-brand execution',
                'description' => 'Every asset consistent across channels and touchpoints.'
            ],
            [
                'number' => '03',
                'title' => 'No strings attached',
                'description' => 'Per project or monthly retainer, whatever fits your team.'
            ],
            [
                'number' => '04',
                'title' => 'One dedicated point of contact',
                'description' => 'One project lead backed by a full design team.'
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
    'testimonials' => [
        'eyebrow' => 'TESTIMONIALS',
        'title' => 'What our clients say',
        'default_avatar' => URL_SITE . 'img/marketing/testimonials/avatar-default.png',
        'items' => [
            [
                'quote' => 'I was nervous about outsourcing to an agency. However, Mutanto has been a dream partner. They are quick and responsive and create beautiful designs. I am always impressed with how they can adhere to our brand guidelines, yet nothing feels redundant or predictable. They never say no to whatever projects we ask, and are equally as invested in the results as we are. I am very grateful for their partnership!',
                'name' => 'Erica Palmer',
                'role' => 'Content Marketing Manager, Next Girl Up',
                'avatar' => ''
            ],
            [
                'quote' => 'Mutanto completely transformed our company\'s visual identity. Their positive attitude, the quality of their work, and the dedication and care they bring to everything they do are truly outstanding. We\'re very grateful to this amazing team.',
                'name' => 'Marcelo Blanco',
                'role' => 'Co-founder, GU Trade',
                'avatar' => ''
            ],
            [
                'quote' => 'I\'ve worked with the Mutanto team for over 3 years and they are excellent to work with! They are always willing to go the extra mile to help us meet deadlines. I especially appreciate the team\'s positive attitude, collaborative approach, and how well they are able to take direction and implement it into the designs they create!',
                'name' => 'Kayla Hasler',
                'role' => 'Senior Product Marketing Manager, HST Pathways',
                'avatar' => ''
            ]
        ]
    ],
    'contact' => [
        'title' => 'Ready to stop waiting <br>on design?',
        'description' => '30-minute call. No commitments.<br>We\'ll show you how we work and learn what your team needs.',
        'cta_primary' => [
            'text' => 'Book a free call',
            'url'  => 'https://calendly.com/holamutanto/30min?month=' . date('Y-m')
        ],
        'cta_secondary' => [
            'text' => 'Contact us',
            'url'  => 'https://wa.me/5493516362772'
        ]
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
    
    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/marketing/testimonials.php")); ?>

    <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/marketing/contact.php")); ?>
  </main>

  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT']. "/includes/footer-marketing.php")) ?>
  <?php require_once(realpath($_SERVER['DOCUMENT_ROOT'] . "/includes/after-body.php")) ?>
  <script src="<?php echo (URL_SITE) ?>js/main.js"></script>
</body>
</html>
