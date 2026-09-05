<section id="marketing-benefits" class="marketing-benefits">
    <div class="textCenter mutanto__fix-1">
        <h2 class="verdeMutanto"><?php echo $marketingData['benefits']['header']; ?></h2>
        <h2 class="blancoMuntanto" style="font-weight: 700; margin-bottom: 50px;"><?php echo $marketingData['benefits']['title']; ?></h2>
    </div>
    <div class="benefits-container">
        <?php foreach($marketingData['benefits']['items'] as $benefit): ?>
        <div class="benefit-card">
            <h3 class="blancoMuntanto"><?php echo $benefit['title']; ?></h3>
            <p class="blancoMuntanto"><?php echo $benefit['description']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>
