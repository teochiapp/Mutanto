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
  <div class="marketing-hero__content reveal-on-scroll">
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

    <div class="marketing-hero__mobile-actions">
      <a href="https://calendly.com/holamutanto/30min?month=<?php echo date('Y-m'); ?>" target="_blank" class="cta-button cta-button--solid" style="width: 100%;">
        Book a free 30-min call
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#101010" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="7" y1="17" x2="17" y2="7"></line>
          <polyline points="7 7 17 7 17 17"></polyline>
        </svg>
      </a>
      <a href="https://wa.me/5493516362772" target="_blank" class="cta-button cta-button--outline" style="width: 100%;">
        Contact us
        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.5487 4.24963C9.16775 4.24963 3.97475 9.25138 3.9725 15.3984C3.971 17.3641 4.505 19.2826 5.5175 20.9724L3.875 26.7496L10.0122 25.1994C11.7194 26.0924 13.6176 26.5582 15.5442 26.5569H15.5487C21.9297 26.5569 27.1227 21.5544 27.125 15.4074C27.1265 12.4299 25.9235 9.62713 23.7372 7.52038C21.5517 5.41288 18.6455 4.25038 15.5487 4.24963ZM15.5487 24.6736H15.545C13.8185 24.6736 12.125 24.2266 10.6475 23.3821L10.295 23.1811L6.6545 24.1006L7.6265 20.6806L7.39775 20.3304C6.43693 18.865 5.92545 17.1507 5.92625 15.3984C5.9285 10.2886 10.2455 6.13288 15.5525 6.13288C18.122 6.13363 20.5377 7.09888 22.355 8.85013C24.1722 10.6014 25.172 12.9301 25.1705 15.4066C25.1682 20.5164 20.852 24.6736 15.548 24.6736H15.5487ZM20.8265 17.7324C20.537 17.5936 19.115 16.9194 18.8495 16.8256C18.5847 16.7334 18.392 16.6854 18.1992 16.9644C18.0072 17.2434 17.4522 17.8711 17.2842 18.0564C17.1147 18.2424 16.946 18.2649 16.6565 18.1261C16.367 17.9866 15.4347 17.6926 14.3307 16.7431C13.4705 16.0051 12.89 15.0931 12.7212 14.8134C12.5525 14.5351 12.7032 14.3844 12.848 14.2456C12.9777 14.1219 13.1375 13.9209 13.2815 13.7581C13.4255 13.5954 13.4735 13.4791 13.571 13.2931C13.667 13.1079 13.619 12.9444 13.5462 12.8056C13.4735 12.6654 12.896 11.2944 12.6537 10.7371C12.4197 10.1941 12.1812 10.2669 12.0035 10.2579C11.8347 10.2504 11.6427 10.2481 11.4485 10.2481C11.2572 10.2481 10.943 10.3179 10.6775 10.5969C10.4127 10.8759 9.665 11.5494 9.665 12.9204C9.665 14.2921 10.7015 15.6166 10.8462 15.8026C10.991 15.9879 12.8862 18.8026 15.788 20.0101C16.478 20.2959 17.0165 20.4676 17.4372 20.5966C18.1302 20.8089 18.761 20.7781 19.259 20.7069C19.814 20.6266 20.9705 20.0334 21.2105 19.3831C21.452 18.7329 21.452 18.1749 21.38 18.0586C21.3095 17.9424 21.116 17.8726 20.8265 17.7324Z" fill="#84FF5F"/>
        </svg>
      </a>
      <a href="<?php echo URL_SITE ?>en/contact-us/" class="cta-button cta-button--outline" style="width: 100%;">
        Email us
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22 7L13.009 12.727C12.7039 12.9042 12.3573 12.9976 12.0045 12.9976C11.6517 12.9976 11.3051 12.9042 11 12.727L2 7M4 4H20C21.1046 4 22 4.89543 22 6V18C22 19.1046 21.1046 20 20 20H4C2.89543 20 2 19.1046 2 18V6C2 4.89543 2.89543 4 4 4Z" stroke="#84FF5F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </div>
</section>

<div class="marketing-hero-slider" aria-hidden="true">
  <div class="marketing-hero-slider__track">
    <?php for ($i = 0; $i < 4; $i++) : ?>
      <div class="marketing-hero-slider__group">
        <?php foreach ($marketingHeroSliderItems as $item) : ?>
          <span class="marketing-hero-slider__item">
            <img class="marketing-hero-slider__star" src="<?php echo (URL_SITE) ?>img/marketing/hero/hero-marquee-star.svg" alt="" aria-hidden="true">
            <?php echo $item; ?>
          </span>
        <?php endforeach; ?>
      </div>
    <?php endfor; ?>
  </div>
</div>
