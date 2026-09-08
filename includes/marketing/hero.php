<?php
  // Items del slider (carrusel) que va debajo del hero
  $marketingHeroSliderItems = [
    'Web design',
    'Campaign visuals',
    'One-pagers',
    'Landing pages',
    'Pitch decks',
    'Email graphics',
    'Social ads',
    'Brand assets',
  ];
?>
<section id="marketing-hero" class="marketing-hero">
  <!-- Background Elements: estrellas verdes -->
  <img class="marketing-hero__star marketing-hero__star--left"
       src="<?php echo (URL_SITE) ?>img/marketing/hero/hero-star-left.svg"
       alt="" aria-hidden="true" role="presentation">
  <img class="marketing-hero__star marketing-hero__star--right"
       src="<?php echo (URL_SITE) ?>img/marketing/hero/hero-star-right.svg"
       alt="" aria-hidden="true" role="presentation">
  <img class="marketing-hero__star marketing-hero__star--mobile-top"
       src="<?php echo (URL_SITE) ?>img/marketing/hero/hero-star-mobile-top.svg"
       alt="" aria-hidden="true" role="presentation">
  <img class="marketing-hero__star marketing-hero__star--mobile-bottom"
       src="<?php echo (URL_SITE) ?>img/marketing/hero/hero-star-mobile-bottom.svg"
       alt="" aria-hidden="true" role="presentation">

  <!-- Content -->
  <div class="marketing-hero__content">
    <div class="marketing-hero__eyebrow">
      <?php echo $marketingData['hero']['eyebrow']; ?>
    </div>

    <h1 class="marketing-hero__title">
      <?php echo $marketingData['hero']['title']; ?><br>
      <span class="marketing-hero__title-highlight"><?php echo $marketingData['hero']['title_highlight']; ?></span>
    </h1>

    <div class="marketing-hero__description">
      <?php echo $marketingData['hero']['description']; ?>
    </div>
  </div>
</section>

<!-- Slider / marquee infinito -->
<div class="marketing-hero-slider" aria-hidden="true">
  <div class="marketing-hero-slider__track">
    <?php for ($i = 0; $i < 4; $i++) : ?>
      <div class="marketing-hero-slider__group">
        <?php foreach ($marketingHeroSliderItems as $item) : ?>
          <span class="marketing-hero-slider__item">
            <img class="marketing-hero-slider__star" src="<?php echo (URL_SITE) ?>img/green-start.svg" alt="" aria-hidden="true">
            <?php echo $item; ?>
          </span>
        <?php endforeach; ?>
      </div>
    <?php endfor; ?>
  </div>
</div>
