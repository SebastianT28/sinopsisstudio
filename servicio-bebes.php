<?php

require_once 'config/vista.php';

$page = 'Paquetes';
$title = "Bebés y Embarazadas | Próximamente · Sinopsis Studio";
$description = "Próximamente: Sesiones fotográficas para bebés, newborn y embarazadas en Arequipa. Sinopsis Studio.";

require_once "header.php";?>

<!-- TOP HEADER IMAGE -->
        <div class="top-single-bkg topsinglepage">
            <div class="topsingleimg"><img src="uploads/img_paquetes/ninosstudio.webp" alt="Fotografía de Bebés Sinopsis Studio" width="1920" height="1080" style="filter:grayscale(0.4)"></div>
            <div class="inner-desc">
                <div class="container">
                    <h1 class="display-2 single-post-title">Bebés y Embarazadas</h1>
                    <span class="post-subtitle">Próximamente</span>
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

            <!-- MENSAJE PRÓXIMAMENTE -->
            <div class="section-holder section-info section-nomargin home-section-3-5" style="padding-bottom:150px; padding-top:80px;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="padding-lr200 alignc">
                                <div class="el-smalltitle">Próximamente</div>
                                <h2 class="display-4 margin-b30">Estamos preparando algo especial para ti</h2>
                                <p>Nuestros paquetes de fotografía para bebés, newborn y embarazadas estarán disponibles muy pronto. Mientras tanto, puedes escribirnos para consultar disponibilidad.</p>
                                <a href="https://wa.link/sinopsisstudio" target="_blank" class="read-more margin-t30">Consultar disponibilidad</a>
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
