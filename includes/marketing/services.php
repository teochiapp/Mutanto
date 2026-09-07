<section id="marketing-services" class="marketing-services">
     <div class="services-header">
        <h4 class="services-eyebrow"><?php echo $marketingData['services']['header']; ?></h4>
        <h2 class="services-title"><?php echo $marketingData['services']['title']; ?></h2>
    </div>
    
    <div class="services-grid">
        <?php foreach ($marketingData['services']['items'] as $item): ?>
            <div class="service-card">
                <div class="service-icon">
                    <?php echo $item['icon']; ?>
                </div>
                <h3 class="service-title"><?php echo $item['title']; ?></h3>
            </div>
        <?php endforeach; ?>
    </div>
</section>
