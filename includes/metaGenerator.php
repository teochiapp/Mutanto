<?php 

class MetaTagsGenerator 
{
    
    public function __construct ($title,$description,$key,$url,$cardsDescriptions,$imagen) 
    {
echo '<title>'.$title.'</title>
      <meta name="title" content="'.$title.'">
      <meta name="description" content="'.$description.'">';
echo '<meta name="keywords" content="'.$key.'"/>';
echo '<meta property="og:type" content="website">
      <meta property="og:url" content="'.$url.'">
      <meta property="og:title" content="'.$title.'">
      <meta property="og:description" content="'.$cardsDescriptions.'">
      <meta property="og:image" content="'.$imagen.'">';
echo '<meta property="twitter:card" content="'.$title.'">
      <meta property="twitter:url" content="'.$url.'">
      <meta property="twitter:title" content="'.$title.'">
      <meta property="twitter:description" content="'.$cardsDescriptions.'">
      <meta property="twitter:image" content="'.$imagen.'">'."\n";
    }
}

?>
