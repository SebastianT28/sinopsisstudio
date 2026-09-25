<?php

require_once 'config/vista.php';

$page = 'Servicios';
$title = "Fotografía y video de bodas en Arequipa | Sinopsis";
$description = "Fotografía y video de bodas en Arequipa con una mirada sensible y cinematográfica para contar la historia de vuestro día más importante. Agenda una reunión.";

require_once "header.php";?>

<!-- TOP HEADER IMAGE -->
        <div class="top-single-bkg topsinglepage">
            <div class="topsingleimg"><img src="images/pages/headboda.jpg" alt="Fotografía de Bodas Sinopsis Studio" width="1920" height="1080" style="filter:grayscale(0.4)"></div>
            <div class="inner-desc">
                <div class="container">
                    <h1 class="display-2 single-post-title">Bodas</h1>
                    <span class="post-subtitle">Fotografía y video cinematográfico</span>
                </div>
            </div>
        </div>
<!-- /TOP HEADER IMAGE -->

<!-- WRAP CONTENT -->
        <div id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix ss-bodas-page">

            <!-- BACK LINK -->
            <div class="container" style="padding-top: 48px;">
                <a href="paquetes" class="ss-back-link" style="display:inline-flex;align-items:center;gap:6px;font-family:Manrope,sans-serif;font-size:.82rem;font-weight:600;letter-spacing:.07em;text-transform:uppercase;color:#777;text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                    Todos los servicios
                </a>
            </div>

            <!-- SECCIÓN 1: PROMESA -->
            <section class="ss-landing-section ss-promesa">
                <div class="container alignc">
                    <h2 class="ss-promesa-quote">"El amor merece una película; nosotros contamos la tuya con calma y belleza."</h2>
                </div>
            </section>

            <!-- SECCIÓN 2: ZIGZAG INFORMATIVO -->
            <section class="ss-landing-section ss-zigzag-section ss-zigzag-left">
                <div class="ss-zigzag-bg-shape ss-shape-blob-1">
                    <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                      <path fill="#F6F1EE" d="M42.7,-73.4C55.9,-67.8,67.6,-57.3,76.5,-44.5C85.4,-31.7,91.5,-15.8,91.3,-0.1C91.1,15.6,84.7,31.2,74.5,43.2C64.3,55.2,50.3,63.6,35.5,70.5C20.7,77.4,5.1,82.8,-9.6,80.7C-24.3,78.6,-38.1,69,-50.2,57.5C-62.3,46,-72.7,32.6,-78.9,16.7C-85.1,0.8,-87.1,-17.7,-81.2,-33.5C-75.3,-49.3,-61.5,-62.4,-46.5,-67.2C-31.5,-72,-15.8,-68.5,0.7,-69.7C17.2,-70.9,34.4,-76.8,42.7,-73.4Z" transform="translate(100 100)" />
                    </svg>
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="ss-organic-img-container ss-blob-mask-1 img-frame">
                                <img src="images/pages/boda1.jpg" alt="Boda - momento" class="ss-section-img" loading="lazy" decoding="async" style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ss-glass-card" id="tiltGlassCard">
                                <h3 class="ss-section-title">Cobertura integral</h3>
                                <ul class="ss-checklist ss-features-carousel">
                                    <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#A77B6B" stroke-width="2"/></svg> <span>Ceremonia y recepción: registro documental completo.</span></li>
                                    <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#A77B6B" stroke-width="2"/></svg> <span>Sesión pareja / post-boda en locación elegida.</span></li>
                                    <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#A77B6B" stroke-width="2"/></svg> <span>Edición profesional: fotos y video highlight.</span></li>
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
                                <img src="images/pages/img-about.jpg" alt="Votos y promesas" class="ss-section-img" loading="lazy" decoding="async" style="object-fit: cover; width: 100%; height: 100%;">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ss-valor-instante-content">
                                <h3 class="ss-valor-title">El valor en un instante</h3>
                                <p class="ss-valor-antes">Antes: "Recuerdos dispersos y difíciles de reunir."</p>
                                <p class="ss-valor-ahora">Ahora: "Un relato unificado donde cada gesto y mirada tiene su lugar."</p>

                                <div class="ss-micro-historia">
                                    <svg class="quote-icon" viewBox="0 0 24 24"><path d="M10 11h-4a3 3 0 0 1 3-3v-2a3 3 0 0 1 3-3h4v8zm11 0h-4a3 3 0 0 1 3-3v-2a3 3 0 0 1 3-3h4v8z"/></svg>
                                    <p>"Cuando pronunciaron sus votos, la risa y la lágrima ocurrieron en el mismo segundo. Ese instante ahora vive en la foto y en el video."</p>
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
                    <p class="ss-galeria-subtitle">"Un vistazo a bodas que aún laten en las imágenes."</p>
                </div>

                <div class="ss-cinematic-gallery" id="ssCinematicGallery">
                    <div class="ss-cpanel" data-index="0">
                        <div class="ss-cpanel__img-wrapper">
                            <img src="images/pages/portfolio1-page.jpg" alt="Votos" loading="lazy" style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <div class="ss-cpanel__overlay"></div>
                    </div>
                    <div class="ss-cpanel" data-index="1">
                        <div class="ss-cpanel__img-wrapper">
                            <img src="images/pages/img-about1.jpg" alt="Sesión pareja" loading="lazy" style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <div class="ss-cpanel__overlay"></div>
                    </div>
                    <div class="ss-cpanel" data-index="2">
                        <div class="ss-cpanel__img-wrapper">
                            <img src="images/pages/faq-1.jpg" alt="Recepción" loading="lazy" style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <div class="ss-cpanel__overlay"></div>
                    </div>
                    <div class="ss-cpanel" data-index="3">
                        <div class="ss-cpanel__img-wrapper">
                            <img src="images/pages/img-pricing.jpg" alt="Detalles" loading="lazy" style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <div class="ss-cpanel__overlay"></div>
                    </div>
                    <div class="ss-cpanel" data-index="4">
                        <div class="ss-cpanel__img-wrapper">
                            <img src="images/pages/contact-page.jpg" alt="Celebración" loading="lazy" style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <div class="ss-cpanel__overlay"></div>
                    </div>
                </div>
            </section>

            <!-- SECCIÓN FAQ -->
            <section class="ss-landing-section ss-faq-section">
                <div class="container">
                    <h3 class="ss-section-title alignc margin-b50">Preguntas Frecuentes</h3>
                    <div class="ss-faq-list" id="ssFaqList">

                        <div class="ss-faq-item">
                            <button class="ss-faq-question" aria-expanded="false">
                                ¿Qué incluye la cobertura de bodas?
                                <span class="ss-faq-icon" aria-hidden="true"></span>
                            </button>
                            <div class="ss-faq-answer">
                                <p>Nuestros paquetes incluyen cobertura documental del día, sesión pareja, edición profesional de fotos y un video highlight. Los detalles varían según el paquete; solicita cotización para tu fecha.</p>
                            </div>
                        </div>

                        <div class="ss-faq-item">
                            <button class="ss-faq-question" aria-expanded="false">
                                ¿Cuánto tardan en entregar las fotos y el video?
                                <span class="ss-faq-icon" aria-hidden="true"></span>
                            </button>
                            <div class="ss-faq-answer">
                                <p>La entrega estándar es de aproximadamente 22 días para galería y 30-45 días para paquetes con video, dependiendo de la carga de trabajo y la edición requerida.</p>
                            </div>
                        </div>

                        <div class="ss-faq-item">
                            <button class="ss-faq-question" aria-expanded="false">
                                ¿Cobran desplazamiento fuera de Arequipa?
                                <span class="ss-faq-icon" aria-hidden="true"></span>
                            </button>
                            <div class="ss-faq-answer">
                                <p>Los eventos dentro de Arequipa están cubiertos; para locaciones fuera de la ciudad se aplica un recargo por viáticos que cotizamos al confirmar la fecha.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- SECCIÓN 5: TESTIMONIOS -->
            <section class="ss-landing-section ss-testimonios-section">
                <div class="container">
                    <h3 class="ss-section-title alignc margin-b40">Lo que dicen nuestras parejas</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="ss-testimonio-card">
                                <div class="ss-test-bg-quote">"</div>
                                <div class="ss-stars">★★★★★</div>
                                <p class="ss-test-text">"Contrataron con discreción y nos regalaron imágenes que valen más que mil palabras."</p>
                                <div class="ss-test-author">
                                    <div class="ss-author-avatar">A</div>
                                    <span>Ana y Luis</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="ss-testimonio-card">
                                <div class="ss-test-bg-quote">"</div>
                                <div class="ss-stars">★★★★★</div>
                                <p class="ss-test-text">"El video highlight nos hace revivir el día cada vez que lo vemos."</p>
                                <div class="ss-test-author">
                                    <div class="ss-author-avatar">C</div>
                                    <span>Carlos &amp; María</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="ss-testimonio-card">
                                <div class="ss-test-bg-quote">"</div>
                                <div class="ss-stars">★★★★★</div>
                                <p class="ss-test-text">"Profesionales, cercanos y con una sensibilidad única para capturar emociones."</p>
                                <div class="ss-test-author">
                                    <div class="ss-author-avatar">M</div>
                                    <span>Marcos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECCIÓN 6: PAQUETES (placeholder) -->
            <section class="ss-landing-section ss-paquetes-section bg-light" id="paquetes">
                <div class="container margin-b30">
                    <div class="padding-lr200 alignc">
                        <div class="el-smalltitle">Nuestros Planes</div>
                        <h3 class="ss-section-title">Paquetes para bodas</h3>
                    </div>
                </div>
                <div class="container">
                    <?php
                    require_once 'include/components/paquetes-grid.php';
                    require_once 'include/components/paquete-card.php';

                    $packages = [
                        [
                            "name" => "Boda · Cobertura Completa",
                            "description" => "Cobertura documental del día entero, desde preparación hasta el final de la fiesta.",
                            "price" => ["Consultar"],
                            "category" => "Eventos",
                            "includes" => ["Ceremonia", "Sesión pareja", "Recepción"],
                            "delivery" => ["Galería digital", "Video highlight"],
                            "considerations" => ["Consultar desplazamientos"],
                            "image" => "uploads/img_paquetes/bodas.webp",
                        ],
                    ];

                    renderPaquetesGrid($packages);
                    ?>
                </div>
            </section>

            <!-- CTA FINAL -->
            <div class="ss-landing-cta-final">
                <div class="container alignc">
                    <h2 class="display-4 margin-b30 ss-cta-title">¿Listo para convertir tu boda en un recuerdo?</h2>
                    <p class="ss-cta-desc">Escríbenos por WhatsApp y coordinamos la cobertura, la fecha y el paquete ideal para tu gran día.</p>
                    <a href="https://wa.me/51941221847?text=Hola%2C%20quiero%20cotizar%20el%20servicio%20de%20Bodas" target="_blank" rel="noopener noreferrer" class="ss-btn-primary">Cotizar por WhatsApp</a>
                </div>
            </div>

        </div>
