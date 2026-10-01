<?php

require_once 'config/vista.php';

$page = 'Servicios';
$title = "Sesiones de maternidad y embarazo en Arequipa | Sinopsis";
$description = "Sesiones de maternidad y embarazo en Arequipa para guardar con calidez la belleza de tu pancita. Poses elegantes, accesorios incluidos. Agenda tu sesión hoy.";

require_once "header.php";?>

<!-- TOP HEADER IMAGE -->
        <div class="top-single-bkg topsinglepage">
            <div class="topsingleimg" style="background:#b5b5b5; min-height:420px; display:flex; align-items:center; justify-content:center; flex-direction:column; gap:16px;">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.2" opacity="0.6"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                <span style="color:#fff; font-size:0.9rem; opacity:0.6; font-family:inherit;">Imagen de cabecera — pendiente</span>
            </div>
            <div class="inner-desc">
                <div class="container">
                    <h1 class="display-2 single-post-title">Embarazadas</h1>
                    <span class="post-subtitle">Paquetes disponibles</span>
                </div>
            </div>
        </div>
<!-- /TOP HEADER IMAGE -->

<!-- WRAP CONTENT -->
<div id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix ss-bebes-page ss-embarazadas-page">

    <!-- SECCIÓN 1: HERO INMERSIVO -->
    <div class="ss-hero-scroll-indicator">
        <span>Descubre la experiencia</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
    </div>

    <!-- SECCIÓN 2: LA PROMESA -->
    <section class="ss-landing-section ss-promesa">
        <div class="container alignc">
            <h2 class="ss-promesa-quote">
                "Hay momentos tan delicados y fugaces que solo merecen ser guardados con la misma ternura con que se viven. Tu pancita en plena magia del embarazo... la eternizamos juntos."
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
                        <img src="uploads/img_paquetes/bebes_embarazadas_ia/bebes_incluye_maternidad.webp" alt="Maternidad y Bebés Sinopsis Studio" class="ss-section-img" loading="lazy" decoding="async">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ss-glass-card" id="tiltGlassCard">
                        <h3 class="ss-section-title">¿Qué incluye la experiencia?</h3>

                        <!-- BLOQUE: MATERNIDAD -->
                        <div class="ss-features-label">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#C69C6D" stroke-width="2"><path d="M12 21.593c-5.63-5.539-11-10.297-11-14.402 0-3.791 3.068-5.191 5.281-5.191 1.312 0 4.151.501 5.719 4.457 1.59-3.968 4.464-4.447 5.726-4.447 2.54 0 5.274 1.621 5.274 5.181 0 4.069-5.136 8.625-11 14.402z"/></svg>
                            Maternidad y Embarazo
                        </div>
                        <ul class="ss-checklist">
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#C69C6D" stroke-width="2"/></svg> <span>Sesión en studio o exteriores con iluminación suave.</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#C69C6D" stroke-width="2"/></svg> <span>Propuestas de vestuario y accesorios (telas, flores, velos).</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#C69C6D" stroke-width="2"/></svg> <span>Poses elegantes y naturales, guiadas por el fotógrafo.</span></li>
                            <li><svg viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5" fill="none" stroke="#C69C6D" stroke-width="2"/></svg> <span>Sesión ideal entre las semanas 32 y 36 de embarazo.</span></li>
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
                        <!-- Placeholder gris: imagen de valor/embarazo pendiente -->
                        <div style="background:#b5b5b5; border-radius:18px; min-height:380px; display:flex; align-items:center; justify-content:center; flex-direction:column; gap:12px;">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" opacity="0.7"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                            <span style="color:#fff; font-size:0.85rem; opacity:0.7; font-family:inherit;">Imagen de embarazo — pendiente</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ss-valor-instante-content">
                        <h3 class="ss-valor-title">El valor en un instante</h3>
                        <p class="ss-valor-antes">Antes: "Las fotos del embarazo con el celular salen oscuras o sin el encuadre especial que se merece ese momento único."</p>
                        <p class="ss-valor-ahora">Ahora: "Conservas imágenes artísticas y atemporales de uno de los momentos más sagrados de la historia de tu familia."</p>

                        <div class="ss-micro-historia">
                            <svg class="quote-icon" viewBox="0 0 24 24"><path d="M10 11h-4a3 3 0 0 1-3-3v-2a3 3 0 0 1 3-3h4v8zm11 0h-4a3 3 0 0 1-3-3v-2a3 3 0 0 1 3-3h4v8z"/></svg>
                            <p>"Gabriela llegó a la sesión un poco tímida. Cuando vio el resultado final —su pancita de 34 semanas entre flores y telas— nos escribió llorando de felicidad. Eso no tiene precio."</p>
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
            <p class="ss-galeria-subtitle">"Un vistazo a los momentos más tiernos de maternidad que hemos tenido el honor de documentar."</p>
        </div>

        <div class="ss-cinematic-gallery" id="ssCinematicGallery">
            <div class="ss-cpanel" data-index="0">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/bebes_embarazadas_ia/bebes_historia_1_pancita.webp" alt="Maternidad exterior" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <div class="ss-cpanel" data-index="1">
                <div class="ss-cpanel__img-wrapper">
                    <img src="uploads/img_paquetes/bebes_embarazadas_ia/bebes_historia_2_mama.webp" alt="Retrato maternidad studio" loading="lazy">
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <!-- Panel 3: placeholder gris — pendiente imagen embarazo estudio -->
            <div class="ss-cpanel" data-index="2">
                <div class="ss-cpanel__img-wrapper" style="background:#b5b5b5; display:flex; align-items:center; justify-content:center;">
                    <div style="text-align:center; color:#fff; opacity:.7;">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                        <p style="font-size:.75rem; margin-top:8px;">Imagen pendiente</p>
                    </div>
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <!-- Panel 4: placeholder gris — pendiente imagen embarazo pose -->
            <div class="ss-cpanel" data-index="3">
                <div class="ss-cpanel__img-wrapper" style="background:#9e9e9e; display:flex; align-items:center; justify-content:center;">
                    <div style="text-align:center; color:#fff; opacity:.7;">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg>
                        <p style="font-size:.75rem; margin-top:8px;">Imagen pendiente</p>
                    </div>
                </div>
                <div class="ss-cpanel__overlay"></div>
            </div>
            <!-- Panel 5: placeholder gris — pendiente imagen maternidad exterior -->
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

    <!-- SECCIÓN 6: PAQUETES -->
    <section class="ss-landing-section ss-paquetes-section bg-light" id="paquetes">
        <div class="container margin-b40">
            <div class="alignc">
                <h3 class="ss-section-title">Elige cómo quieres recordar tu embarazo</h3>
            </div>
        </div>
        <div class="container">
            <?php
            require_once 'include/components/paquetes-grid.php';
            require_once 'include/components/paquete-card.php';

            $packages = [

                [
                    "name"           => "Dulce espera - Estudio",
                    "description"    => "Una sesión íntima y delicada para atesorar la conexión única con tu bebé. Recuerdos que perdurarán para siempre.",
                    "price"          => ["Consultar"],
                    "priceNote"      => "",
                    "category"       => "Studio",
                    "badge"          => "",
                    "includes"       => [
                        "30 minutos de sesión",
                        "Uso de 1 vestido"
                    ],
                    "delivery"       => [
                        "5 fotos con edición profesional",
                        "Puedes traer accesorios extra"
                    ],
                    "promo"          => "",
                    "image"          => "uploads/img_paquetes/bebes_embarazadas_ia/bebes_incluye_maternidad.webp",
                ],

                [
                    "name"           => "Destello de amor - Estudio",
                    "description"    => "Celebra el amor y la luz de tu dulce espera en compañía de tu familia. Imágenes llenas de ternura.",
                    "price"          => ["Consultar"],
                    "priceNote"      => "",
                    "category"       => "Studio",
                    "badge"          => "Más elegido",
                    "includes"       => [
                        "45 minutos de sesión",
                        "Uso de 2 vestidos"
                    ],
                    "delivery"       => [
                        "8 fotos con edición profesional",
                        "5 impresiones tamaño jumbo",
                        "Puedes traer accesorios extra",
                        "Familiares incluidos"
                    ],
                    "promo"          => "",
                    "image"          => "uploads/img_paquetes/bebes_embarazadas_ia/bebes_historia_2_mama.webp",
                ],

                [
                    "name"           => "Dulce recuerdo - Estudio",
                    "description"    => "Inmortaliza esta etapa mágica con montajes de ensueño y cambios de vestuario. El legado más hermoso de tu maternidad.",
                    "price"          => ["Consultar"],
                    "priceNote"      => "",
                    "category"       => "Studio",
                    "badge"          => "",
                    "includes"       => [
                        "60 minutos de sesión",
                        "2 vestidos + 1 cambio libre",
                        "Fondo a elección"
                    ],
                    "delivery"       => [
                        "4 fotos con fotomontaje",
                        "6 fotos con edición profesional",
                        "8 impresiones tamaño jumbo",
                        "1 cuadro en tamaño 15x20",
                        "Puedes traer accesorios extra",
                        "Familiares incluidos"
                    ],
                    "promo"          => "",
                    "image"          => "uploads/img_paquetes/bebes_embarazadas_ia/bebes_historia_1_pancita.webp",
                ],

            ];

            renderPaquetesGrid($packages);
            ?>
        </div>
    </section>

    <!-- SECCIÓN 7: SESIONES DESTACADAS -->
    <section class="ss-landing-section ss-sesiones-destacadas">
        <div class="container ss-star-container">
            <h3 class="ss-star-title mobile-title ss-anim-text">Nuestras sesiones destacadas</h3>
            <div class="ss-star-collage">
                
                <!-- Columna Izquierda -->
                <div class="ss-star-col left-col">
                    <div class="ss-star-item item-1 ss-anim-scroll" style="transition-delay: 0.1s;">
                        <div class="ss-star-img-wrapper">
                            <img src="uploads/img_paquetes/bebes_embarazadas_ia/bebes_historia_1_pancita.webp" alt="Sesión fotográfica de maternidad en exteriores con luz natural" loading="lazy">
                        </div>
                        <div class="ss-star-text-wrapper">
                            <p class="ss-star-text ss-anim-text">Capturamos la esencia y delicadeza de tu embarazo, con luz natural y entornos que realzan tu conexión materna.</p>
                        </div>
                    </div>
                    <div class="ss-star-item item-2 ss-anim-scroll" style="transition-delay: 0.3s;">
                        <div class="ss-star-img-wrapper" style="background:#b5b5b5; display:flex; align-items:center; justify-content:center; aspect-ratio:3/4;">
                            <span style="color:#fff; font-size:0.85rem; opacity:0.7;">Imagen pendiente</span>
                        </div>
                        <div class="ss-star-text-wrapper">
                            <p class="ss-star-text ss-anim-text">Sesiones en estudio diseñadas para brindarte comodidad y elegancia, creando recuerdos atemporales de tu dulce espera.</p>
                        </div>
                    </div>
                </div>

                <!-- Columna Central -->
                <div class="ss-star-col center-col ss-anim-scroll">
                    <h3 class="ss-star-title desktop-title ss-anim-text">Nuestras sesiones destacadas</h3>
                    <div class="ss-star-item center-img-item" data-index="2">
                        <div class="ss-star-img-wrapper">
                            <img src="uploads/img_paquetes/bebes_embarazadas_ia/bebes_incluye_maternidad.webp" alt="Retrato artístico de maternidad y embarazo" class="center-img" loading="lazy">
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha -->
                <div class="ss-star-col right-col">
                    <div class="ss-star-item item-3 ss-anim-scroll" style="transition-delay: 0.2s;">
                        <div class="ss-star-img-wrapper">
                            <img src="uploads/img_paquetes/bebes_embarazadas_ia/bebes_historia_2_mama.webp" alt="Sesión de fotos de embarazo en estudio profesional" loading="lazy">
                        </div>
                        <div class="ss-star-text-wrapper">
                            <p class="ss-star-text ss-anim-text">Fotografías artísticas que resaltan la belleza de la maternidad, cuidando meticulosamente el vestuario y el encuadre.</p>
                        </div>
                    </div>
                    <div class="ss-star-item item-4 ss-anim-scroll" style="transition-delay: 0.4s;">
                        <div class="ss-star-img-wrapper" style="background:#b5b5b5; display:flex; align-items:center; justify-content:center; aspect-ratio:3/4;">
                            <span style="color:#fff; font-size:0.85rem; opacity:0.7;">Imagen pendiente</span>
                        </div>
                        <div class="ss-star-text-wrapper">
                            <p class="ss-star-text ss-anim-text">Un recuerdo invaluable de la vida que crece en ti. Nos aseguramos de reflejar tu estilo y la emoción más pura.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Estilos de la Sección Estrella -->
    <style>
        .ss-sesiones-destacadas {
            padding: 100px 0;
            overflow: hidden; /* Evitar scroll horizontal por animaciones */
        }
        
        .ss-star-collage {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
            align-items: center;
        }

        .ss-star-title {
            text-align: center;
            font-size: 2.2rem;
            font-family: 'Manrope', sans-serif;
            font-weight: 700;
            color: #333;
        }

        .desktop-title {
            margin-bottom: 2.5rem;
        }

        .mobile-title {
            display: none;
            margin-bottom: 2rem;
        }

        .ss-star-col {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .center-col {
            order: -1; /* En móviles, el centro va arriba */
        }

        .ss-star-item {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .ss-star-img-wrapper {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
            position: relative;
        }

        .ss-star-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .ss-star-text {
            font-size: 1.25rem;
            font-family: 'Charm', cursive;
            color: #555;
            line-height: 1.5;
            text-align: center;
            margin: 0;
            /* Efecto de revelado de texto más lento */
            background: linear-gradient(to right, #444 50%, #ddd 50%);
            background-size: 200% 100%;
            background-position: 100% 0;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: background-position 2.5s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .ss-anim-scroll.is-visible .ss-star-text {
            background-position: 0 0;
        }

        /* Animaciones base de aparición / desaparición */
        .ss-anim-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
            will-change: opacity, transform;
        }

        .ss-anim-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .ss-anim-scroll.is-hidden-top {
            opacity: 0;
            transform: translateY(-30px);
        }

        /* Layout Desktop (En forma de Estrella) */
        @media (min-width: 992px) {
            .ss-star-collage {
                grid-template-columns: 1fr 1.4fr 1fr;
                gap: 50px;
                align-items: center;
            }

            .center-col {
                order: 0;
                justify-content: center;
                align-items: center;
            }

            .left-col, .right-col {
                gap: 70px; /* Mayor separación vertical en laterales para equilibrar el centro alto */
            }

            /* Tamaños específicos para mantener espacio negativo */
            .left-col .ss-star-img-wrapper, 
            .right-col .ss-star-img-wrapper {
                aspect-ratio: 3/4;
            }

            .center-col .ss-star-img-wrapper {
                aspect-ratio: 4/5;
                width: 100%;
                max-width: 500px;
            }

            .desktop-title {
                font-size: 2.8rem;
            }
        }

        /* Layout Tablet (Masonry 2 columnas) */
        @media (min-width: 768px) and (max-width: 991px) {
            .ss-star-collage {
                grid-template-columns: 1fr 1fr;
                gap: 30px;
                align-items: start;
            }
            .center-col {
                grid-column: 1 / -1;
                order: -1;
                margin-bottom: 20px;
            }
            .center-col .ss-star-img-wrapper {
                aspect-ratio: 16/9;
            }
            .left-col {
                margin-top: 0;
            }
            .right-col {
                margin-top: 60px; /* Desfase para efecto cascada/masonry */
            }
            .desktop-title {
                display: block;
            }
        }

        /* Layout Móvil (Baraja Interactiva - Coverflow) */
        @media (max-width: 767px) {
            .desktop-title { display: none; }
            .mobile-title { display: block; }
            
            .ss-star-container {
                padding-left: 0;
                padding-right: 0;
                overflow: hidden; /* Ocultar tarjetas que sobresalgan */
            }
            
            .mobile-title {
                padding: 0 20px;
            }

            .ss-star-collage {
                position: relative;
                height: 480px; /* Altura del contenedor para la baraja */
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 30px;
                margin-top: 20px;
                perspective: 1000px;
            }

            .ss-star-col {
                display: contents; /* Desempaqueta las columnas */
            }

            .ss-star-item {
                position: absolute;
                width: 65vw;
                transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1), 
                            opacity 0.6s cubic-bezier(0.25, 1, 0.5, 1),
                            filter 0.6s cubic-bezier(0.25, 1, 0.5, 1);
                cursor: pointer;
                border-radius: 12px;
                /* El box-shadow se mantiene en el inner wrapper */
                -webkit-tap-highlight-color: transparent;
            }

            /* Ocultar descripciones solo en formato móvil */
            .ss-star-item .ss-star-text-wrapper {
                display: none;
            }

            .ss-star-img-wrapper {
                aspect-ratio: 3/4;
                width: 100%;
                box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            }
        }

        /* Preferencia de sistema: reducir animaciones */
        @media (prefers-reduced-motion: reduce) {
            .ss-anim-scroll {
                transition: opacity 1s ease !important;
                transform: none !important;
            }
            .ss-star-text {
                background: none;
                -webkit-text-fill-color: #666;
                color: #666;
            }
        }
    </style>

    <!-- Script de Intersección para Animaciones al hacer Scroll -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animaciones de revelado vertical
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const observer = new IntersectionObserver((entries) => {
                // Desactivar animaciones de scroll vertical en móvil para los items individuales (manejados por la baraja)
                if (window.innerWidth <= 767) return; 

                entries.forEach(entry => {
                    const el = entry.target;
                    const rect = el.getBoundingClientRect();
                    
                    if (entry.isIntersecting) {
                        el.classList.add('is-visible');
                        el.classList.remove('is-hidden-top');
                    } else {
                        if (rect.top < 0) {
                            el.classList.remove('is-visible');
                            el.classList.add('is-hidden-top');
                        } else {
                            el.classList.remove('is-visible');
                            el.classList.remove('is-hidden-top');
                        }
                    }
                });
            }, observerOptions);

            const animElements = document.querySelectorAll('.ss-anim-scroll');
            animElements.forEach(el => observer.observe(el));

            // Lógica de la Baraja Interactiva (Móvil)
            const deckItems = Array.from(document.querySelectorAll('.ss-star-item'));
            let currentIndex = 2; // Inicia con la imagen central
            let startX = 0;
            let endX = 0;

            function updateDeck() {
                if (window.innerWidth > 767) {
                    // Resetear estilos inline en Desktop/Tablet
                    deckItems.forEach(item => {
                        item.style.transform = '';
                        item.style.zIndex = '';
                        item.style.filter = '';
                        item.style.opacity = '';
                    });
                    return;
                }

                deckItems.forEach((item, index) => {
                    const offset = index - currentIndex;
                    const isCenter = offset === 0;
                    
                    // Matemáticas para el efecto baraja
                    const translateX = offset * 45; // Porcentaje de traslación
                    const scale = isCenter ? 1 : Math.max(0.7, 1 - Math.abs(offset) * 0.15);
                    const rotateZ = offset * 6; // Rotación sutil estilo abanico
                    const zIndex = 10 - Math.abs(offset);
                    const blur = isCenter ? '0px' : `${Math.abs(offset) * 3.5}px`;
                    const opacity = isCenter ? 1 : Math.max(0.3, 1 - Math.abs(offset) * 0.35);

                    // Forzar aparición ignorando las clases del observer en móvil
                    item.classList.add('is-visible'); 

                    item.style.transform = `translateX(${translateX}%) scale(${scale}) rotateZ(${rotateZ}deg)`;
                    item.style.zIndex = zIndex;
                    item.style.filter = `blur(${blur})`;
                    item.style.opacity = opacity;
                });
            }

            // Click para traer al frente
            deckItems.forEach((item, index) => {
                item.addEventListener('click', () => {
                    if (window.innerWidth <= 767 && currentIndex !== index) {
                        currentIndex = index;
                        updateDeck();
                    }
                });
            });

            // Gestos de Swipe
            const collageContainer = document.querySelector('.ss-star-collage');
            collageContainer.addEventListener('touchstart', (e) => {
                if (window.innerWidth > 767) return;
                startX = e.changedTouches[0].screenX;
            }, {passive: true});

            collageContainer.addEventListener('touchend', (e) => {
                if (window.innerWidth > 767) return;
                endX = e.changedTouches[0].screenX;
                handleSwipe();
            }, {passive: true});

            function handleSwipe() {
                const threshold = 40;
                if (startX - endX > threshold) {
                    // Swipe Izquierda -> Siguiente
                    if (currentIndex < deckItems.length - 1) {
                        currentIndex++;
                        updateDeck();
                    }
                } else if (endX - startX > threshold) {
                    // Swipe Derecha -> Anterior
                    if (currentIndex > 0) {
                        currentIndex--;
                        updateDeck();
                    }
                }
            }

            // Inicializar baraja
            updateDeck();
            window.addEventListener('resize', updateDeck);
        });
    </script>

    <!-- SECCIÓN 8: TESTIMONIOS -->
    <section class="ss-landing-section ss-testimonios-section bg-light">
        <div class="container">
            <h3 class="ss-section-title alignc margin-b40">Lo que dicen nuestras embarazadas</h3>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="ss-testimonio-card">
                        <div class="ss-test-bg-quote">"</div>
                        <div class="ss-stars">★★★★★</div>
                        <p class="ss-test-text">"Me daba vergüenza posar, pero el fotógrafo me hizo sentir cómoda desde el primer momento. El resultado fue increíble, muy natural y elegante."</p>
                        <div class="ss-test-author">
                            <div class="ss-author-avatar" style="background:#C69C6D;">V</div>
                            <span>Valeria R.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ss-testimonio-card">
                        <div class="ss-test-bg-quote">"</div>
                        <div class="ss-stars">★★★★★</div>
                        <p class="ss-test-text">"Las fotos de mi embarazo quedaron hermosas. Siempre quise recordar esa pancita de 8 meses y ahora la tengo enmarcada en la sala."</p>
                        <div class="ss-test-author">
                            <div class="ss-author-avatar" style="background:#C69C6D;">G</div>
                            <span>Gabriela M.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ss-testimonio-card">
                        <div class="ss-test-bg-quote">"</div>
                        <div class="ss-stars">★★★★★</div>
                        <p class="ss-test-text">"La guía de vestuario que me enviaron antes fue genial. Llegé preparada y todo fluyó perfecto. Las fotos capturaron exactamente cómo me sentía."</p>
                        <div class="ss-test-author">
                            <div class="ss-author-avatar" style="background:#C69C6D;">P</div>
                            <span>Patricia L.</span>
                        </div>
                    </div>
                </div>
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
                        ¿A cuántas semanas de embarazo es ideal la sesión de maternidad?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>El momento ideal es entre las <strong>semanas 32 y 36</strong> de embarazo. En esa etapa la pancita está bien redonda y fotogénica, pero todavía te manejas con comodidad para las diferentes poses. Es el punto dulce entre belleza y comodidad.</p>
                    </div>
                </div>

                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">
                        ¿Qué ropa o accesorios debo traer?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>Te enviamos una guía de vestuario previa a la sesión. <strong>Nosotros contamos con telas, flores y velos</strong> para prestarte durante la sesión. Lo ideal es traer 1 o 2 opciones de ropa ajustada en tonos neutros o pasteles que realce tu figura.</p>
                    </div>
                </div>

                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">
                        ¿Puede participar la pareja o los hijos en la sesión?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>¡Sí! Dedicamos un tiempo especial para tomar fotos en pareja o con los hermanitos. Es un momento muy especial que recomendamos para que quede completo el recuerdo de este nuevo capítulo familiar.</p>
                    </div>
                </div>

                <div class="ss-faq-item">
                    <button class="ss-faq-question" aria-expanded="false">
                        ¿La sesión es en studio o al aire libre?
                        <span class="ss-faq-icon" aria-hidden="true"></span>
                    </button>
                    <div class="ss-faq-answer">
                        <p>Ofrecemos <strong>ambas opciones</strong>. Las sesiones en studio tienen iluminación controlada con un ambiente más íntimo y elegante. Las sesiones en exteriores aprovechan la luz natural para un look fresco y auténtico. Tú eliges según tu estilo.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCIÓN CONTACTO / CTA FINAL -->
    <div class="ss-landing-cta-final">
        <div class="container alignc">
            <h2 class="display-4 margin-b30 ss-cta-title">¿Lista para eternizar la belleza de tu embarazo?</h2>
            <p class="ss-cta-desc">Escríbenos por WhatsApp y con gusto te asesoramos sobre el paquete ideal según tus semanas de embarazo.</p>
            <a href="https://wa.me/51941221847?text=Hola%2C%20quiero%20cotizar%20el%20servicio%20de%20Fotograf%C3%ADa%20de%20Embarazadas" target="_blank" rel="noopener noreferrer" class="ss-btn-primary">Cotizar por WhatsApp</a>
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
