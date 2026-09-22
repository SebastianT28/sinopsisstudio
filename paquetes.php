<?php

require_once 'config/vista.php';

$page = 'Paquetes';
$title = "Servicios de fotografía y video | Sinopsis Studio";
$description = "Descubre todos los servicios de Sinopsis Studio: sesiones familiares, bautizos, quinceañeros, bebés, baby showers, cumpleaños, bodas y corporativo.";

require_once "header.php";?>



<!-- TOP HEADER IMAGE -->

        <div class="top-single-bkg topsinglepage">

            <div class="topsingleimg"> <img src="images/pages/13081.jpg" alt="Nuestros Servicios" width="1920" height="1080"></div>

            <div class="inner-desc">

                <div class="container">

                    <h1 class="display-2 single-post-title">Nuestros Servicios</h1>

                    <span class="post-subtitle">Elige el servicio que buscas</span>

                </div>

            </div>

        </div>

        <!-- /TOP HEADER IMAGE -->

        <!-- WRAP CONTENT -->

        <div id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix">

            <!-- FRASE CONMOVEDORA -->
            <div class="ss-frase-conmovedora">
                <div class="ss-frase-wrapper">
                    <!-- Rama de árbol -->
                    <svg class="ss-rama" viewBox="0 0 200 50" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0,40 Q50,10 100,25 T200,10" stroke="#8B5A2B" stroke-width="3" fill="none" stroke-linecap="round"/>
                        <path d="M30,26 Q45,10 55,15" stroke="#8B5A2B" stroke-width="2" fill="none" stroke-linecap="round"/>
                        <path d="M120,28 Q140,45 150,35" stroke="#8B5A2B" stroke-width="2" fill="none" stroke-linecap="round"/>
                        <path d="M165,15 Q175,5 185,10" stroke="#8B5A2B" stroke-width="1.5" fill="none" stroke-linecap="round"/>
                    </svg>

                    <h2>
                        "Porque hay capítulos de tu vida que merecen ser recordados para siempre."
                        <!-- Corazón de madera -->
                        <svg class="ss-corazon" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <!-- Sombra interior/textura -->
                            <path d="M50,90 C50,90 10,60 10,30 C10,15 25,5 40,15 C50,25 50,25 50,25 C50,25 50,25 60,15 C75,5 90,15 90,30 C90,60 50,90 50,90 Z" fill="#8B5A2B"/>
                            <!-- Puntos simulando textura de madera -->
                            <circle cx="30" cy="35" r="2.5" fill="#4A3015"/>
                            <circle cx="25" cy="45" r="1.5" fill="#4A3015"/>
                            <circle cx="40" cy="50" r="3" fill="#4A3015"/>
                            <circle cx="60" cy="30" r="1.5" fill="#4A3015"/>
                            <circle cx="70" cy="40" r="2.5" fill="#4A3015"/>
                            <circle cx="75" cy="55" r="1.5" fill="#4A3015"/>
                            <circle cx="50" cy="65" r="2" fill="#4A3015"/>
                            <circle cx="35" cy="60" r="1.5" fill="#4A3015"/>
                            <circle cx="60" cy="55" r="2" fill="#4A3015"/>
                            <circle cx="45" cy="35" r="1.5" fill="#4A3015"/>
                            <circle cx="50" cy="45" r="1" fill="#4A3015"/>
                        </svg>
                    </h2>
                </div>
            </div>

            <!-- GRID DE CATEGORÍAS DE SERVICIOS -->
            <section class="ss-paquetes-section" style="padding: 40px 0;">
                <!-- Elementos Decorativos: Ramas Izquierda -->
                <img src="uploads/img_paquetes/Decorative elements/Elemento decorativo ramas 1.svg" class="ss-ramas-decor ss-ramas-1-izq" alt="" aria-hidden="true" loading="lazy" decoding="async">
                <img src="uploads/img_paquetes/Decorative elements/Elemento decorativo ramas 2.svg" class="ss-ramas-decor ss-ramas-2-izq" alt="" aria-hidden="true" loading="lazy" decoding="async">
                <img src="uploads/img_paquetes/Decorative elements/Elemento decorativo ramas 1.svg" class="ss-ramas-decor ss-ramas-3-izq" alt="" aria-hidden="true" loading="lazy" decoding="async">

                <!-- Elementos Decorativos: Ramas Derecha (Invertidas) -->
                <img src="uploads/img_paquetes/Decorative elements/Elemento decorativo ramas 1 invertido.svg" class="ss-ramas-decor ss-ramas-1-der" alt="" aria-hidden="true" loading="lazy" decoding="async">
                <img src="uploads/img_paquetes/Decorative elements/Elemento decorativo ramas 2 invertido.svg" class="ss-ramas-decor ss-ramas-2-der" alt="" aria-hidden="true" loading="lazy" decoding="async">
                <img src="uploads/img_paquetes/Decorative elements/Elemento decorativo ramas 1 invertido.svg" class="ss-ramas-decor ss-ramas-3-der" alt="" aria-hidden="true" loading="lazy" decoding="async">
                
                <div class="container">
                    <?php
                    require_once 'include/components/servicios-grid.php';

            $servicios = [

                [
                    'nombre'      => 'Familiares',
                    'descripcion' => 'Capturamos la personalidad de cada miembro y la armonía del grupo, en studio o en exteriores.',
                    'imagenes'    => [
                        'uploads/img_paquetes/familiaexterior.webp',
                        'uploads/img_paquetes/familiaresstudio.webp',
                        'uploads/img_paquetes/ninosstudio.webp',
                    ],
                    'url'         => 'servicio-familiares',
                ],

                [
                    'nombre'      => 'Bautizos',
                    'descripcion' => 'Documentamos cada momento sagrado del día, desde la ceremonia hasta la celebración.',
                    'imagenes'    => [
                        'uploads/img_paquetes/ninoexterior.webp',
                    ],
                    'url'         => 'servicio-bautizos',
                ],

                [
                    'nombre'      => 'Quinceañeros',
                    'descripcion' => 'Tu historia de 15 años merece ser contada de principio a fin, con sesión previa y cobertura completa del evento.',
                    'imagenes'    => [
                        'uploads/img_paquetes/15aniosfotoindividual.webp',
                        'uploads/img_paquetes/15anioscoberturafull.webp',
                    ],
                    'url'         => 'servicio-quinceaneras',
                ],

                [
                    'nombre'      => 'Bebés y Embarazadas',
                    'descripcion' => 'Sesiones delicadas para los momentos más tiernos: newborn, maternidad y familia con bebé.',
                    'imagenes'    => [
                        'uploads/img_paquetes/ninosstudio.webp',
                        'uploads/img_paquetes/ninoexterior.webp',
                    ],
                    'url'         => 'servicio-bebes',
                ],

                [
                    'nombre'      => 'Baby Showers',
                    'descripcion' => 'Capturamos cada momento de celebración de la nueva vida que está por llegar.',
                    'imagenes'    => [
                        'uploads/img_paquetes/babyshower.webp',
                    ],
                    'url'         => 'servicio-babyshowers',
                ],

                [
                    'nombre'      => 'Cumpleaños',
                    'descripcion' => 'Inmortalizamos cada sonrisa y detalle de tu celebración en studio o en exteriores.',
                    'imagenes'    => [
                        'uploads/img_paquetes/sesioncumpleaniosstudio.webp',
                        'uploads/img_paquetes/cumpleaniosexterior.webp',
                    ],
                    'url'         => 'servicio-cumple',
                ],

                [
                    'nombre'      => 'Bodas',
                    'descripcion' => 'Contamos la historia de tu gran día con la profundidad que se merece, de principio a fin.',
                    'imagenes'    => [
                        'images/pages/boda1.jpg',
                        'images/pages/headboda.jpg',
                    ],
                    'url'         => 'servicio-bodas',
                ],

                [
                    'nombre'      => 'Corporativo y Marca Personal',
                    'descripcion' => 'Potenciamos tu imagen profesional con headshots, sesiones de marca personal y fotografía empresarial.',
                    'imagenes'    => [
                        'uploads/img_paquetes/fotocorporativa.webp',
                    ],
                    'url'         => 'servicio-corporativo',
                ],

            ];

            renderServiciosGrid($servicios);

            ?>
                </div>
            </section>
            <!-- /GRID DE CATEGORÍAS -->

            <!-- SECCIÓN DE CONTACTO -->

            <div class="section-holder section-info section-nomargin home-section-3-5" style="padding-bottom: 150px;">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="padding-lr200 alignc">

                                <div class="el-smalltitle">Contáctanos</div>

                                <h2 class="display-4 margin-b30">¿Necesitas capturar algún momento en especial?</h2>

                                <p>En Sinopsis Studio, contamos con el equipo y espacios necesarios para realizar tus sesiones fotográficas y capturar momentos mágicos para ti.</p>

                                <a href="https://wa.link/sinopsisstudio" target="_blank" class="read-more margin-t30">Contáctanos</a>

                            </div>

                        </div>

                        <!-- /col-lg-12 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /SECCIÓN DE CONTACTO -->

        </div>

        <!-- /WRAP CONTENT -->


    <?php require_once "footer.php";?>

    </body>

</html>
