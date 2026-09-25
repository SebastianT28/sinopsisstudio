<?php

require_once 'config/vista.php';

$page = 'Servicios';
$title = "Sesiones familiares en Arequipa | Sinopsis Studio";
$description = "Sesiones familiares en estudio o exteriores en Arequipa para conservar la personalidad y los vínculos de cada etapa. Conoce nuestros paquetes. Reserva hoy.";

require_once "header.php";?>

<!-- TOP HEADER IMAGE -->
        <div class="top-single-bkg topsinglepage">
            <div class="topsingleimg"><img src="uploads/img_paquetes/familiaexterior.webp" alt="Fotografía Familiar Sinopsis Studio" width="1920" height="1080"></div>
            <div class="inner-desc">
                <div class="container">
                    <h1 class="display-2 single-post-title">Familiares</h1>
                    <span class="post-subtitle">Paquetes disponibles</span>
                </div>
            </div>
        </div>
<!-- /TOP HEADER IMAGE -->

<!-- WRAP CONTENT -->
<div id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix ss-familiares-page">

    <!-- SECCIÓN 1: HERO INMERSIVO (Ya cubierto por el top-single-bkg de arriba, pero le añadiremos el botón sutil de scroll) -->
    <div class="ss-hero-scroll-indicator">
        <span>Descubre la experiencia</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
    </div>

    <!-- SECCIÓN 2: LA PROMESA -->
    <section class="ss-landing-section ss-promesa">
        <div class="container alignc">
            <h2 class="ss-promesa-quote">
                "No fotografiamos poses, fotografiamos la conexión de tu familia. Esos instantes que mañana se convertirán en tu tesoro más valioso."
            </h2>
        </div>
    </section>

    <!-- SECCIÓN 3: ¿QUÉ INCLUYE? (ZIGZAG 1 - Imagen Izquierda, Texto Derecha con Glassmorphism) -->
    <section class="ss-landing-section ss-zigzag-section ss-zigzag-left">
        <div class="ss-zigzag-bg-shape ss-shape-blob-1">
            <!-- Forma orgánica SVG fondo -->
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path fill="#F2EAE1" d="M42.7,-73.4C55.9,-67.8,67.6,-57.3,76.5,-44.5C85.4,-31.7,91.5,-15.8,91.3,-0.1C91.1,15.6,84.7,31.2,74.5,43.2C64.3,55.2,50.3,63.6,35.5,70.5C20.7,77.4,5.1,82.8,-9.6,80.7C-24.3,78.6,-38.1,69,-50.2,57.5C-62.3,46,-72.7,32.6,-78.9,16.7C-85.1,0.8,-87.1,-17.7,-81.2,-33.5C-75.3,-49.3,-61.5,-62.4,-46.5,-67.2C-31.5,-72,-15.8,-68.5,0.7,-69.7C17.2,-70.9,34.4,-76.8,42.7,-73.4Z" transform="translate(100 100)" />
            </svg>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Placeholder para imagen con forma orgánica (clip-path en CSS) -->
                    <div class="ss-organic-img-container ss-blob-mask-1">
                        <img src="uploads/img_paquetes/familias_ia/familia_incluye_studio.webp" alt="Sesión familiar en studio Sinopsis Studio" class="ss-section-img" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ss-glass-card" id="tiltGlassCard">
                        <h3 class="ss-section-title">¿Qué incluye la experiencia?</h3>
                        <ul class="ss-checklist ss-features-carousel">
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#C69C6D" stroke-width="2"/></svg> <span>Asesoría previa de vestuario y paleta de colores.</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#C69C6D" stroke-width="2"/></svg> <span>Sesión en nuestro Studio profesional o locación exterior.</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#C69C6D" stroke-width="2"/></svg> <span>Galería privada online para selección de fotos.</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#C69C6D" stroke-width="2"/></svg> <span>Retoque profesional (colorimetría y fine art).</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#C69C6D" stroke-width="2"/></svg> <span>Impresiones Fine Art (según el paquete elegido).</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 4: ASÍ CAMBIA TU VIDA (ZIGZAG 2 - Texto Izquierda, Imagen Derecha) -->
    <section class="ss-landing-section ss-zigzag-section ss-zigzag-right ss-bg-valor">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="ss-zoom-container">
                        <img src="uploads/img_paquetes/familias_ia/familia_valor_exteriores.webp" alt="Familia riendo emotiva" class="ss-section-img" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ss-valor-instante-content">
                        <h3 class="ss-valor-title">El valor en un instante</h3>
                        <p class="ss-valor-antes">Antes: "Las fotos en tu celular se pierden en la nube, borrosas y olvidadas."</p>
                        <p class="ss-valor-ahora">Ahora: Nuestros retratos decoran el lugar mas importante de tu hogar."</p>
                        
                        <div class="ss-micro-historia">
                            <svg class="quote-icon" viewBox="0 0 24 24"><path d="M10 11h-4a3 3 0 0 1-3-3v-2a3 3 0 0 1 3-3h4v8zm11 0h-4a3 3 0 0 1-3-3v-2a3 3 0 0 1 3-3h4v8z"/></svg>
                            <p>"La familia Suárez nos visitó para celebrar los 60 años de los abuelos. Hoy, ese retrato es el centro de su sala y la herencia más linda de sus nietos."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 5: GALERÍA CINEMATOGRÁFICA DE PANELES VERTICALES -->
    <section class="ss-landing-section ss-galeria-section ss-cinematic-section">
        <div class="container alignc">
            <h3 class="ss-section-title">Nuestras Historias</h3>
            <p class="ss-galeria-subtitle">"Un vistazo a las familias que han confiado en nosotros."</p>
        </div>

        <div class="ss-cinematic-gallery" id="ssCinematicGallery">
            <div class="ss-cpanel" data-index="0">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/familias_ia/galeria_familia_1.webp" alt="Retrato familiar 1" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <div class="ss-cpanel" data-index="1">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/familias_ia/galeria_familia_2.webp" alt="Retrato familiar 2" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <div class="ss-cpanel" data-index="2">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/familias_ia/galeria_familia_3_grande.webp" alt="Sesión familiar exterior" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <div class="ss-cpanel" data-index="3">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/familias_ia/galeria_familia_4.webp" alt="Retrato familiar 4" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <div class="ss-cpanel" data-index="4">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/familias_ia/galeria_familia_5.webp" alt="Retrato familiar 5" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
        </div>
    </section>

    

    <!-- SECCIÓN 6: EL PROCESO (Timeline Horizontal) -->
    <section class="ss-landing-section ss-proceso-section bg-light">
        <div class="container">
            <h3 class="ss-section-title alignc margin-b50">¿Cómo es el proceso?</h3>
            <div class="ss-timeline">
                <div class="ss-timeline-step">
                    <div class="ss-step-number">1</div>
                    <h4>Contacto</h4>
                    <p>Nos escribes y elegimos la fecha ideal.</p>
                </div>
                <div class="ss-timeline-step">
                    <div class="ss-step-number">2</div>
                    <h4>Planificación</h4>
                    <p>Definimos paleta de colores, vestuario y locación.</p>
                </div>
                <div class="ss-timeline-step">
                    <div class="ss-step-number">3</div>
                    <h4>¡A brillar!</h4>
                    <p>Relájate y disfruta tu sesión sin estrés. Nosotros te guiamos.</p>
                </div>
                <div class="ss-timeline-step">
                    <div class="ss-step-number">4</div>
                    <h4>Entrega</h4>
                    <p>Recibes tus recuerdos para enmarcarlos y atesorarlos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 7: TESTIMONIOS (Cartas Modernas) -->
    <section class="ss-landing-section ss-testimonios-section">
        <div class="container">
            <h3 class="ss-section-title alignc margin-b40">Lo que dicen nuestras familias</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="ss-testimonio-card">
                        <div class="ss-test-bg-quote">"</div>
                        <div class="ss-stars">★★★★★</div>
                        <p class="ss-test-text">"Nunca me habían gustado mis fotos hasta que vine a Sinopsis. Capturaron exactamente cómo somos, sin parecer falsos."</p>
                        <div class="ss-test-author">
                            <div class="ss-author-avatar">V</div>
                            <span>Valeria Gómez</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ss-testimonio-card">
                        <div class="ss-test-bg-quote">"</div>
                        <div class="ss-stars">★★★★★</div>
                        <p class="ss-test-text">"La paciencia que tuvieron con mis niños pequeños fue increíble. Las fotos superaron todas nuestras expectativas."</p>
                        <div class="ss-test-author">
                            <div class="ss-author-avatar">C</div>
                            <span>Carlos Ruiz</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ss-testimonio-card">
                        <div class="ss-test-bg-quote">"</div>
                        <div class="ss-stars">★★★★★</div>
                        <p class="ss-test-text">"Fue la mejor inversión que hice para mi familia este año. El nivel de detalle en la edición y la impresión es fenomenal."</p>
                        <div class="ss-test-author">
                            <div class="ss-author-avatar">M</div>
                            <span>María Elena</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 8: PAQUETES (El grid existente integrado) -->
    <section class="ss-landing-section ss-paquetes-section bg-light" id="paquetes">
        <div class="container margin-b30">
            <div class="padding-lr200 alignc">
                <div class="el-smalltitle">Nuestros Planes</div>
                <h3 class="ss-section-title">Elige cómo quieres recordar</h3>
            </div>
        </div>
        <div class="container">
            <?php
            require_once 'include/components/paquetes-grid.php';
            require_once 'include/components/paquete-card.php';

            $packages = [
                [
                    "name"           => "Niños y Familia · Exterior",
                    "description"    => "Aprovechamos el ambiente para documentar expresiones auténticas. Capturamos la personalidad de cada miembro y la armonía del grupo.",
                    "price"          => ["S/ 180"],
                    "priceNote"      => "",
                    "category"       => "Exterior",
                    "badge"          => "Más Elegido",
                    "includes"       => [
                        "Sesión realizada en exteriores",
                        "Duración: 1 hora aprox."
                    ],
                    "delivery"       => [
                        "15 fotografías digitales editadas profesionalmente",
                        "5 fotos impresas (mismas que las digitales)"
                    ],
                    "considerations" => [
                        "No incluye pasajes y/o transporte",
                        "Entrega: 20-30 días hábiles aprox."
                    ],
                    "promo"          => "",
                    "image"          => "uploads/img_paquetes/familiaexterior.webp",
                ],
                [
                    "name"           => "Niños · Studio",
                    "description"    => "Enfocados en los más pequeños con fondos limpios y accesorios encantadores.",
                    "price"          => ["S/ 150"],
                    "priceNote"      => "",
                    "category"       => "Studio",
                    "badge"          => "",
                    "includes"       => [
                        "Sesión en estudio (fondo un solo color)",
                        "Hasta 2 cambios de ropa",
                        "Accesorios"
                    ],
                    "delivery"       => [
                        "10 fotografías editadas profesionalmente",
                        "2 fotos impresas"
                    ],
                    "considerations" => [
                        "Entrega: 10 días hábiles aprox."
                    ],
                    "promo"          => "",
                    "image"          => "uploads/img_paquetes/ninosstudio.webp"
                ],
                [
                    "name"           => "Familiares · Studio",
                    "description"    => "Un ambiente controlado, elegante y minimalista para retratos familiares clásicos y atemporales.",
                    "price"          => ["S/ 150"],
                    "priceNote"      => "",
                    "category"       => "Studio",
                    "badge"          => "",
                    "includes"       => [
                        "Sesión en estudio (fondo 2 colores)",
                        "2 cambios de ropa"
                    ],
                    "delivery"       => [
                        "15 fotografías editadas profesionalmente",
                        "5 fotos impresas"
                    ],
                    "considerations" => [
                        "No incluye vestuarios",
                        "Entrega: 10 días hábiles aprox."
                    ],
                    "promo"          => "",
                    "image"          => "uploads/img_paquetes/familiaresstudio.webp",
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
                        ¿Cuánto tiempo dura la sesión fotográfica familiar?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>Nuestras sesiones tienen una duración aproximada de <strong>1.5 a 2 horas</strong>. Este tiempo incluye un momento inicial para que toda la familia se acomode, se relaje y conecte con el ambiente del estudio. No te preocupes por los niños pequeños — tenemos experiencia con ellos y sabemos cómo capturar su naturalidad sin prisa.</p>
                    </div>
                </div>

                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">
                        ¿Necesito saber posar o tener experiencia frente a la cámara?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>Para nada. Nuestro trabajo es precisamente <strong>guiarte durante toda la sesión</strong>. No fotografiamos poses forzadas, fotografiamos la conexión real de tu familia. Te daremos indicaciones sencillas y naturales para que el resultado sea auténtico y lleno de emoción, sin que se vea actuado.</p>
                    </div>
                </div>

                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">
                        ¿Cómo elegimos el vestuario y los colores para la sesión?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>Antes de la sesión recibirás una <strong>asesoría personalizada de vestuario y paleta de colores</strong> incluida en todos nuestros paquetes. Te enviamos una guía con combinaciones que funcionan en cámara, colores que se complementan entre los miembros de la familia y recomendaciones según el tipo de sesión (studio o exterior). No tienes que adivinar nada.</p>
                    </div>
                </div>

                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">
                        ¿En cuánto tiempo recibimos las fotos terminadas?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>Después de que selecciones tus fotos favoritas en nuestra <strong>galería privada online</strong>, el proceso de retoque profesional (colorimetría y estilo Fine Art) toma entre <strong>7 y 15 días hábiles</strong>. Las fotos finales te serán entregadas en alta resolución listas para imprimir y en versión digital para compartir.</p>
                    </div>
                </div>

                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">
                        ¿Hacen sesiones en exteriores o solo en el estudio?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>¡Las dos opciones! Contamos con nuestro <strong>studio profesional en Arequipa, con dirección Av. Emmel 129-A, Yanahuara.</strong> Equipado con iluminación controlada, fondos y ambientación para retratos elegantes. También realizamos sesiones en <strong>locaciones exteriores</strong> — parques, campos, playas o el lugar que tenga un significado especial para tu familia. En la etapa de planificación elegimos juntos lo que mejor se adapte a tu visión.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCIÓN CONTACTO / CTA FINAL -->

    <div class="ss-landing-cta-final">
        <div class="container alignc" style="background-image:url('uploads/img_paquetes/Decorative elements/fondo formato 450x1200 el valor en un instante celular.svg');background-repeat:no-repeat;background-position:center bottom;padding:40px 0;">
            <h2 class="display-4 margin-b30 ss-cta-title">¿Listo para capturar tu historia?</h2>
            <p class="ss-cta-desc">Escríbenos por WhatsApp sin compromiso, te responderemos en menos de 24 horas y coordinamos todos los detalles para que tu sesión sea inolvidable.</p>
            <a href="https://wa.me/51941221847?text=Hola%2C%20quiero%20cotizar%20el%20servicio%20de%20Fotograf%C3%ADa%20Familiar" target="_blank" rel="noopener noreferrer" class="ss-btn-primary">Cotizar por WhatsApp</a>
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
                        gallery.classList.remove('is-hovered');
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
