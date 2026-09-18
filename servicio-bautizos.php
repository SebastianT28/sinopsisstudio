<?php

require_once 'config/vista.php';

$page = 'Paquetes';
$title = "Paquetes para Bautizos | Sinopsis Studio";
$description = "Fotografía y video para bautizos en Arequipa. Cobertura completa de ceremonia y fiesta. Consulta nuestros paquetes en Sinopsis Studio.";

require_once "header.php";?>

<!-- TOP HEADER IMAGE -->
        <div class="top-single-bkg topsinglepage">
            <div class="topsingleimg"><img src="uploads/img_paquetes/ninoexterior.webp" alt="Fotografía de Bautizos Sinopsis Studio" width="1920" height="1080"></div>
            <div class="inner-desc">
                <div class="container">
                    <h1 class="display-2 single-post-title">Bautizos</h1>
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
            <div id="bautizos" class="fotografia">
                <div class="container margin-b50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="padding-lr200 alignc">
                                <div class="el-smalltitle">Paquetes de Fotografía y Video</div>
                            </div>
                        </div>
                    </div>

                    <?php
                    require_once 'include/components/paquetes-grid.php';
                    require_once 'include/components/paquete-card.php';

                    $packages = [

                        [
                            "name"           => "Bautizo · Cobertura de Evento",
                            "description"    => "Capturamos momentos genuinos y llenos de vida en nuestras fotos. Para el video, subimos el nivel con tomas en movimiento y una edición de estilo cinematográfico que cuenta tu historia.",
                            "price"          => [
                                "S/ 350 Fotografía",
                                "S/ 450 Video",
                                "S/ 800 Foto y video"
                            ],
                            "priceNote"      => "",
                            "category"       => "Eventos",
                            "badge"          => "Más popular",
                            "includes"       => [
                                "Ceremonia (2 horas)",
                                "Fiesta (2 horas)"
                            ],
                            "delivery"       => [
                                "30 fotos digitales editadas",
                                "30 fotos impresas 10x15 cm",
                                "3 fotos 20x30 cm",
                                "Video editado (1 hora aprox.)"
                            ],
                            "considerations" => [
                                "No incluye pasajes",
                                "Entrega: 20 días aprox."
                            ],
                            "promo"          => "",
                            "image"          => "uploads/img_paquetes/ninoexterior.webp",
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
                                <h2 class="display-4 margin-b30">¿Quieres inmortalizar este día especial?</h2>
                                <p>Escríbenos y coordinamos la cobertura del bautizo de tu pequeño.</p>
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
