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
        <div id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix">

            <!-- BACK LINK -->
            <div class="container" style="padding-top: 48px;">
                <a href="paquetes" class="ss-back-link" style="display:inline-flex;align-items:center;gap:6px;font-family:Manrope,sans-serif;font-size:.82rem;font-weight:600;letter-spacing:.07em;text-transform:uppercase;color:#777;text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                    Todos los servicios
                </a>
            </div>

            <!-- PAQUETES -->
            <div id="corporativo" class="fotografia">
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

            <!-- SECCIÓN CONTACTO -->
            <div class="section-holder section-info section-nomargin home-section-3-5" style="padding-bottom:150px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="padding-lr200 alignc">
                                <div class="el-smalltitle">Contáctanos</div>
                                <h2 class="display-4 margin-b30">¿Listo para proyectar tu mejor imagen?</h2>
                                <p>Escríbenos para coordinar tu sesión corporativa o de marca personal.</p>
                                <a href="https://wa.link/sinopsisstudio" target="_blank" class="read-more margin-t30">Cotizar por WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
<!-- /WRAP CONTENT -->

    <?php require_once "footer.php";?>
    </body>
</html>
