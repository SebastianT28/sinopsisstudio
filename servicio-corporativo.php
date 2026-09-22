<?php

require_once 'config/vista.php';

$page = 'Paquetes';
$title = "Paquetes Corporativo y Marca Personal | Sinopsis Studio";
$description = "Fotografía corporativa y de marca personal en Arequipa. Headshots profesionales, sesiones de equipo y branding visual. Consulta nuestros paquetes en Sinopsis Studio.";

require_once "header.php";?>

<!-- TOP HEADER IMAGE -->
        <div class="top-single-bkg topsinglepage">
            <div class="topsingleimg"><img src="uploads/img_paquetes/fotocorporativa.webp" alt="Fotografía Corporativa Sinopsis Studio" width="1920" height="1080"></div>
            <div class="inner-desc">
                <div class="container">
                    <h1 class="display-2 single-post-title">Corporativo y Marca Personal</h1>
                    <span class="post-subtitle">Paquetes disponibles</span>
                </div>
            </div>
        </div>
<!-- /TOP HEADER IMAGE -->

<!-- WRAP CONTENT -->
        <div id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix ss-corporativo-page">

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
                    <h2 class="ss-promesa-quote">"Proyecta confianza con imágenes que hablan por tu marca."</h2>
                </div>
            </section>

            <!-- SECCIÓN 2: ZIGZAG / BENEFICIOS -->
            <section class="ss-landing-section ss-zigzag-section ss-zigzag-left">
                <div class="ss-zigzag-bg-shape ss-shape-blob-1">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="ss-organic-img-container ss-blob-mask-1 img-frame">
                                <img src="uploads/img_paquetes/fotocorporativa.webp" alt="Headshot profesional" class="ss-section-img" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ss-glass-card" id="tiltGlassCard">
                                <h3 class="ss-section-title">Servicios clave</h3>
                                <ul class="ss-checklist ss-features-carousel">
                                    <li>Headshots corporativos y profesionales</li>
                                    <li>Sesiones para equipo y oficinas</li>
                                    <li>Fotografía de eventos y branding</li>
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
                                <img src="uploads/img_paquetes/corp_gal2.webp" alt="Sesión equipo" class="ss-section-img" loading="lazy" decoding="async">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ss-valor-instante-content">
                                <h3 class="ss-valor-title">El valor en un instante</h3>
                                <p class="ss-valor-antes">Antes: "Perfiles que no transmiten profesionalismo"</p>
                                <p class="ss-valor-ahora">Ahora: "Imágenes que conectan con clientes y elevan la confianza en tu marca"</p>
                                <div class="ss-micro-historia">
                                    <svg class="quote-icon" viewBox="0 0 24 24"><path d="M10 11h-4a3 3 0 0 1 3-3v-2a3 3 0 0 1 3-3h4v8zm11 0h-4a3 3 0 0 1 3-3v-2a3 3 0 0 1 3-3h4v8z"/></svg>
                                    <p>"Un headshot alineado a tu identidad puede abrir la primera conversación con clientes potenciales."</p>
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
                    <p class="ss-galeria-subtitle">"Imágenes que proyectan confianza y profesionalismo."</p>
                </div>

                <div class="ss-cinematic-gallery" id="ssCinematicGallery">
                    <div class="ss-cpanel" data-index="0">
                        <div class="ss-cpanel__img-wrapper"><img src="uploads/img_paquetes/corp_gal2.webp" alt="Equipo" loading="lazy"></div>
                        <div class="ss-cpanel__overlay"></div>
                    </div>
                    <div class="ss-cpanel" data-index="1">
                        <div class="ss-cpanel__img-wrapper"><img src="uploads/img_paquetes/corp_gal3.webp" alt="Oficina" loading="lazy"></div>
                        <div class="ss-cpanel__overlay"></div>
                    </div>
                    <div class="ss-cpanel" data-index="2">
                        <div class="ss-cpanel__img-wrapper"><img src="uploads/img_paquetes/corp_gal4.webp" alt="Headshot" loading="lazy"></div>
                        <div class="ss-cpanel__overlay"></div>
                    </div>
                    <div class="ss-cpanel" data-index="3">
                        <div class="ss-cpanel__img-wrapper"><img src="uploads/img_paquetes/corp_gal5.webp" alt="Evento corporativo" loading="lazy"></div>
                        <div class="ss-cpanel__overlay"></div>
                    </div>
                    <div class="ss-cpanel" data-index="4">
                        <div class="ss-cpanel__img-wrapper"><img src="uploads/img_paquetes/corp_gal1.webp" alt="Marca personal" loading="lazy"></div>
                        <div class="ss-cpanel__overlay"></div>
                    </div>
                </div>
            </section>

            <!-- SECCIÓN 5: PROCESO -->
            <section class="ss-landing-section ss-proceso-section bg-light">
                <div class="container">
                    <h3 class="ss-section-title alignc margin-b50">¿Cómo trabajamos?</h3>
                    <div class="ss-timeline">
                        <div class="ss-timeline-step"><div class="ss-step-number">1</div><h4>Brief</h4><p>Definimos objetivos, público y estilo visual.</p></div>
                        <div class="ss-timeline-step"><div class="ss-step-number">2</div><h4>Sesión</h4><p>Trabajamos en estudio, oficina o locación.</p></div>
                        <div class="ss-timeline-step"><div class="ss-step-number">3</div><h4>Edición</h4><p>Seleccionamos y retocamos tus imágenes.</p></div>
                        <div class="ss-timeline-step"><div class="ss-step-number">4</div><h4>Entrega</h4><p>Recibes archivos listos para web y redes.</p></div>
                    </div>
                </div>
            </section>

            <!-- SECCIÓN 6: TESTIMONIOS -->
            <section class="ss-landing-section ss-testimonios-section">
                <div class="container">
                    <h3 class="ss-section-title alignc margin-b40">Lo que dicen nuestros clientes</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-6"><div class="ss-testimonio-card"><div class="ss-test-bg-quote">"</div><div class="ss-stars">★★★★★</div><p class="ss-test-text">"Los headshots transformaron nuestra web corporativa y la forma en que presentamos al equipo."</p><div class="ss-test-author"><div class="ss-author-avatar">A</div><span>Agencia P.</span></div></div></div>
                        <div class="col-lg-4 col-md-6"><div class="ss-testimonio-card"><div class="ss-test-bg-quote">"</div><div class="ss-stars">★★★★★</div><p class="ss-test-text">"La sesión de marca personal fue clara, ágil y muy alineada con mi estilo."</p><div class="ss-test-author"><div class="ss-author-avatar">M</div><span>Mariana R.</span></div></div></div>
                        <div class="col-lg-4 col-md-6"><div class="ss-testimonio-card"><div class="ss-test-bg-quote">"</div><div class="ss-stars">★★★★★</div><p class="ss-test-text">"Las fotos del equipo quedaron profesionales sin interrumpir nuestra jornada."</p><div class="ss-test-author"><div class="ss-author-avatar">C</div><span>Carlos T.</span></div></div></div>
                    </div>
                </div>
            </section>

            <!-- PAQUETES -->
            <div id="corporativo" class="fotografia ss-corporativo-packages">
                <div class="container margin-b50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="padding-lr200 alignc">
                                <div class="el-smalltitle">Paquetes de Fotografía</div>
                            </div>
                        </div>
                    </div>

                    <?php
                    require_once 'include/components/paquetes-grid.php';
                    require_once 'include/components/paquete-card.php';

                    $packages = [

                        [
                            "name"           => "Foto Corporativa",
                            "description"    => "Potenciamos tu imagen que transmite profesionalismo, seguridad y confianza.",
                            "price"          => ["S/ 30"],
                            "priceNote"      => "",
                            "category"       => "Corporativo",
                            "badge"          => "",
                            "includes"       => [
                                "Sesión 15 minutos"
                            ],
                            "delivery"       => [
                                "3 fotos digitales"
                            ],
                            "considerations" => [
                                "Fotos impresas con costo adicional",
                                "Entrega: 3 días hábiles aprox."
                            ],
                            "promo"          => "",
                            "image"          => "uploads/img_paquetes/fotocorporativa.webp",
                        ],

                    ];

                    renderPaquetesGrid($packages);
                    ?>

                </div>
            </div>
            <!-- /PAQUETES -->

            <!-- SECCIÓN FAQ -->
            <section class="ss-landing-section ss-faq-section">
                <div class="container">
                    <h3 class="ss-section-title alignc margin-b50">Preguntas Frecuentes</h3>
                    <div class="ss-faq-list" id="ssFaqList">
                        <div class="ss-faq-item">
                            <button class="ss-faq-question" aria-expanded="false">¿Hacen sesiones en oficina?<span class="ss-faq-icon" aria-hidden="true"></span></button>
                            <div class="ss-faq-answer"><p>Sí. Llevamos equipo ligero a tu oficina para realizar una sesión ágil, consistente y sin interrumpir el trabajo.</p></div>
                        </div>
                        <div class="ss-faq-item">
                            <button class="ss-faq-question" aria-expanded="false">¿Puedo solicitar fotos para todo mi equipo?<span class="ss-faq-icon" aria-hidden="true"></span></button>
                            <div class="ss-faq-answer"><p>Sí. Coordinamos un flujo por turnos y mantenemos una iluminación y edición coherentes para que todos los perfiles compartan el mismo lenguaje visual.</p></div>
                        </div>
                        <div class="ss-faq-item">
                            <button class="ss-faq-question" aria-expanded="false">¿En cuánto tiempo entregan las imágenes?<span class="ss-faq-icon" aria-hidden="true"></span></button>
                            <div class="ss-faq-answer"><p>La entrega estándar es de aproximadamente 3 días hábiles para una sesión individual. Los equipos y eventos se cotizan según volumen.</p></div>
                        </div>
                        <div class="ss-faq-item">
                            <button class="ss-faq-question" aria-expanded="false">¿Pueden adaptar las fotos para redes sociales?<span class="ss-faq-icon" aria-hidden="true"></span></button>
                            <div class="ss-faq-answer"><p>Sí. Podemos preparar versiones verticales, cuadradas y horizontales según los canales donde se utilizará tu contenido.</p></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- SECCIÓN CONTACTO -->
            <div class="section-holder section-info section-nomargin home-section-3-5 ss-corporativo-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="padding-lr200 alignc">
                                <div class="el-smalltitle">Contáctanos</div>
                                <h2 class="display-4 margin-b30">¿Listo para proyectar tu mejor imagen?</h2>
                                <p>Escríbenos para coordinar tu sesión corporativa o de marca personal.</p>
                                <a href="https://wa.me/51941221847?text=Hola%2C%20quiero%20cotizar%20el%20servicio%20Corporativo%20y%20de%20Marca%20Personal" target="_blank" rel="noopener noreferrer" class="ss-btn-primary margin-t30">Cotizar por WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
