<?php

require_once 'config/vista.php';

$page = 'Servicios';
$title = "Sesión de bebés y newborn en Arequipa | Sinopsis";
$description = "Sesiones de bebés y newborn en Arequipa: capturamos los primeros días de vida y los meses más tiernos. Ambiente seguro y acogedor. Agenda hoy.";

require_once "header.php";?>

<!-- TOP HEADER IMAGE -->
        <div class="top-single-bkg topsinglepage">
            <div class="topsingleimg" style="background:#b5b5b5; min-height:420px; display:flex; align-items:center; justify-content:center; flex-direction:column; gap:16px;">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.2" opacity="0.6"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                <span style="color:#fff; font-size:0.9rem; opacity:0.6; font-family:inherit;">Imagen de cabecera — pendiente</span>
            </div>
            <div class="inner-desc">
                <div class="container">
                    <h1 class="display-2 single-post-title">Bebés</h1>
                    <span class="post-subtitle">Paquetes disponibles</span>
                </div>
            </div>
        </div>
<!-- /TOP HEADER IMAGE -->

<!-- WRAP CONTENT -->
<div id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix ss-bebes-page">

    <!-- SECCIÓN 1: HERO INMERSIVO -->
    <div class="ss-hero-scroll-indicator">
        <span>Descubre la experiencia</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
    </div>

    <!-- SECCIÓN 2: LA PROMESA -->
    <section class="ss-landing-section ss-promesa">
        <div class="container alignc">
            <h2 class="ss-promesa-quote">
                "Hay momentos tan pequeños y fugaces que caben en la palma de tu mano. Las manitos, los piecitos, esa primera sonrisa... los eternizamos juntos antes de que el tiempo los cambie."
            </h2>
        </div>
    </section>

    <!-- SECCIÓN 3: ¿QUÉ INCLUYE? (ZIGZAG 1 - Imagen Izquierda, Texto Derecha con Glassmorphism) -->
    <section class="ss-landing-section ss-zigzag-section ss-zigzag-left">
        <div class="ss-zigzag-bg-shape ss-shape-blob-1">
            <!-- Forma orgánica SVG fondo — tono rosa en esta página via CSS -->
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fce4ec" d="M42.7,-73.4C55.9,-67.8,67.6,-57.3,76.5,-44.5C85.4,-31.7,91.5,-15.8,91.3,-0.1C91.1,15.6,84.7,31.2,74.5,43.2C64.3,55.2,50.3,63.6,35.5,70.5C20.7,77.4,5.1,82.8,-9.6,80.7C-24.3,78.6,-38.1,69,-50.2,57.5C-62.3,46,-72.7,32.6,-78.9,16.7C-85.1,0.8,-87.1,-17.7,-81.2,-33.5C-75.3,-49.3,-61.5,-62.4,-46.5,-67.2C-31.5,-72,-15.8,-68.5,0.7,-69.7C17.2,-70.9,34.4,-76.8,42.7,-73.4Z" transform="translate(100 100)" />
            </svg>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Placeholder imagen con forma orgánica -->
                    <div class="ss-organic-img-container ss-blob-mask-1">
                        <!-- Placeholder gris: imagen de bebés — pendiente -->
                        <div style="background:#b5b5b5; border-radius:18px; min-height:380px; display:flex; align-items:center; justify-content:center; flex-direction:column; gap:12px;">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" opacity="0.7"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                            <span style="color:#fff; font-size:0.85rem; opacity:0.7; font-family:inherit;">Imagen de bebés — pendiente</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ss-glass-card" id="tiltGlassCard">
                        <h3 class="ss-section-title">¿Qué incluye la experiencia?</h3>

                        <!-- BLOQUE: BEBÉS -->
                        <div class="ss-features-label">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#E8A0B4" stroke-width="2"><path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
                            Newborn y Bebés (3–9 meses)
                        </div>
                        <ul class="ss-checklist">
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#E8A0B4" stroke-width="2"/></svg> <span>Sesión newborn en las primeras 2 semanas de vida.</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#E8A0B4" stroke-width="2"/></svg> <span>Ambiente cálido y seguro: el bienestar del bebé es siempre primero.</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#E8A0B4" stroke-width="2"/></svg> <span>Fotografías de detalle: manitos, piecitos, pestañitas.</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#E8A0B4" stroke-width="2"/></svg> <span>Accesorios y fondos personalizados para bebés de 3–9 meses.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 4: EL VALOR EN UN INSTANTE (ZIGZAG 2) -->
    <section class="ss-landing-section ss-zigzag-section ss-zigzag-right ss-bg-valor">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="ss-zoom-container">
                        <img src="uploads/img_paquetes/bebes_embarazadas_ia/bebes_valor_newborn.webp" alt="Sesión newborn emotiva" class="ss-section-img" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ss-valor-instante-content">
                        <h3 class="ss-valor-title">El valor en un instante</h3>
                        <p class="ss-valor-antes">Antes: "Las fotos del hospital o del celular salen oscuras y sin el encuadre especial que merecen los primeros días de tu bebé."</p>
                        <p class="ss-valor-ahora">Ahora: "Conservas imágenes artísticas y atemporales de uno de los momentos más sagrados de la historia de tu familia."</p>

                        <div class="ss-micro-historia">
                            <svg class="quote-icon" viewBox="0 0 24 24"><path d="M10 11h-4a3 3 0 0 1-3-3v-2a3 3 0 0 1 3-3h4v8zm11 0h-4a3 3 0 0 1-3-3v-2a3 3 0 0 1 3-3h4v8z"/></svg>
                            <p>"Carolina nos contactó 5 días después de que nació Valentina. Cuando vio las fotos de sus piecitos entre flores, nos dijo que era la primera vez que entendía por qué una foto puede valer más que mil palabras."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 5: GALERÍA CINEMATOGRÁFICA -->
    <section class="ss-landing-section ss-galeria-section ss-cinematic-section">
        <div class="container alignc">
            <h3 class="ss-section-title">Nuestras Historias</h3>
            <p class="ss-galeria-subtitle">"Un vistazo a los momentos más tiernos de newborn y bebés que hemos tenido el honor de documentar."</p>
        </div>

        <div class="ss-cinematic-gallery" id="ssCinematicGallery">
            <!-- Panel 1: imagen manitas newborn -->
            <div class="ss-cpanel" data-index="0">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/bebes_embarazadas_ia/bebes_historia_3_manitas.webp" alt="Newborn detalle manos" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <!-- Panel 2: imagen bebé studio -->
            <div class="ss-cpanel" data-index="1">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/bebes_embarazadas_ia/bebes_historia_4_bebe.webp" alt="Bebé studio" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <!-- Panel 3: imagen familia con recién nacido -->
            <div class="ss-cpanel" data-index="2">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/bebes_embarazadas_ia/bebes_historia_5_familia.webp" alt="Familia con recién nacido" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <!-- Panel 4: placeholder gris — pendiente imagen bebé exteriores -->
            <div class="ss-cpanel" data-index="3">
                <div class="ss-cpanel__img-wrapper" style="background:#9e9e9e; display:flex; align-items:center; justify-content:center;">
                    <div style="text-align:center; color:#fff; opacity:.7;">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                        <p style="font-size:.75rem; margin-top:8px;">Imagen pendiente</p>
                    </div>
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <!-- Panel 5: placeholder gris — pendiente imagen bebé accesorios -->
            <div class="ss-cpanel" data-index="4">
                <div class="ss-cpanel__img-wrapper" style="background:#ababab; display:flex; align-items:center; justify-content:center;">
                    <div style="text-align:center; color:#fff; opacity:.7;">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                        <p style="font-size:.75rem; margin-top:8px;">Imagen pendiente</p>
                    </div>
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 6: EL PROCESO (Timeline) -->
    <section class="ss-landing-section ss-proceso-section bg-light">
        <div class="container">
            <h3 class="ss-section-title alignc margin-b50">¿Cómo es el proceso?</h3>
            <div class="ss-timeline">
                <div class="ss-timeline-step">
                    <div class="ss-step-number">1</div>
                    <h4>Contacto</h4>
                    <p>Cuéntanos la edad de tu bebé (o tus semanas de embarazo si quieres reservar la sesión newborn) para agendar la sesión ideal.</p>
                </div>
                <div class="ss-timeline-step">
                    <div class="ss-step-number">2</div>
                    <h4>Preparación</h4>
                    <p>Te enviamos la guía de vestuario, accesorios y cómo preparar al bebé para el día de la sesión.</p>
                </div>
                <div class="ss-timeline-step">
                    <div class="ss-step-number">3</div>
                    <h4>La Sesión</h4>
                    <p>Trabajamos con calma y al ritmo del bebé. La seguridad y comodidad son siempre lo primero.</p>
                </div>
                <div class="ss-timeline-step">
                    <div class="ss-step-number">4</div>
                    <h4>Entrega</h4>
                    <p>Recibes tu galería privada con fotos editadas en alta resolución, con delicadeza y amor.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 7: TESTIMONIOS -->
    <section class="ss-landing-section ss-testimonios-section">
        <div class="container">
            <h3 class="ss-section-title alignc margin-b40">Lo que dicen nuestros papás</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="ss-testimonio-card">
                        <div class="ss-test-bg-quote">"</div>
                        <div class="ss-stars">★★★★★</div>
                        <p class="ss-test-text">"La sesión newborn de mi hija fue una experiencia de paz absoluta. Se notaba el cuidado y la experiencia del equipo con los bebés recién nacidos."</p>
                        <div class="ss-test-author">
                            <div class="ss-author-avatar" style="background:#E8A0B4;">D</div>
                            <span>Daniela C.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ss-testimonio-card">
                        <div class="ss-test-bg-quote">"</div>
                        <div class="ss-stars">★★★★★</div>
                        <p class="ss-test-text">"Mi bebé de 5 meses estuvo feliz toda la sesión. Nos relajamos todos y salieron las fotos más naturales y tiernas que he visto."</p>
                        <div class="ss-test-author">
                            <div class="ss-author-avatar" style="background:#E8A0B4;">N</div>
                            <span>Jorge y Natalia</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ss-testimonio-card">
                        <div class="ss-test-bg-quote">"</div>
                        <div class="ss-stars">★★★★★</div>
                        <p class="ss-test-text">"Solo lo esencial llevamos y ellos se encargaron de todo. Las fotos de los piecitos de mi niño entre flores son el cuadro más bonito de mi sala."</p>
                        <div class="ss-test-author">
                            <div class="ss-author-avatar" style="background:#E8A0B4;">C</div>
                            <span>Carolina V.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 8: PAQUETES -->
    <section class="ss-landing-section ss-paquetes-section bg-light" id="paquetes">
        <div class="container margin-b30">
            <div class="padding-lr200 alignc">
                <div class="el-smalltitle">Nuestros Planes</div>
                <h3 class="ss-section-title">Elige cómo quieres inmortalizar a tu bebé</h3>
            </div>
        </div>
        <div class="container">
            <?php
            require_once 'include/components/paquetes-grid.php';
            require_once 'include/components/paquete-card.php';

            $packages = [

                [
                    "name"           => "Newborn · Studio",
                    "description"    => "Sesión especializada para recién nacidos en ambiente cálido y completamente seguro. Capturamos los detalles más tiernos: manitos, piecitos, el primer sueño.",
                    "price"          => ["Consultar"],
                    "priceNote"      => "",
                    "category"       => "Studio",
                    "badge"          => "Más elegido",
                    "includes"       => [
                        "Sesión en las primeras 2 semanas de vida",
                        "Ambiente a temperatura controlada",
                        "Props y accesorios newborn"
                    ],
                    "delivery"       => [
                        "15 fotografías editadas en alta calidad",
                        "3 fotos impresas 10x15 cm"
                    ],
                    "considerations" => [
                        "Reservar desde el 7mo u 8vo mes de embarazo",
                        "Entrega: 15 días hábiles aprox."
                    ],
                    "promo"          => "",
                    "image"          => "uploads/img_paquetes/bebes_embarazadas_ia/bebes_valor_newborn.webp",
                ],

                [
                    "name"           => "Bebés · Studio",
                    "description"    => "Para bebés de 3 a 9 meses, cuando ya sonríen pero aún caben en cualquier canasta. Fondos y accesorios adorables en un ambiente divertido y tranquilo.",
                    "price"          => ["Consultar"],
                    "priceNote"      => "",
                    "category"       => "Studio",
                    "badge"          => "",
                    "includes"       => [
                        "Sesión en estudio (fondos personalizados)",
                        "Accesorios incluidos",
                        "Tiempo libre para el bebé"
                    ],
                    "delivery"       => [
                        "15 fotografías editadas en alta calidad",
                        "3 fotos impresas 10x15 cm"
                    ],
                    "considerations" => [
                        "Ideal de 3 a 9 meses de edad",
                        "Entrega: 15 días hábiles aprox."
                    ],
                    "promo"          => "",
                    "image"          => "uploads/img_paquetes/ninoexterior.webp",
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
                    <button class="ss-faq-question" aria-expanded="false">
                        ¿La sesión newborn es segura para el recién nacido?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>Totalmente. Trabajamos en un ambiente a <strong>temperatura controlada</strong>, con materiales hipoalergénicos y nunca forzamos ninguna pose. Cada movimiento se realiza con delicadeza y siempre con la seguridad y el bienestar del bebé como prioridad absoluta.</p>
                    </div>
                </div>

                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">
                        ¿Qué necesito traer para la sesión de mi bebé?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>Solo lo esencial: ropa cómoda extra, pañales de repuesto, su juguete o chupón favorito si lo tiene, y su mantita especial. <strong>Nosotros nos encargamos de todo lo demás</strong>: fondos, accesorios, props decorativos y la paciencia ilimitada para esperar el momento perfecto.</p>
                    </div>
                </div>

                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">
                        ¿Puedo incluir a toda la familia en la sesión?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>¡Sí! Dedicamos un tiempo especial al final de la sesión para tomar fotos de la familia completa: mamá, papá y el bebé juntos. Es un momento muy especial que siempre recomendamos para que quede el recuerdo de este nuevo capítulo que comenzaron como familia.</p>
                    </div>
                </div>

                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">
                        ¿Con cuánto tiempo debo reservar la sesión newborn?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>Recomendamos reservar desde el <strong>séptimo u octavo mes de embarazo</strong>. Como la sesión newborn debe realizarse idealmente en los primeros 5 a 14 días de vida, necesitamos tener tu fecha tentativa de parto para asegurar nuestra disponibilidad justo cuando más lo necesitas.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCIÓN CONTACTO / CTA FINAL -->
    <div class="ss-landing-cta-final">
        <div class="container alignc">
            <h2 class="display-4 margin-b30 ss-cta-title">¿Listo para eternizar los primeros momentos de tu bebé?</h2>
            <p class="ss-cta-desc">Escríbenos por WhatsApp y con gusto te asesoramos sobre qué sesión es la ideal según la edad de tu bebé.</p>
            <a href="https://wa.me/51941221847?text=Hola%2C%20quiero%20cotizar%20el%20servicio%20de%20Fotograf%C3%ADa%20de%20Beb%C3%A9s" target="_blank" rel="noopener noreferrer" class="ss-btn-primary">Cotizar por WhatsApp</a>
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
            var activateAll = function () {
                timelineSteps.forEach(function (s) { s.classList.add('is-active'); });
            };
            if (window.innerWidth > 768) {
                activateAll();
            } else {
                var tlObserver = new IntersectionObserver(function (entries) {
                    if (window.innerWidth > 768) { activateAll(); return; }
                    entries.forEach(function (entry) {
                        entry.target.classList.toggle('is-active', entry.isIntersecting);
                    });
                }, { root: null, rootMargin: '-35% 0px -35% 0px', threshold: 0 });
                timelineSteps.forEach(function (step) { tlObserver.observe(step); });
                window.addEventListener('resize', function () {
                    if (window.innerWidth > 768) { activateAll(); }
                });
            }
        }

        /* ── 3D Tilt tarjeta de cristal (solo desktop) ── */
        var tiltCard = document.getElementById('tiltGlassCard');
        if (tiltCard && !isMobile) {
            tiltCard.style.transformStyle = 'preserve-3d';
            tiltCard.addEventListener('mouseenter', function () {
                tiltCard.style.transition = 'transform 0.1s ease';
            });
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
                faqBtns.forEach(function (b) {
                    b.setAttribute('aria-expanded', 'false');
                    b.nextElementSibling.classList.remove('is-open');
                });
                if (!open) {
                    btn.setAttribute('aria-expanded', 'true');
                    btn.nextElementSibling.classList.add('is-open');
                }
            });
        });

    })();
    </script>

    </body>
</html>
