<?php

require_once 'config/vista.php';

$page = 'Paquetes';
$title = "Paquetes para Familias | Sinopsis Studio";
$description = "Sesiones fotográficas familiares en studio o exteriores. Capturamos la personalidad de cada miembro y la armonía del grupo. Consulta nuestros paquetes en Arequipa.";

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
        <div id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix">

            <!-- BACK LINK -->
            <div class="container" style="padding-top: 48px;">
                <a href="paquetes" class="ss-back-link" style="display:inline-flex;align-items:center;gap:6px;font-family:Manrope,sans-serif;font-size:.82rem;font-weight:600;letter-spacing:.07em;text-transform:uppercase;color:#777;text-decoration:none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                    Todos los servicios
                </a>
            </div>

            <!-- PAQUETES -->
            <div id="familiares" class="fotografia">
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
                            "name"           => "Niños y Familia · Exterior",
                            "description"    => "Nuestro estilo se basa en aprovechar el ambiente para documentar expresiones auténticas, centrando toda la atención en el protagonista. Para las familias aplicamos la misma dinámica, asegurándonos de capturar tanto la personalidad individual de cada miembro como la armonía del grupo en general.",
                            "price"          => ["S/ 180"],
                            "priceNote"      => "",
                            "category"       => "Exterior",
                            "badge"          => "",
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
                            "description"    => "",
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
                            "description"    => "",
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
            </div>
            <!-- /PAQUETES -->

            <!-- SECCIÓN CONTACTO -->
            <div class="section-holder section-info section-nomargin home-section-3-5" style="padding-bottom:150px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="padding-lr200 alignc">
                                <div class="el-smalltitle">Contáctanos</div>
                                <h2 class="display-4 margin-b30">¿Listo para capturar momentos familiares?</h2>
                                <p>Escríbenos y coordinamos tu sesión fotográfica familiar.</p>
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
