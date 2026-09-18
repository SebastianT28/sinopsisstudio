<?php
/**
 * Componente: Grid de Categorías de Servicios
 * Renderiza la columna vertical de paneles con carrusel por categoría.
 *
 * Cada $servicio del array debe tener:
 *   - nombre     (string)
 *   - descripcion (string)
 *   - imagenes   (array de rutas relativas)
 *   - url        (string) URL destino al hacer clic — vacío si es "Próximamente"
 *   - proximamente (bool) opcional
 */
function renderServiciosGrid(array $servicios): void {
?>
<div class="ss-servicios-grid">
    <?php foreach ($servicios as $i => $servicio):
        $esProximamente = !empty($servicio['proximamente']);
        $hayMultiplesImagenes = count($servicio['imagenes']) > 1;
        $swiperClass = 'servicio-swiper-' . $i;
    ?>
    <div class="ss-servicio-panel <?= $esProximamente ? 'ss-servicio-panel--soon' : '' ?>">

        <?php if ($esProximamente): ?>
            <!-- Panel sin enlace de destino -->
            <div class="ss-servicio-panel__inner">
        <?php else: ?>
            <a href="<?= htmlspecialchars($servicio['url']) ?>" class="ss-servicio-panel__inner" aria-label="Ver paquetes de <?= htmlspecialchars($servicio['nombre']) ?>">
        <?php endif; ?>

            <!-- ZONA IMAGEN / CARRUSEL -->
            <div class="ss-servicio-panel__media">

                <?php if ($hayMultiplesImagenes): ?>
                    <!-- Carrusel Swiper para múltiples imágenes -->
                    <div class="swiper <?= $swiperClass ?> ss-servicio-swiper" data-autoplay="3800">
                        <div class="swiper-wrapper">
                            <?php foreach ($servicio['imagenes'] as $img): ?>
                            <div class="swiper-slide">
                                <img
                                    src="<?= htmlspecialchars($img) ?>"
                                    alt="<?= htmlspecialchars($servicio['nombre']) ?>"
                                    loading="lazy"
                                    class="ss-servicio-img"
                                >
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Imagen única -->
                    <img
                        src="<?= htmlspecialchars($servicio['imagenes'][0]) ?>"
                        alt="<?= htmlspecialchars($servicio['nombre']) ?>"
                        loading="lazy"
                        class="ss-servicio-img"
                    >
                <?php endif; ?>

                <?php if ($esProximamente): ?>
                    <div class="ss-servicio-badge-soon">Próximamente</div>
                <?php endif; ?>

            </div><!-- /media -->

            <!-- PIE DEL PANEL -->
            <div class="ss-servicio-panel__footer">
                <div class="ss-servicio-panel__footer-inner">
                    <h2 class="ss-servicio-nombre"><?= htmlspecialchars($servicio['nombre']) ?></h2>
                    <p class="ss-servicio-desc"><?= htmlspecialchars($servicio['descripcion']) ?></p>
                </div>
                <?php if (!$esProximamente): ?>
                    <span class="ss-servicio-cta" aria-hidden="true">
                        Ver paquetes
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </span>
                <?php else: ?>
                    <span class="ss-servicio-cta ss-servicio-cta--soon" aria-hidden="true">Próximamente</span>
                <?php endif; ?>
            </div><!-- /footer -->

        <?php if ($esProximamente): ?>
            </div><!-- /inner div -->
        <?php else: ?>
            </a><!-- /inner a -->
        <?php endif; ?>

    </div><!-- /panel -->
    <?php endforeach; ?>
</div><!-- /ss-servicios-grid -->

<script>
// Inicializa los carruseles de servicios tras cargar la página
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.ss-servicio-swiper').forEach(function (el) {
        var delay = parseInt(el.dataset.autoplay) || 3800;
        new Swiper(el, {
            loop: true,
            effect: 'fade',
            fadeEffect: { crossFade: true },
            speed: 900,
            autoplay: {
                delay: delay,
                disableOnInteraction: false
            },
            allowTouchMove: false
        });
    });
});
</script>
<?php
}
?>
