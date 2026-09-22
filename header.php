<?php $url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>

<!DOCTYPE html>

<html lang="es-419">

    <head>

        <base href="<?php echo URL; ?>">

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="description" content="<?php echo $description ?? 'Sinopsis Studio ofrece sesiones de fotos familiares, para bebés y eventos especiales con iluminación profesional.'; ?>">

        <meta name="robots" content="index, follow">

        <meta name="googlebot" content="index, follow">

        <title><?php echo $title ?? 'Sinopsis Studio | Fotografía familiar y sesiones profesionales'; ?></title>

        <link rel="preload" as="image" href="images/home/slider-1.webp">

        <!-- Google Fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&family=Engagement&family=Manrope:wght@400;500;600;700;800&family=Montserrat:wght@100;500&family=Oooh+Baby&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->

        <link rel='stylesheet' id='bootstrap-css'  href='css/bootstrap/css/bootstrap.min.css' type='text/css' media='all' />
        
        <!-- Main CSS File -->

        <link rel='stylesheet' id='tilia-style-css'  href='style.css?v.0.0.1' type='text/css' media='all' />
        
        <!-- Font Awesome Icons CSS -->

        <link rel="preload" href="css/fontawesome/css/font-awesome.min.css" as="style" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css"></noscript>

        <!-- favicons -->

        <link rel="icon" href="images/icons/favicon-32x32.png" sizes="32x32" />

        <link rel="icon" href="images/icons/favicon-192x192.png" sizes="192x192" />

        <link rel="apple-touch-icon-precomposed" href="images/icons/favicon-180x180.png" />

        <!-- PhotoSwipe -->
        <link rel="preload" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css" as="style" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css"></noscript>

        <style>

        .novisible{

            display:none;

        }

        </style>

    </head>

    <body class="home home-3">

        <div class="menu-mask">

            <!-- MOBILE MENU HOLDER -->

            <div class="container mobile-menu-holder">

                <div class="row">

                    <div class="col-md-12">

                        <button class="exit-mobile" aria-label="Cerrar menú móvil">

                            <svg version="1.1" id="btn-menu-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">

                                <path d="M15.4,15.3l-0.1,0.1c-0.7,0.7-1.9,0.7-2.6,0L0.6,3.3c-0.7-0.7-0.7-1.9,0-2.6l0.1-0.1c0.7-0.7,1.9-0.7,2.6,0l12.1,12.1

                                    C16.2,13.4,16.2,14.6,15.4,15.3z"></path>

                                <path d="M0.7,15.4l-0.1-0.1c-0.7-0.7-0.7-1.9,0-2.6L12.7,0.6c0.7-0.7,1.9-0.7,2.6,0l0.1,0.1c0.7,0.7,0.7,1.9,0,2.6L3.3,15.4

                                    C2.6,16.2,1.4,16.2,0.7,15.4z"></path>

                            </svg>

                        </button>

                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-7">

                        <!-- MOBILE MENU -->

                        <ul class="menu-mobile">

                            <li class="menu-item <?php if($page=='Inicio') {echo 'current-menu-item';} ?>" >

                                <a href="/">Inicio</a>

                            </li>

                            <li class="menu-item <?php if($page=='Nosotros') {echo 'current-menu-item';} ?>">

                                <a href="nosotros">Nosotros</a>

                            </li>

                            <li class="menu-item menu-item-has-children <?php if($page=='Paquetes') {echo 'current-menu-item';} ?>">

                                <a href="paquetes">Servicios</a>

                                <ul class="sub-menu">

                                    <li class="menu-item"><a href="servicio-familiares">Familiares</a></li>

                                    <li class="menu-item"><a href="servicio-bautizos">Bautizos</a></li>

                                    <li class="menu-item"><a href="servicio-quinceaneras">Quinceañeros</a></li>

                                    <li class="menu-item"><a href="servicio-bebes">Bebés y Embarazadas</a></li>

                                    <li class="menu-item"><a href="servicio-babyshowers">Baby Showers</a></li>

                                    <li class="menu-item"><a href="servicio-cumple">Cumpleaños</a></li>

                                    <li class="menu-item"><a href="servicio-bodas">Bodas</a></li>

                                    <li class="menu-item"><a href="servicio-corporativo">Corporativo y Marca Personal</a></li>

                                </ul>

                            </li>

                            <li class="menu-item <?php if($page=='Portafolio') {echo 'current-menu-item';} ?>">

                                <a href="sesiones">Portafolio</a>

                            </li>

                            <li class="menu-item <?php if($page=='Contacto') {echo 'current-menu-item';} ?>">

                                <a href="contact.html">Contacto</a>

                            </li>

                            <li class="menu-item <?php if($page=='FAQs') {echo 'current-menu-item';} ?>">

                                <a href="faqs">FAQs</a>

                            </li>

                        </ul>

                        <!-- /MOBILE MENU -->

                    </div>

                    <!-- /col-lg-7 -->

                    <div class="col-lg-5">

                        <div class="menu-contact">

                            <div class="mobile-content">

                                <h5 class="widgettitle">Nuestras oficinas</h5>

                                <div class="mobile-address"> Av. Emmel 129A, Yanahuara - Arequipa <br> +51 941 221 847 <br> informes@sinopsisstudio.com</div>

                                <h5 class="widgettitle">Redes Sociales</h5>

                                <ul class="social-media">

                                    <li><a class="social-facebook" href="https://www.facebook.com/people/Sinopsis-Studio/61555981502738/" target="_blank" aria-label="Facebook de Sinopsis Studio">Facebook</a></li>

                                    <li><a class="social-twitter" href="https://wa.link/sinopsisstudio" target="_blank" aria-label="WhatsApp de Sinopsis Studio">Whatsapp</a></li>

                                    <li><a class="social-instagram" href="https://www.instagram.com/sinopsis.studio/" target="_blank" aria-label="Instagram de Sinopsis Studio">Instagram</a></li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <!-- /col-lg-5 -->

                </div>

                <!-- /row -->

            </div>

            <!-- /container -->

        </div>

        <!-- /MOBILE MENU HOLDER -->

        <!-- HEADER -->

        <header class="main-header header-5">

            <div class="container">

                <div class="top-header top-header-5">

                    <div class="header-social header-social-5">

                        <ul class="social-media">

                            <li><a class="social-facebook" href="https://www.facebook.com/people/Sinopsis-Studio/61555981502738/" target="_blank" aria-label="Facebook de Sinopsis Studio"><i class="fab fa-facebook-f"></i></a></li>

                            <li><a class="social-whatsapp" href="https://wa.link/sinopsisstudio" target="_blank" aria-label="WhatsApp de Sinopsis Studio"><i class="fab fa-whatsapp"></i></a></li>

                            <li><a class="social-instagram" href="https://www.instagram.com/sinopsis.studio/" target="_blank" aria-label="WhatsApp de Sinopsis Studio"><i class="fab fa-instagram"></i></a></li>

                        </ul>

                    </div>

                    <div class="logo logo-5 logo-white"><a href="/" role="banner"><img class="img-fluid" src="images/logo-tilia.png" alt="Tilia" width="139" height="90" aria-label="Ir a la página de inicio de Sinopsis Studio"></a></div>

                    <div class="logo logo-5 logo-dark"><a href="/"><img class="img-fluid" src="images/logo-dark-tilia.png" alt="Tilia" width="139" height="90"></a></div>

                    <div class="btn-header btn-header-5"> <a href="https://wa.link/sinopsisstudio" target="_blank" class="read-more">Contáctanos</a></div>

                    <!-- mobile menu button -->

                    <div class="nav-button-holder nav-button-holder-5">

                        <button type="button" class="nav-button" aria-label="Abrir menú móvil">

                            <svg version="1.1" id="btn-menu-open" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">

                                <g>

                                    <path d="M2,4L2,4C0.9,4,0,3.1,0,2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C4,3.1,3.1,4,2,4z"></path>

                                    <path d="M8,4L8,4C6.9,4,6,3.1,6,2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C10,3.1,9.1,4,8,4z"></path>

                                    <path d="M14,4L14,4c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C16,3.1,15.1,4,14,4z"></path>

                                    <path d="M2,10L2,10c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C4,9.1,3.1,10,2,10z"></path>

                                    <path d="M8,10L8,10c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C10,9.1,9.1,10,8,10z"></path>

                                    <path d="M14,10L14,10c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C16,9.1,15.1,10,14,10z"></path>

                                    <path d="M2,16L2,16c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C4,15.1,3.1,16,2,16z"></path>

                                    <path d="M8,16L8,16c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C10,15.1,9.1,16,8,16z"></path>

                                    <path d="M14,16L14,16c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h0c1.1,0,2,0.9,2,2v0C16,15.1,15.1,16,14,16z"></path>

                                </g>

                            </svg>

                        </button>

                    </div>

                    <!-- /mobile menu button -->

                </div>

                <!-- /top-header -->

                <div class="header-container5">

                    <nav class="nav-holder nav-holder-5" role="navigation">

                        <ul class="menu-nav">

                            <li class="menu-item <?php if($page=='Inicio') {echo 'current-menu-item';} ?>">

                                <a href="/">Inicio</a>

                            </li>

                            <li class="menu-item <?php if($page=='Nosotros') {echo 'current-menu-item';} ?>">

                                <a href="nosotros">Nosotros</a>

                            </li>

                            <li class="menu-item menu-item-has-children <?php if($page=='Paquetes') {echo 'current-menu-item';} ?>">

                                <a href="paquetes">Servicios</a>

                                <ul class="sub-menu">

                                    <li class="menu-item"><a href="servicio-familiares">Familiares</a></li>

                                    <li class="menu-item"><a href="servicio-bautizos">Bautizos</a></li>

                                    <li class="menu-item"><a href="servicio-quinceaneras">Quinceañeros</a></li>

                                    <li class="menu-item"><a href="servicio-bebes">Bebés y Embarazadas</a></li>

                                    <li class="menu-item"><a href="servicio-babyshowers">Baby Showers</a></li>

                                    <li class="menu-item"><a href="servicio-cumple">Cumpleaños</a></li>

                                    <li class="menu-item"><a href="servicio-bodas">Bodas</a></li>

                                    <li class="menu-item"><a href="servicio-corporativo">Corporativo y Marca Personal</a></li>

                                </ul>

                            </li>

                            <li class="menu-item <?php if($page=='Portafolio') {echo 'current-menu-item';} ?>">

                                <a href="sesiones">Portafolio</a>

                            </li>

                            <li class="menu-item <?php if($page=='Contacto') {echo 'current-menu-item';} ?>">

                                <!--<a href="<?php echo $url; ?>#contacto">Contacto</a>-->

                                 <a href="contact.html">Contacto</a>

                                

                            </li>

                            <li class="menu-item <?php if($page=='FAQs') {echo 'current-menu-item';} ?>">

                                <a href="faqs">FAQs</a>

                            </li>

                        </ul>

                    </nav>

                </div>

            </div>

        </header>

        <!-- /HEADER -->