<!-- /WRAP CONTENT -->

    <?php require_once "footer.php";?>

    <!-- SCRIPTS DE PÁGINA -->
    <script>
    (function () {
        var gallery = document.getElementById('ssCinematicGallery');
        var panels = gallery ? Array.from(gallery.querySelectorAll('.ss-cpanel')) : [];
        var isTouch = window.matchMedia('(hover: none), (max-width: 768px)').matches;

        if (gallery && panels.length) {
            function activate(panel) {
                panels.forEach(function (item) { item.classList.remove('active'); });
                panel.classList.add('active');
                gallery.classList.add('is-hovered');
            }

            if (!isTouch) {
                panels.forEach(function (panel) {
                    panel.addEventListener('mouseenter', function () { activate(panel); });
                    panel.addEventListener('focusin', function () { activate(panel); });
                });
            } else {
                gallery.classList.add('is-mobile-scroll');
                var observer = new IntersectionObserver(function (entries) {
                    entries.forEach(function (entry) {
                        if (entry.isIntersecting) { activate(entry.target); }
                    });
                }, { root: gallery, threshold: 0.55 });
                panels.forEach(function (panel) { observer.observe(panel); });
            }
        }

        var tiltCard = document.getElementById('tiltGlassCard');
        if (tiltCard && !isTouch) {
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
