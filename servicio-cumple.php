<?php

require_once 'config/vista.php';

$page = 'Servicios';
$title = "Fotografía de cumpleaños en Arequipa | Sinopsis";
$description = "Fotografía y video de cumpleaños en Arequipa para conservar sonrisas, abrazos y cada detalle de una celebración llena de momentos únicos. Reserva tu fecha.";

require_once "header.php";?>

<!-- TOP HEADER IMAGE -->
        <div class="top-single-bkg topsinglepage">
            <div class="topsingleimg"><img src="uploads/img_paquetes/cumple.webp" alt="Fotografía de cumpleaños Sinopsis Studio" width="1920" height="1080"></div>
            <div class="inner-desc">
                <div class="container">
                    <h1 class="display-2 single-post-title">Cumpleaños</h1>
                    <span class="post-subtitle">Historias que perduran</span>
                </div>
            </div>
        </div>
<!-- /TOP HEADER IMAGE -->

<!-- WRAP CONTENT -->
<div id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix ss-cumple-page">

    <!-- SECCIÓN 1: HERO PROMESA -->
    <section class="ss-landing-section ss-promesa">
        <div class="container alignc">
            <h2 class="ss-promesa-quote">
                "Cada vela guarda un segundo que merece ser recordado. Capturamos risas, miradas y el soplo de vela para que esa tarde viva siempre."
            </h2>
        </div>
    </section>

    <!-- SECCIÓN 2: ¿QUÉ INCLUYE? -->
    <section class="ss-landing-section ss-zigzag-section ss-zigzag-left">
        <div class="ss-zigzag-bg-shape ss-shape-blob-1">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path fill="#F2EAE1" d="M42.7,-73.4C55.9,-67.8,67.6,-57.3,76.5,-44.5C85.4,-31.7,91.5,-15.8,91.3,-0.1C91.1,15.6,84.7,31.2,74.5,43.2C64.3,55.2,50.3,63.6,35.5,70.5C20.7,77.4,5.1,82.8,-9.6,80.7C-24.3,78.6,-38.1,69,-50.2,57.5C-62.3,46,-72.7,32.6,-78.9,16.7C-85.1,0.8,-87.1,-17.7,-81.2,-33.5C-75.3,-49.3,-61.5,-62.4,-46.5,-67.2C-31.5,-72,-15.8,-68.5,0.7,-69.7C17.2,-70.9,34.4,-76.8,42.7,-73.4Z" transform="translate(100 100)" />
            </svg>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="ss-organic-img-container ss-blob-mask-1">
                        <img src="uploads/img_paquetes/cumple_detalle.webp" alt="Decoración y ambiente de cumpleaños" class="ss-section-img" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ss-glass-card" id="tiltGlassCard">
                        <h3 class="ss-section-title">¿Qué incluye la experiencia?</h3>
                        <ul class="ss-checklist ss-features-carousel">
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#E39A4F" stroke-width="2"/></svg> <span>Cobertura documental del evento: llegada, juegos y soplo de vela.</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#E39A4F" stroke-width="2"/></svg> <span>Selección de 25 fotos editadas y galería digital.</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#E39A4F" stroke-width="2"/></svg> <span>Video highlight (3-6 min) con las mejores tomas.</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#E39A4F" stroke-width="2"/></svg> <span>Opciones de impresiones y ampliaciones.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 3: EL VALOR EN UN INSTANTE -->
    <section class="ss-landing-section ss-zigzag-section ss-zigzag-right ss-bg-valor">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="ss-zoom-container img-frame">
                        <img src="uploads/img_paquetes/cumple_momento.webp" alt="Momento emotivo de cumpleaños" class="ss-section-img" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ss-valor-instante-content">
                        <h3 class="ss-valor-title">El valor en un instante</h3>
                        <p class="ss-valor-antes">Antes: "Fotos borrosas y videos cortos que no cuentan la historia completa."</p>
                        <p class="ss-valor-ahora">Ahora: "Un registro cuidado que revive el abrazo, la risa y el deseo pedido al soplar la vela."</p>

                        <div class="ss-micro-historia">
                            <svg class="quote-icon" viewBox="0 0 24 24"><path d="M10 11h-4a3 3 0 0 1 3-3v-2a3 3 0 0 1 3-3h4v8zm11 0h-4a3 3 0 0 1 3-3v-2a3 3 0 0 1 3-3h4v8z"/></svg>
                            <p>"Cuando apagaron la vela, nadie imaginó la risa que vendría después. En el video ese segundo ahora es el corazón del recuerdo."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 4: GALERÍA CINEMATOGRÁFICA -->
    <section class="ss-landing-section ss-galeria-section ss-cinematic-section">
        <div class="container alignc">
            <h3 class="ss-section-title">Nuestras Historias</h3>
            <p class="ss-galeria-subtitle">"Un vistazo a cumpleaños reales que aún se celebran en video."</p>
        </div>

        <div class="ss-cinematic-gallery" id="ssCinematicGallery">
            <div class="ss-cpanel" data-index="0">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/cumple_gal1.webp" alt="Niño soplando vela" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <div class="ss-cpanel" data-index="1">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/cumple_gal2.webp" alt="Familia abrazada en cumpleaños" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <div class="ss-cpanel" data-index="2">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/cumple_gal3.webp" alt="Decoración y risas" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <div class="ss-cpanel" data-index="3">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/cumple_gal4.webp" alt="Amigos celebrando" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <div class="ss-cpanel" data-index="4">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/cumple_gal5.webp" alt="Sorpresa y risas" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN PROCESO, TESTIMONIOS Y PAQUETES -->
    <section class="ss-landing-section ss-proceso-section bg-light">
        <div class="container">
            <h3 class="ss-section-title alignc margin-b50">¿Cómo es el proceso?</h3>
            <div class="ss-timeline">
                <div class="ss-timeline-step">
                    <div class="ss-step-number">1</div>
                    <h4>Contacto</h4>
                    <p>Cuéntanos fecha y lugar para coordinar el plan del día.</p>
                </div>
                <div class="ss-timeline-step">
                    <div class="ss-step-number">2</div>
                    <h4>Coordinación</h4>
                    <p>Definimos los momentos claves: soplo de vela, juegos y fotos familiares.</p>
                </div>
                <div class="ss-timeline-step">
                    <div class="ss-step-number">3</div>
                    <h4>El día</h4>
                    <p>Cubrimos con discreción; tu disfrutas la fiesta mientras nosotros documentamos.</p>
                </div>
                <div class="ss-timeline-step">
                    <div class="ss-step-number">4</div>
                    <h4>Entrega</h4>
                    <p>Galería digital, 25 fotos editadas y video highlight en 22 días.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ss-landing-section ss-testimonios-section">
        <div class="container">
            <h3 class="ss-section-title alignc margin-b40">Lo que dicen nuestras familias</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="ss-testimonio-card">
                        <div class="ss-test-bg-quote">"</div>
                        <div class="ss-stars">★★★★★</div>
                        <p class="ss-test-text">"Capturaron el deseo soplado por la peque y ahora ese video es el favorito de la abuela."</p>
                        <div class="ss-test-author">
                            <div class="ss-author-avatar">M</div>
                            <span>María R.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ss-testimonio-card">
                        <div class="ss-test-bg-quote">"</div>
                        <div class="ss-stars">★★★★★</div>
                        <p class="ss-test-text">"El video del cumpleaños fue lo mejor: las tomas de la torta y las caras de sorpresa quedaron perfectas."</p>
                        <div class="ss-test-author">
                            <div class="ss-author-avatar">J</div>
                            <span>José A.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ss-testimonio-card">
                        <div class="ss-test-bg-quote">"</div>
                        <div class="ss-stars">★★★★★</div>
                        <p class="ss-test-text">"Profesionales, discretos y el resultado emocionó a toda la familia. Recomendados 100%."</p>
                        <div class="ss-test-author">
                            <div class="ss-author-avatar">R</div>
                            <span>Rosa M.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PAQUETES -->
    <section class="ss-landing-section ss-paquetes-section bg-light" id="paquetes">
        <div class="container margin-b30">
            <div class="padding-lr200 alignc">
                <div class="el-smalltitle">Nuestros Planes</div>
                <h3 class="ss-section-title">Elige cómo quieres recordar este día</h3>
            </div>
        </div>
        <div class="container">
            <?php
            require_once 'include/components/paquetes-grid.php';
            require_once 'include/components/paquete-card.php';

            $packages = [

                [
                    "name"           => "Cumpleaños · Cobertura de Evento",
                    "description"    => "Capturamos momentos genuinos y llenos de vida en nuestras fotos.",
                    "price"          => [
                        "S/ 250 Fotografía",
                        "S/ 300 Video",
                        "S/ 550 Foto y video"
                    ],
                    "priceNote"      => "",
                    "category"       => "Eventos",
                    "badge"          => "Recomendado",
                    "includes"       => [
                        "Cobertura documental del evento"
                    ],
                    "delivery"       => [
                        "Galería digital",
                        "25 fotos editadas profesionalmente",
                        "Video highlight (3-6 min)"
                    ],
                    "considerations" => [
                        "No incluye pasajes",
                        "Entrega: 22 días aprox."
                    ],
                    "promo"          => "",
                    "image"          => "uploads/img_paquetes/cumple.webp",
                ],

            ];

            renderPaquetesGrid($packages);
            ?>
        </div>
    </section>

    <!-- SECCIÓN FAQ -->
    <section class="ss-landing-section ss-faq-section">
        <div class="container">
            <h3 class="ss-section-title alignc margin-b50">Preguntas Frecuentes</h3>
            <div class="ss-faq-list" id="ssFaqList">
                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">¿Qué incluye la cobertura de cumpleaños?<span class="ss-faq-icon" aria-hidden="true"></span></button>
                    <div class="ss-faq-answer"><p>Incluye cobertura documental, galería digital, fotografías editadas y video highlight según el paquete elegido.</p></div>
                </div>
                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">¿Cuánto tarda la entrega?<span class="ss-faq-icon" aria-hidden="true"></span></button>
                    <div class="ss-faq-answer"><p>La entrega estándar se realiza aproximadamente en 22 días. El plazo puede variar según el paquete y la cantidad de material.</p></div>
                </div>
                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">¿Realizan cobertura fuera de Arequipa?<span class="ss-faq-icon" aria-hidden="true"></span></button>
                    <div class="ss-faq-answer"><p>Sí. Coordinamos el desplazamiento y cualquier viático adicional antes de reservar la fecha.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA FINAL -->
    <div class="ss-landing-cta-final">
        <div class="container alignc">
            <h2 class="display-4 margin-b30 ss-cta-title">¿Listo para convertir este cumpleaños en un recuerdo?</h2>
            <p class="ss-cta-desc">Escríbenos por WhatsApp y coordinamos fecha y paquete.</p>
            <a href="https://wa.me/51941221847?text=Hola%2C%20quiero%20cotizar%20el%20servicio%20de%20Cumplea%C3%B1os" target="_blank" rel="noopener noreferrer" class="ss-btn-primary">Cotizar Mi Cumple</a>
        </div>
    </div>

