<?php
function renderPricingCard($pkg) {

    $categoryStyles = [
        "Studio" => [
            "tagBg" => "#f3eaf0",
            "tagText" => "#8b5070",
            "accent" => "#c9a6b8",
            "border" => "#e8d5e0",
            "check" => "#c9a6b8"
        ],
        "Exterior" => [
            "tagBg" => "#e8f0ea",
            "tagText" => "#3d7a52",
            "accent" => "#7aad8a",
            "border" => "#cde3d4",
            "check" => "#7aad8a"
        ],
        "Eventos" => [
            "tagBg" => "#fceee8",
            "tagText" => "#9b5040",
            "accent" => "#d4876e",
            "border" => "#f0d5cc",
            "check" => "#d4876e"
        ],
        "Corporativo" => [
            "tagBg" => "#f5f0e5",
            "tagText" => "#7a6030",
            "accent" => "#c4a96e",
            "border" => "#e8dfc8",
            "check" => "#c4a96e"
        ],
    ];

    $styles = $categoryStyles[$pkg["category"]];
    $isHighlighted = isset($pkg["badge"]) &&
        ($pkg["badge"] === "Más popular" || $pkg["badge"] === "Premium");
?>

<div class="pricing-card" 
     style="border-color: <?= $styles['border'] ?>;
            box-shadow: <?= $isHighlighted 
                ? "0 4px 24px rgba(0,0,0,0.10)" 
                : "0 2px 12px rgba(0,0,0,0.06)" ?>">

    <?php if (!empty($pkg["image"])): ?>
        <div class="card-image-wrapper"
        style="border-bottom: 3px solid <?= $styles['accent'] ?>;">
        <?php
        $imgPath = $_SERVER['DOCUMENT_ROOT'] . '/' . ltrim($pkg["image"], '/');
        $imgSize = getimagesize($imgPath);
        ?>
        <div class="galeria">
            <a href="<?= URL . $pkg["image"] ?>"
            data-pswp-width="<?= $imgSize[0] ?>"
            data-pswp-height="<?= $imgSize[1] ?>">

                <img src="<?= URL . $pkg["image"] ?>" alt="<?= $pkg["name"] ?>">

            </a>
        </div>
            

            <?php if (!empty($pkg["badge"])): ?>
                <div class="badge"><?= $pkg["badge"] ?></div>
            <?php endif; ?>

            <span class="category-tag image-tag"
                style="background: <?= $styles['tagBg'] ?>; color: <?= $styles['tagText'] ?>">
                <?= $pkg["category"] ?>
            </span>

            <div class="zoom-btn" onclick="this.closest('.card-image-wrapper').querySelector('a').click();">
                +
            </div>
        </div>
    <?php endif; ?>

    <div class="card-content">
        <div class="card-info">

            <h3 class="card-title"><?= $pkg["name"] ?></h3>

            <?php if (!empty($pkg["description"])): ?>
                <p class="card-description"><?= $pkg["description"] ?></p>
            <?php endif; ?>

            <hr>

            <h4>Incluye</h4>
            <ul>
                <?php foreach ($pkg["includes"] as $item): ?>
                    <li>
                        <span class="check" style="color: <?= $styles['check'] ?>">✔</span>
                        <?= $item ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <hr>

            <h4>Entrega</h4>
            <ul>
                <?php foreach ($pkg["delivery"] as $item): ?>
                    <li>📦 <?= $item ?></li>
                <?php endforeach; ?>
            </ul>

            <hr>

            <?php if (!empty($pkg["considerations"] ?? [])): ?>
                <h4>Consideraciones</h4>
                <ul class="considerations">
                    <?php foreach ($pkg["considerations"] as $item): ?>
                        <li>* <?= $item ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            
            <?php if (!empty($pkg["promo"])): ?>
                <div class="promo-box">
                    <strong>Promo especial</strong>
                    <p><?= $pkg["promo"] ?></p>
                </div>
            <?php endif; ?>

            <!-- 
            <div class="card-price">
                <?php foreach ($pkg["price"] as $item): ?>
                    <?= $item ?><br/>
                <?php endforeach; ?>
            </div>

            <?php if (!empty($pkg["priceNote"])): ?>
                <p class="price-note"><?= $pkg["priceNote"] ?></p>
            <?php endif; ?>
            -->

        </div>

        <button 
        onclick="window.open('https://wa.me/51941221847?text=Hola,%20quiero%20cotizar%20el%20paquete%20<?= urlencode($pkg["name"]) ?>','_blank')"
        class="btn-cta <?= $isHighlighted ? "highlighted" : "" ?>">
            Cotizar
        </button>

    </div>
</div>

<?php } ?>

