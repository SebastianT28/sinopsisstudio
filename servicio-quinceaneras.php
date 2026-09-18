<?php

require_once 'config/vista.php';

$page = 'Paquetes';
$title = "Paquetes para Quinceañeros | Sinopsis Studio";
$description = "Sesiones individuales y cobertura completa de quinceañeros en Arequipa. Fotografía y video cinematográfico para tu gran día. Consulta nuestros paquetes.";

require_once "header.php";?>

<!-- TOP HEADER IMAGE -->
        <div class="top-single-bkg topsinglepage">
            <div class="topsingleimg"><img src="uploads/img_paquetes/15aniosfotoindividual.webp" alt="Fotografía de Quinceañeros Sinopsis Studio" width="1920" height="1080"></div>
            <div class="inner-desc">
                <div class="container">
                    <h1 class="display-2 single-post-title">Quinceañeros</h1>
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
            <div id="quinceaneras" class="fotografia">
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
                            "name"           => "15 Años · Sesión Individual",
                            "description"    => "Sesión en studio o exterior resaltando la esencia de tus 15 años.",
                            "price"          => ["S/ 150"],
                            "priceNote"      => "",
                            "category"       => "Studio",
                            "badge"          => "",
                            "includes"       => [
                                "Studio o exterior",
                                "Accesorios"
                            ],
                            "delivery"       => [
                                "15 fotografías editadas",
                                "3 fotos 20x30 cm"
                            ],
                            "considerations" => [
                                "Si es exterior no incluye pasajes"
                            ],
                            "promo"          => "",
                            "image"          => "uploads/img_paquetes/15aniosfotoindividual.webp",
                        ],

                        [
                            "name"           => "15 Años · Cobertura Full",
                            "description"    => "Tu historia de 15 años merece ser contada de principio a fin. Nos convertimos en testigos de tu gran día, capturando la narrativa completa del evento durante la ceremonia y la gran celebración, asegurándonos de que todo el esfuerzo de la planificación quede reflejado para siempre.",
                            "price"          => [
                                "S/ 400 Fotografía",
                                "S/ 450 Video",
                                "S/ 850 Fotografía y video"
                            ],
                            "priceNote"      => "",
                            "category"       => "Eventos",
                            "badge"          => "Premium",
                            "includes"       => [
                                "Hasta 5 horas máximo",
                                "Ceremonia completa (Misa y Local)",
                                "Limusina"
                            ],
                            "delivery"       => [
                                "Total de fotos en digital",
                                "35 fotos editadas en alta calidad",
                                "Video editado (1.5 horas aprox.)"
                            ],
                            "considerations" => [],
                            "promo"          => "",
                            "image"          => "uploads/img_paquetes/15anioscoberturafull.webp",
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
                                <h2 class="display-4 margin-b30">¿Lista para vivir el mejor día de tus 15?</h2>
                                <p>Escríbenos y hacemos realidad el reportaje que siempre soñaste.</p>
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
