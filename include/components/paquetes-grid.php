<?php
function renderPaquetesGrid($pkgarr) {
?>
<div class="paquetes-grid">
    <?php
    require_once 'include/components/paquete-card.php'; 
    foreach ($pkgarr as $pkg): 
        renderPricingCard($pkg);
    endforeach; ?>
</div>
<?php } ?>
