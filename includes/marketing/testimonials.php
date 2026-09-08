<section id="marketing-testimonials" class="marketing-testimonials">

  <div class="marketing-testimonials__head reveal-on-scroll">
    <p class="marketing-testimonials__eyebrow"><?php echo $marketingData['testimonials']['eyebrow']; ?></p>
    <h2 class="marketing-testimonials__title"><?php echo $marketingData['testimonials']['title']; ?></h2>
  </div>

  <div class="marketing-testimonials__grid reveal-stagger">
    <?php foreach ($marketingData['testimonials']['items'] as $testimonial) : ?>
      <?php $avatar = !empty($testimonial['avatar']) ? $testimonial['avatar'] : $marketingData['testimonials']['default_avatar']; ?>
      <figure class="marketing-testimonials__card reveal-on-scroll">
        <svg class="marketing-testimonials__quote" width="26" height="20" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M0 24 6.4 0h7.2L9.6 24H0Zm18.4 0L24.8 0H32l-4 24h-9.6Z" fill="#84FF5F"/>
        </svg>

        <blockquote class="marketing-testimonials__text"><?php echo $testimonial['quote']; ?></blockquote>

        <figcaption class="marketing-testimonials__author">
          <img class="marketing-testimonials__avatar" src="<?php echo $avatar; ?>" alt="<?php echo $testimonial['name']; ?>" loading="lazy" width="48" height="48">
          <span class="marketing-testimonials__author-info">
            <span class="marketing-testimonials__name"><?php echo $testimonial['name']; ?></span>
            <span class="marketing-testimonials__role"><?php echo $testimonial['role']; ?></span>
          </span>
        </figcaption>
      </figure>
    <?php endforeach; ?>
  </div>

</section>
