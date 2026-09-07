<section id="marketing-hero" class="marketing-hero">
  <!-- Background Elements -->
  <div class="marketing-hero__star-1"></div>
  <div class="marketing-hero__star-2"></div>
  
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
