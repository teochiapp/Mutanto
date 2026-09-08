<?php 

class MetaTagsGenerator 
{
    public function __construct ($title, $description, $key, $url, $cardsDescriptions, $imagen) 
    {
        // Fallback default image if missing
        if (empty($imagen)) {
            $imagen = URL_SITE . "img/favicon/android-chrome-512x512.png";
        }

        echo '<title>' . htmlspecialchars($title) . '</title>' . "\n";
        echo '  <meta name="title" content="' . htmlspecialchars($title) . '">' . "\n";
        echo '  <meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
        echo '  <meta name="keywords" content="' . htmlspecialchars($key) . '"/>' . "\n";
        
        // Open Graph Meta Tags (WhatsApp, Facebook, LinkedIn, Slack, Telegram)
        echo '  <meta property="og:type" content="website">' . "\n";
        echo '  <meta property="og:site_name" content="Mutanto">' . "\n";
        echo '  <meta property="og:url" content="' . htmlspecialchars($url) . '">' . "\n";
        echo '  <meta property="og:title" content="' . htmlspecialchars($title) . '">' . "\n";
        echo '  <meta property="og:description" content="' . htmlspecialchars($cardsDescriptions) . '">' . "\n";
        echo '  <meta property="og:image" content="' . htmlspecialchars($imagen) . '">' . "\n";
        echo '  <meta property="og:image:secure_url" content="' . htmlspecialchars($imagen) . '">' . "\n";
        echo '  <meta property="og:image:type" content="image/png">' . "\n";
        echo '  <meta property="og:image:width" content="1200">' . "\n";
        echo '  <meta property="og:image:height" content="630">' . "\n";
        
        // Twitter Card Meta Tags (X / Twitter)
        echo '  <meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '  <meta name="twitter:url" content="' . htmlspecialchars($url) . '">' . "\n";
        echo '  <meta name="twitter:title" content="' . htmlspecialchars($title) . '">' . "\n";
        echo '  <meta name="twitter:description" content="' . htmlspecialchars($cardsDescriptions) . '">' . "\n";
        echo '  <meta name="twitter:image" content="' . htmlspecialchars($imagen) . '">' . "\n";
    }
}

?>