<!-- /WRAP CONTENT -->

    <?php require_once "footer.php";?>
<!-- SCRIPTS DE PÁGINA -->
<script>
(function () {
    var isMobile = window.innerWidth <= 768 || window.matchMedia('(hover: none)').matches;

    /* ── Galería cinematográfica ── */
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
            gallery.addEventListener('mouseleave', function () {
                if (lastActive) {
                    panels.forEach(function (p) { p.classList.remove('active'); });
                    lastActive.classList.add('active');
                    gallery.classList.add('is-hovered');
                }
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

    /* ── Línea de tiempo (scroll móvil) ── */
    var timelineSteps = document.querySelectorAll('.ss-timeline-step');
    if (timelineSteps.length) {
        var activateAll = function () { timelineSteps.forEach(function (s) { s.classList.add('is-active'); }); };
        if (window.innerWidth > 768) { activateAll(); }
        else {
            var tlObserver = new IntersectionObserver(function (entries) {
                if (window.innerWidth > 768) { activateAll(); return; }
                entries.forEach(function (entry) { entry.target.classList.toggle('is-active', entry.isIntersecting); });
            }, { root: null, rootMargin: '-35% 0px -35% 0px', threshold: 0 });
            timelineSteps.forEach(function (step) { tlObserver.observe(step); });
            window.addEventListener('resize', function () { if (window.innerWidth > 768) { activateAll(); } });
        }
    }

    /* ── 3D Tilt tarjeta de cristal (solo desktop) ── */
    var tiltCard = document.getElementById('tiltGlassCard');
    if (tiltCard && !isMobile) {
        tiltCard.style.transformStyle = 'preserve-3d';
        tiltCard.addEventListener('mouseenter', function () { tiltCard.style.transition = 'transform 0.1s ease'; });
        tiltCard.addEventListener('mousemove', function (e) {
            var rect = tiltCard.getBoundingClientRect();
            var x = e.clientX - rect.left;
            var y = e.clientY - rect.top;
            var rx = ((y - rect.height / 2) / (rect.height / 2)) * -8;
            var ry = ((x - rect.width  / 2) / (rect.width  / 2)) *  8;
            tiltCard.style.transform = 'perspective(1200px) rotateX(' + rx + 'deg) rotateY(' + ry + 'deg) scale3d(1.02,1.02,1.02)';
            tiltCard.style.setProperty('--mouse-x', ((x / rect.width)  * 100).toFixed(1) + '%');
            tiltCard.style.setProperty('--mouse-y', ((y / rect.height) * 100).toFixed(1) + '%');
        });
        tiltCard.addEventListener('mouseleave', function () {
            tiltCard.style.transition = 'transform 0.6s cubic-bezier(0.25,1,0.5,1)';
            tiltCard.style.transform  = 'perspective(1200px) rotateX(0deg) rotateY(0deg) scale3d(1,1,1)';
        });
    }

    /* ── FAQ acordeón ── */
    var faqBtns = document.querySelectorAll('.ss-faq-question');
    faqBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var open = btn.getAttribute('aria-expanded') === 'true';
            faqBtns.forEach(function (b) { b.setAttribute('aria-expanded', 'false'); b.nextElementSibling.classList.remove('is-open'); });
            if (!open) { btn.setAttribute('aria-expanded', 'true'); btn.nextElementSibling.classList.add('is-open'); }
        });
    });

})();
</script>

    </body>
</html>
