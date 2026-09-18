<?php

require_once 'config/vista.php';

$page = 'Paquetes';
$title = "Paquetes para Cumpleaños | Sinopsis Studio";
$description = "Fotografía de cumpleaños en studio o exteriores en Arequipa. Inmortalizamos cada sonrisa y detalle de tu celebración. Consulta nuestros paquetes en Sinopsis Studio.";

require_once "header.php";?>

<!-- TOP HEADER IMAGE -->
        <div class="top-single-bkg topsinglepage">
            <div class="topsingleimg"><img src="uploads/img_paquetes/sesioncumpleaniosstudio.webp" alt="Fotografía de Cumpleaños Sinopsis Studio" width="1920" height="1080"></div>
            <div class="inner-desc">
                <div class="container">
                    <h1 class="display-2 single-post-title">Cumpleaños</h1>
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
            <div id="cumpleanos" class="fotografia">
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
                            "name"           => "Cumpleaños · Studio",
                            "description"    => "Capturando la magia de tu día. En nuestro estudio, no solo tomamos fotos; nos aseguramos de inmortalizar cada sonrisa y detalle de tu celebración. Queremos que te dediques a disfrutar mientras nosotros nos encargamos de guardar para siempre tu mejor momento.",
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
                                "10 fotografías editadas",
                                "3 fotos 20x30 cm"
                            ],
                            "considerations" => [
                                "Entrega: 10 días hábiles aprox."
                            ],
                            "promo"          => "",
                            "image"          => "uploads/img_paquetes/sesioncumpleaniosstudio.webp",
                        ],

                        [
                            "name"           => "Cumpleaños · Exterior",
                            "description"    => "Tu historia, bajo la mejor luz. En nuestro estudio, creemos que cada cumpleaños es una aventura nueva. Nos aseguramos de capturar la espontaneidad y la alegría de tu día en escenarios naturales.",
                            "price"          => ["S/ 165"],
                            "priceNote"      => "",
                            "category"       => "Exterior",
                            "badge"          => "",
                            "includes"       => [
                                "Sesión en locación exterior (parques, jardines o zonas urbanas)",
                                "Asesoría en poses y selección de spot"
                            ],
                            "delivery"       => [
                                "10 fotografías editadas profesionalmente",
                                "10 fotos impresas",
                                "3 fotos 20x30 cm (ideal para cuadro)"
                            ],
                            "considerations" => [
                                "Entrega: 12 días hábiles aprox."
                            ],
                            "promo"          => "",
                            "image"          => "uploads/img_paquetes/cumpleaniosexterior.webp",
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
                                <h2 class="display-4 margin-b30">¿Listo para celebrar a lo grande?</h2>
                                <p>Escríbenos y coordinamos la sesión perfecta para tu cumpleaños.</p>
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