</div>
<!-- /WRAP CONTENT -->

<?php require_once "footer.php";?>

<!-- SCRIPTS DE PÁGINA: reutilizamos comportamientos existentes (galería, timeline, tilt) -->
<script>
(function () {
    var isMobile = window.innerWidth <= 768 || window.matchMedia('(hover: none)').matches;
    var gallery = document.getElementById('ssCinematicGallery');
    if (gallery) {
        var panels = Array.from(gallery.querySelectorAll('.ss-cpanel'));
        if (!isMobile) {
            var lastActive = null;
            panels.forEach(function (panel) {
                panel.addEventListener('mouseenter', function () {
                    gallery.classList.add('is-hovered');
                    panels.forEach(function (p) { p.classList.remove('active'); });
                    panel.classList.add('active');
                    lastActive = panel;
                });
            });
        } else {
            gallery.classList.add('is-mobile-scroll');
            var galleryObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    entry.target.classList.toggle('active', entry.isIntersecting);
                });
            }, { root: gallery, rootMargin: '0px', threshold: 0.55 });
            panels.forEach(function (panel) { galleryObserver.observe(panel); });
        }
    }

    var timelineSteps = document.querySelectorAll('.ss-timeline-step');
    if (timelineSteps.length) {
        var activateAll = function () { timelineSteps.forEach(function (step) { step.classList.add('is-active'); }); };
        if (window.innerWidth > 768) {
            activateAll();
        } else {
            var timelineObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) { entry.target.classList.toggle('is-active', entry.isIntersecting); });
            }, { root: null, rootMargin: '-35% 0px -35% 0px', threshold: 0 });
            timelineSteps.forEach(function (step) { timelineObserver.observe(step); });
        }
    }

    var tiltCard = document.getElementById('tiltGlassCard');
    if (tiltCard && !isMobile) {
        tiltCard.style.transformStyle = 'preserve-3d';
        tiltCard.addEventListener('mousemove', function (event) {
            var rect = tiltCard.getBoundingClientRect();
            var x = event.clientX - rect.left;
            var y = event.clientY - rect.top;
            var rx = ((y - rect.height / 2) / (rect.height / 2)) * -8;
            var ry = ((x - rect.width / 2) / (rect.width / 2)) * 8;
            tiltCard.style.transition = 'transform 0.1s ease';
            tiltCard.style.transform = 'perspective(1200px) rotateX(' + rx + 'deg) rotateY(' + ry + 'deg) scale3d(1.02,1.02,1.02)';
        });
        tiltCard.addEventListener('mouseleave', function () {
            tiltCard.style.transition = 'transform 0.6s cubic-bezier(0.25,1,0.5,1)';
            tiltCard.style.transform = 'perspective(1200px) rotateX(0deg) rotateY(0deg) scale3d(1,1,1)';
        });
    }

    var faqButtons = document.querySelectorAll('.ss-faq-question');
    faqButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var shouldOpen = button.getAttribute('aria-expanded') !== 'true';
            faqButtons.forEach(function (item) {
                item.setAttribute('aria-expanded', 'false');
                item.nextElementSibling.classList.remove('is-open');
            });
            if (shouldOpen) {
                button.setAttribute('aria-expanded', 'true');
                button.nextElementSibling.classList.add('is-open');
            }
        });
    });
})();
</script>

</body>
</html>
