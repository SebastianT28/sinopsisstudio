<?php

require_once 'config/vista.php';

$page = 'Paquetes';
$title = "Paquetes de fotografía | Sinopsis Studio";
$description = "Descubre los paquetes de fotografía de Sinopsis Studio para sesiones familiares, bebés y eventos especiales.";


require_once "header.php";?>



<!-- TOP HEADER IMAGE -->

        <div class="top-single-bkg topsinglepage">

            <div class="topsingleimg"> <img src="images/pages/13081.jpg" alt="" width="1920" height="1080"></div>

            <div class="inner-desc">

                <div class="container">

                    <h1 class="display-2 single-post-title">Nuestros paquetes</h1>

                    <span class="post-subtitle">Te ofrecemos</span>

                </div>

            </div>

        </div>

        <!-- /TOP HEADER IMAGE -->

        <!-- WRAP CONTENT -->

        <div id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix">

            <!-- SECTION 1 -->

            <div id="fotografia" class="fotografia">

                <div class="container margin-b50">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="padding-lr200 alignc">

                                <div class="el-smalltitle">Paquetes de Fotografía</div>

                            </div>

                        </div>

                        <!-- /col-lg-12 -->

                    </div>

                    <!-- /row -->
                    <?php
                    require 'include/components/paquetes-grid.php';

                    $packages = [

                        [
                            "name" => "Niños y Familia · Exterior",
                            "description" => "Nuestro estilo se basa en aprovechar el ambiente para documentar expresiones auténticas, centrando toda la atención en el protagonista. Para las familias aplicamos la misma dinámica, asegurándonos de capturar tanto la personalidad individual de cada miembro como la armonía del grupo en general.",
                            "price" => ["S/ 180"],
                            "priceNote" => "",
                            "category" => "Exterior",
                            "badge" => "",
                            "includes" => [
                                "Sesión realizada en exteriores",
                                "Duración: 1 hora aprox."
                            ],
                            "delivery" => [
                                "15 fotografías digitales editadas profesionalmente",
                                "5 fotos impresas (mismas que las digitales)"
                            ],
                            "considerations" => [
                                "No incluye pasajes y/o transporte",
                                "Entrega: 20-30 días hábiles aprox."
                            ],
                            "promo" => "",
                            "image" => "uploads/img_paquetes/familiaexterior.webp",
                        ],

                        [
                            "name" => "Niños · Studio",
                            "description" => "",
                            "price" => ["S/ 150"],
                            "priceNote" => "",
                            "category" => "Studio",
                            "badge" => "",
                            "includes" => [
                                "Sesión en estudio (fondo un solo color)",
                                "Hasta 2 cambios de ropa",
                                "Accesorios"
                            ],
                            "delivery" => [
                                "10 fotografías editadas profesionalmente",
                                "2 fotos impresas"
                            ],
                            "considerations" => [
                                "Entrega: 10 días hábiles aprox."
                            ],
                            "promo" => "",
                            "image" => "uploads/img_paquetes/ninosstudio.webp"
                        ],

                        [
                            "name" => "Familiares · Studio",
                            "description" => "",
                            "price" => ["S/ 150"],
                            "priceNote" => "",
                            "category" => "Studio",
                            "badge" => "",
                            "includes" => [
                                "Sesión en estudio (fondo 2 colores)",
                                "2 cambios de ropa"
                            ],
                            "delivery" => [
                                "15 fotografías editadas profesionalmente",
                                "5 fotos impresas"
                            ],
                            "considerations" => [
                                "No incluye vestuarios",
                                "Entrega: 10 días hábiles aprox."
                            ],
                            "promo" => "",
                            "image" => "uploads/img_paquetes/familiaresstudio.webp",
                        ],

                        [
                            "name" => "Bautizo · Cobertura de Evento",
                            "description" => "Capturamos momentos genuinos y llenos de vida en nuestras fotos. Para el video, subimos el nivel con tomas en movimiento y una edición de estilo cinematográfico que cuenta tu historia.",
                            "price" => [
                                "S/ 350 Fotografía",
                                "S/ 450 Video",
                                "S/ 800 Foto y video"
                            ],
                            "priceNote" => "",
                            "category" => "Eventos",
                            "badge" => "Más popular",
                            "includes" => [
                                "Ceremonia (2 horas)",
                                "Fiesta (2 horas)"
                            ],
                            "delivery" => [
                                "30 fotos digitales editadas",
                                "30 fotos impresas 10x15 cm",
                                "3 fotos 20x30 cm",
                                "Video editado (1 hora aprox.)"
                            ],
                            "considerations" => [
                                "No incluye pasajes",
                                "Entrega: 20 días aprox."
                            ],
                            "promo" => "",
                            "image" => "uploads/img_paquetes/ninoexterior.webp",
                        ],

                        [
                            "name" => "Baby Shower · Cobertura de Evento",
                            "description" => "Capturamos momentos genuinos y llenos de vida en nuestras fotos. Para el video, subimos el nivel con tomas en movimiento y una edición de estilo cinematográfico que cuenta tu historia.",
                            "price" => [
                                "S/ 250 Fotografía",
                                "S/ 300 Video",
                                "S/ 550 Foto y video"
                            ],
                            "priceNote" => "",
                            "category" => "Eventos",
                            "badge" => "",
                            "includes" => [
                                "Grabación de inicio y fin de show (2.5 horas aprox.)"
                            ],
                            "delivery" => [
                                "Total de fotos en digital",
                                "25 fotos editadas profesionalmente",
                                "Video editado (45 min. aprox.)",
                                "3 fotos 20x30 cm (ideal para cuadro)"
                            ],
                            "considerations" => [
                                "No incluye pasajes",
                                "Entrega: 22 días aprox."
                            ],
                            "promo" => "",
                            "image" => "uploads/img_paquetes/babyshower.webp",
                        ],

                        [
                            "name" => "15 Años · Sesión Individual",
                            "description" => "Sesión en studio o exterior resaltando la esencia de tus 15 años.",
                            "price" => ["S/ 150"],
                            "priceNote" => "",
                            "category" => "Studio",
                            "badge" => "",
                            "includes" => [
                                "Studio o exterior",
                                "Accesorios"
                            ],
                            "delivery" => [
                                "15 fotografías editadas",
                                "3 fotos 20x30 cm"
                            ],
                            "considerations" => [
                                "Si es exterior no incluye pasajes"
                            ],
                            "promo" => "",
                            "image" => "uploads/img_paquetes/15aniosfotoindividual.webp",
                        ],

                        [
                            "name" => "15 Años · Cobertura Full",
                            "description" => "Tu historia de 15 años merece ser contada de principio a fin. Nos convertimos en testigos de tu gran día, capturando la narrativa completa del evento durante la ceremonia y la gran celebración, asegurándonos de que todo el esfuerzo de la planificación quede reflejado para siempre.",
                            "price" => [
                                "S/ 400 Fotografía",
                                "S/ 450 Video",
                                "S/ 850 Fotografía y video"
                            ],
                            "priceNote" => "",
                            "category" => "Eventos",
                            "badge" => "Premium",
                            "includes" => [
                                "Hasta 5 horas máximo",
                                "Ceremonia completa (Misa y Local)",
                                "Limusina"
                            ],
                            "delivery" => [
                                "Total de fotos en digital",
                                "35 fotos editadas en alta calidad",
                                "Video editado (1.5 horas aprox.)"
                            ],
                            "considerations" => [],
                            "promo" => "",
                            "image" => "uploads/img_paquetes/15anioscoberturafull.webp",
                        ],

                        [
                            "name" => "Cumpleaños · Studio",
                            "description" => "Capturando la magia de tu día En nuestro estudio, no solo tomamos fotos; nos aseguramos de inmortalizar cada sonrisa y detalle de tu celebración. Queremos que te dediques a disfrutar mientras nosotros nos encargamos de guardar para siempre tu mejor momento.",
                            "price" => ["S/ 150"],
                            "priceNote" => "",
                            "category" => "Studio",
                            "badge" => "",
                            "includes" => [
                                "Sesión en estudio (fondo un solo color)",
                                "Hasta 2 cambios de ropa",
                                "Accesorios"
                            ],
                            "delivery" => [
                                "10 fotografías editadas",
                                "3 fotos 20x30 cm"
                            ],
                            "considerations" => [
                                "Entrega: 10 días hábiles aprox."
                            ],
                            "promo" => "",
                            "image" => "uploads/img_paquetes/sesioncumpleaniosstudio.webp",
                        ],

                        [
                            "name" => "Cumpleaños · Exterior",
                            "description" => "Tu historia, bajo la mejor luz. En nuestro estudio, creemos que cada cumpleaños es una aventura nueva. Nos aseguramos de capturar la espontaneidad y la alegría de tu día en escenarios naturales.",
                            "price" => ["S/ 165"],
                            "priceNote" => "",
                            "category" => "Exterior",
                            "badge" => "",
                            "includes" => [
                                "Sesión en locación exterior (parques, jardines o zonas urbanas)",
                                "Asesoría en poses y selección de spot"
                            ],
                            "delivery" => [
                                "10 fotografías editadas profesionalmente",
                                "10 fotos impresas",
                                "3 fotos 20x30 cm (ideal para cuadro)"
                            ],
                            "considerations" => [
                                "Entrega: 12 días hábiles aprox."
                            ],
                            "promo" => "",
                            "image" => "uploads/img_paquetes/cumpleaniosexterior.webp",
                        ],

                        [
                            "name" => "Foto Corporativa",
                            "description" => "Potenciamos tu imagen que transmite profesionalismo, seguridad y confianza.",
                            "price" => ["S/ 30"],
                            "priceNote" => "",
                            "category" => "Corporativo",
                            "badge" => "",
                            "includes" => [
                                "Sesión 15 minutos"
                            ],
                            "delivery" => [
                                "3 fotos digitales"
                            ],
                            "considerations" => [
                                "Fotos impresas con costo adicional",
                                "Entrega: 3 días hábiles aprox."
                            ],
                            "promo" => "",
                            "image" => "uploads/img_paquetes/fotocorporativa.webp",
                        ]

                    ];

                    renderPaquetesGrid($packages);
                    ?>

                    <div class="row margin-t50 novisible">

                        <div class="col-md-4 mobile-margin-b30 novisible">

                            <div class="price-box">

                                <h3 class="margin-b10">Paquete 1</h3>

                                <div class="margin-b30">El más económico</div>

                                <h2 class="price-title"><sup>S/</sup>199<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>45 Minutos de sesión</li>

                                    <li>1 muda de ropa</li>

                                    <li>1 fondo de color</li>

                                    <li>6 fotos digitales</li>

                                    <li>4 fotos impresas en 10x15</li>

                                </ul>

                                <a class="read-more btn100" href="https://wa.link/sinopsisstudio" target="_blank">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->  

                        <div class="col-md-4 mobile-margin-b30 novisible">

                            <div class="price-box price-box-middle white">

                                <h3 class="margin-b10 white">Paquete 2</h3>

                                <div class="margin-b30">El más popular</div>

                                <h2 class="price-title white"><sup>S/</sup>299<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>60 Minutos de sesión</li>

                                    <li>10 fotos digitales</li>

                                    <li>4 fotos impresas en 10 x 15 cm</li>

                                    <li>2 fotos impresas en 14.8 x 21 cm (jumbo)</li>

                                    <li>2 cambios de vestuario</li>

                                    <li>2 fondos de color</li>

                                </ul>

                                <a class="read-more btn100" href="https://wa.link/sinopsisstudio" target="_blank">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->

                        <div class="col-md-4 novisible">

                            <div class="price-box">

                                <h3 class="margin-b10">Paquete 3</h3>

                                <div class="margin-b30">El más recordado</div>

                                <h2 class="price-title"><sup>S/</sup>399<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>80 Minutos de sesión</li>

                                    <li>20 fotos digitales</li>

                                    <li>08 fotos impresas en 10 x 15 cm</li>

                                    <li>01 foto impresa en 29.7 x 21 cm</li>

                                    <li>01 fotocuadro 29.7 x 42 cm</li>

                                    <li>3 cambios de vestuario</li>

                                    <li>3 fondos de color</li>

                                </ul>

                                <a class="read-more btn100" href="https://wa.link/sinopsisstudio" target="_blank">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->

                    </div>

                </div>

                <!-- /container -->

            </div>

            <!-- /SECTION 1 -->

            <!-- SECTION -->

            <div id="pricing-2" class="pricing-2 parallax novisible" style="background-image:url(images/pages/contact-page.jpg);">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="alignc">

                                <div class="el-smalltitle white">Paquetes de Fotografía</div>

                                <h2 class="display-4 white">Sesión en Exteriores</h2>

                            </div>

                        </div>

                    </div> 

                </div>

            </div>

                <div class="container margin-b50 novisible">

                    <div class="row margin-t50">

                        <div class="col-md-4 mobile-margin-b30">

                            <div class="price-box">

                                <h3 class="margin-b10">Paquete 1</h3>

                                <div class="margin-b30">El más económico</div>

                                <h2 class="price-title"><sup>S/</sup>250<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>35 Minutos de sesión</li>

                                    <li>9 Fotos digitales</li>

                                    <li>4 Fotos impresas en 10x15</li>

                                    <li>2 Fotos impresas en 13x18</li>

                                    <li>2 Fotos impresas en 15x21</li>

                                    <li>Máximo 3 personas, persona adicional tiene un costo extra.</li>

                                </ul>

                                <a class="read-more btn100" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->  

                        <div class="col-md-4 mobile-margin-b30">

                            <div class="price-box price-box-middle white">

                                <h3 class="margin-b10 white">Paquete 2</h3>

                                <div class="margin-b30">El más popular</div>

                                <h2 class="price-title white"><sup>S/</sup>380<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>45 Minutos de sesión</li>

                                    <li>14 Fotos digitales</li>

                                    <li>8 Fotos impresas en 10x15</li>

                                    <li>2 Fotos impresas en 13x18</li>

                                    <li>3 Fotos impresas en 15x21</li>

                                    <li>1 Ampliación + Cuadro en 20x30 cm</li>

                                    <li>2 Cambios de vestuario</li>

                                    <li>Máximo 5 personas, persona adicional tiene un costo extra.</li>

                                </ul>

                                <a class="read-more btn100 white-btn" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->

                        <div class="col-md-4">

                            <div class="price-box">

                                <h3 class="margin-b10">Paquete 3</h3>

                                <div class="margin-b30">El más recordado</div>

                                <h2 class="price-title"><sup>S/</sup>600<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>1 Hora de Sesión </li>

                                    <li>20 Fotos digitales</li>

                                    <li>10 Fotos impresas en 10x15</li>

                                    <li>2 Fotos impresas en 13x18</li>

                                    <li>4 Fotos impresas en 15x21</li>

                                    <li>1 Ampliación + Cuadro en 20x30 cm</li>

                                    <li>2 Cambios de vestuario</li>

                                    <li>Photobook en 20x20 cm (5 Hojas - 10 páginas)</li>

                                    <li>Máximo 7 personas, persona adicional tiene un costo extra.</li>

                                </ul>

                                <a class="read-more btn100" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->

                    </div>

                </div>

                <!-- /container -->



            <!-- /SECTION -->



            <!-- SECTION -->

            <div id="pricing-3" class="pricing-3 parallax novisible" style="background-image:url(images/pages/contact-page.jpg);">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="alignc">

                                <div class="el-smalltitle white">Paquetes de Fotografía</div>

                                <h2 class="display-4 white">Eventos privados</h2>

                            </div>

                        </div>

                    </div> 

                </div>

            </div>

                <div class="container margin-b50 novisible">

                    <div class="row margin-t50">

                        <div class="col-md-6 mobile-margin-b30">

                            <div class="price-box">

                                <h3 class="margin-b10">Paquete 1</h3>

                                <div class="margin-b30">El más económico</div>

                                <h2 class="price-title"><sup>S/</sup>340<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>Hasta 1 1/2 hrs de fotos</li>

                                    <li>10 fotos digitales (retocadas y editadas)</li>

                                    <li>Asesoramiento</li>

                                </ul>

                                <a class="read-more btn100" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->  

                        <div class="col-md-6 mobile-margin-b30">

                            <div class="price-box price-box-middle white">

                                <h3 class="margin-b10 white">Paquete 2</h3>

                                <div class="margin-b30">El más popular</div>

                                <h2 class="price-title white"><sup>S/</sup>590<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>Hasta 2 hrs de fotos</li>

                                    <li>20 fotos digitales (retocadas y editadas)</li>

                                    <li>Asesoramiento</li>

                                </ul>

                                <a class="read-more btn100 white-btn" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                    </div>

                </div>

                <!-- /container -->



            <!-- /SECTION -->



            <!-- SECTION -->

            <div id="filmacion" class="pricing-4 parallax novisible" style="background-image:url(images/pages/contact-page.jpg);">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="alignc">

                                <div class="el-smalltitle white">Paquetes de Filmación</div>

                                <h2 class="display-4 white">Filmación de Eventos varios</h2>

                            </div>

                        </div>

                    </div> 

                </div>

            </div>

                <div class="container margin-b50 novisible">

                    <div class="row margin-t50">

                        <div class="col-md-4 mobile-margin-b30">

                            <div class="price-box">

                                <h3 class="margin-b10">Filmación y Fotografía básica</h3>

                                <div class="margin-b30">El más económico</div>

                                <h2 class="price-title"><sup>S/</sup>350<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>01 filmadora full hd</li>

                                    <li>01 cámara fotográfica</li>

                                    <li>01 DVD con todas las fotos entregadas en alta resolución</li>

                                    <li>01 USB con 01 hora como máximo de video editado</li>

                                    <li>Solo una locación y 02 horas de trabajo como máximo.</li>

                                </ul>

                                <a class="read-more btn100" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->  

                        <div class="col-md-4 mobile-margin-b30">

                            <div class="price-box price-box-middle white">

                                <h3 class="margin-b10 white">Filmación y fotografía estándar</h3>

                                <div class="margin-b30">El más popular</div>

                                <h2 class="price-title white"><sup>S/</sup>590<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>01 filmadora full hd</li>

                                    <li>01 cámara fotográfica</li>

                                    <li>01 Gopro</li>

                                    <li>01 DVD con todas las fotos entregadas en alta resolución</li>

                                    <li>10 fotos especialmente editadas en DVD</li>

                                    <li>01 USB con 1 hora y media como máximo de video editado</li>

                                    <li>Solo una locación y 02 horas de trabajo como máximo.</li>

                                </ul>

                                <a class="read-more btn100 white-btn" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->

                        <div class="col-md-4">

                            <div class="price-box">

                                <h3 class="margin-b10">Filmación y fotografía full</h3>

                                <div class="margin-b30">El más recordado</div>

                                <h2 class="price-title"><sup>S/</sup>790<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>01 filmadora full hd</li>

                                    <li>01 cámara fotográfica</li>

                                    <li>01 Gopro</li>

                                    <li>01 pre sesión fotografía y filmación (01 hora máximo)</li>

                                    <li>01 DVD con todas las fotos entregadas en alta resolución</li>

                                    <li>20 fotos especialmente editadas en DVD</li>

                                    <li>01 USB con 02 horas como máximo de video editado</li>

                                    <li>Solo una locación y 03 horas de trabajo como máximo.</li>

                                </ul>

                                <a class="read-more btn100" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->

                    </div>

                </div>

                <!-- /container -->



            <!-- /SECTION -->



            <!-- SECTION -->

            <div id="pricing-5" class="pricing-5 parallax novisible" style="background-image:url(images/pages/contact-page.jpg);">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="alignc">

                                <div class="el-smalltitle white">Paquetes de Filmación</div>

                                <h2 class="display-4 white">Filmación de Quince años</h2>

                            </div>

                        </div>

                    </div> 

                </div>

            </div>

                <div class="container margin-b50 novisible">

                    <div class="row margin-t50">

                        <div class="col-md-4 mobile-margin-b30">

                            <div class="price-box">

                                <h3 class="margin-b10">Filmación y Fotografía básica</h3>

                                <div class="margin-b30">El más económico</div>

                                <h2 class="price-title"><sup>S/</sup>490<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>01 Filmadora</li>

                                    <li>01 cámara fotográfica</li>

                                    <li>01 DVD con todas las fotos entregadas en alta resolución</li>

                                    <li>01 USB con 01 hora como máximo de video editado</li>

                                    <li>Cobertura del evento a partir del ingreso de la quinceañera.</li>

                                    <li>Fotografía y filmación de ceremonia y fiesta.</li>

                                </ul>

                                <a class="read-more btn100" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->  

                        <div class="col-md-4 mobile-margin-b30">

                            <div class="price-box price-box-middle white">

                                <h3 class="margin-b10 white">Filmación y fotografía estándar</h3>

                                <div class="margin-b30">El más popular</div>

                                <h2 class="price-title white"><sup>S/</sup>690<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>01 Filmadora</li>

                                    <li>01 cámara fotográfica</li>

                                    <li>01 Gopro</li>

                                    <li>01 DVD con todas las fotos entregadas en alta resolución</li>

                                    <li>01 USB con 01 hora y media como máximo de video editado</li>

                                    <li>10 fotos editadas especialmente</li>

                                    <li>Cobertura del evento a partir de la casa de la quinceañera.</li>

                                    <li>Fotografía y filmación de ceremonia y fiesta.</li>

                                </ul>

                                <a class="read-more btn100 white-btn" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->

                        <div class="col-md-4">

                            <div class="price-box">

                                <h3 class="margin-b10">Filmación y fotografía full</h3>

                                <div class="margin-b30">El más recordado</div>

                                <h2 class="price-title"><sup>S/</sup>990<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>01 filmadora full hd</li>

                                    <li>01 cámara fotográfica</li>

                                    <li>01 Gopro</li>

                                    <li>01 pre sesión fotografía y filmación (01 hora máximo)</li>

                                    <li>01 DVD con todas las fotos entregadas en alta resolución</li>

                                    <li>20 fotos especialmente editadas</li>

                                    <li>01 USB con 02 horas como máximo de video editado</li>

                                    <li>Cobertura del evento a partir de la casa de la quinceañera.</li>

                                    <li>Fotografía y filmación de ceremonia y fiesta.</li>

                                </ul>

                                <a class="read-more btn100" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->

                    </div>

                </div>

                <!-- /container -->



            <!-- /SECTION -->



            <!-- SECTION -->

            <div id="pricing-6" class="pricing-6 parallax novisible" style="background-image:url(images/pages/contact-page.jpg);">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="alignc">

                                <div class="el-smalltitle white">Paquetes de Filmación</div>

                                <h2 class="display-4 white">Filmación de Matrimonios</h2>

                            </div>

                        </div>

                    </div> 

                </div>

            </div>

                <div class="container margin-b50 novisible">

                    <div class="row margin-t50">

                        <div class="col-md-4 mobile-margin-b30">

                            <div class="price-box">

                                <h3 class="margin-b10">Filmación y Fotografía básica</h3>

                                <div class="margin-b30">El más económico</div>

                                <h2 class="price-title"><sup>S/</sup>490<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>01 Filmadora</li>

                                    <li>01 cámara fotográfica</li>

                                    <li>01 DVD con todas las fotos entregadas en alta resolución</li>

                                    <li>01 USB con 01 hora como máximo de video editado</li>

                                    <li>Fotografía y filmación llegada a la iglesia, ceremonia y fiesta.</li>

                                </ul>

                                <a class="read-more btn100" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->

                        <div class="col-md-4">

                            <div class="price-box price-box-middle white">

                                <h3 class="margin-b10 white">Filmación y fotografía full</h3>

                                <div class="margin-b30">El más recordado</div>

                                <h2 class="price-title white"><sup>S/</sup>1190<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>01 filmadora full hd</li>

                                    <li>01 cámara fotográfica</li>

                                    <li>01 Gopro</li>

                                    <li>01 asistente de fotografía y filmación.</li>

                                    <li>01 pre sesión fotografía y filmación (02 hora máximo)</li>

                                    <li>01 DVD con todas las fotos entregadas en alta resolución</li>

                                    <li>20 fotos especialmente editadas</li>

                                    <li>01 USB con 02 horas como máximo de video editado</li>

                                    <li>Cobertura desde la casa de la novia</li>

                                    <li>Fotografía y filmación desde la iglesia, paseo, ceremonia y fiesta.</li>

                                </ul>

                                <a class="read-more btn100 white-btn" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->

                        <div class="col-md-4 mobile-margin-b30">

                            <div class="price-box">

                                <h3 class="margin-b10">Filmación y fotografía estándar</h3>

                                <div class="margin-b30">El más popular</div>

                                <h2 class="price-title"><sup>S/</sup>790<sub>/sesión</sub></h2>

                                <ul class="price-features">

                                    <li>01 Filmadora</li>

                                    <li>01 cámara fotográfica</li>

                                    <li>01 DVD con todas las fotos entregadas en alta resolución</li>

                                    <li>01 USB con 01 hora y media como máximo de video editado</li>

                                    <li>10 fotos especialmente editadas</li>

                                    <li>Cobertura desde la casa de la novia</li>

                                    <li>Fotografía y filmación llegada a la iglesia, paseo, ceremonia y fiesta.</li>

                                </ul>

                                <a class="read-more btn100" href="#">Cotizar</a>

                            </div>

                            <!-- /price-box -->

                        </div>

                        <!-- /col-md-4 -->

                        

                    </div>

                </div>

                <!-- /container -->



            <!-- /SECTION -->



            <!-- SECTION 3 -->

            <div id="contacto" class="section-holder novisible">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="padding-lr200 alignc">

                                <div class="el-smalltitle">Adquiere tu paquete</div>

                                <h2 class="display-4 margin-b30">Realiza tu cotización</h2>

                            </div>

                            <div id="contact-form-holder" class="padding-lr200">

                                <form method="post" id="contact-form" action='include/contact-process.php'>

                                    <div class="row">

                                        <div class="col-md-4 margin-b30"><input type="text" name="name" class="comm-field" placeholder="Nombre" /></div>

                                        <div class="col-md-4 margin-b30"><input type="text" name="email" class="comm-field" placeholder="Correo electrónico" /> </div>

                                        <div class="col-md-4 margin-b30"><input type="text" name="phone" class="comm-field" placeholder="Celular" /> </div>

                                    </div>

                                    <div class="margin-b30"><textarea name="message" id="msg-contact" rows="5" placeholder="Describe el servicio que deseas"></textarea></div>

                                    <p class="antispam">Deja esto vacío: <input type="text" name="url" /></p>

                                    <p><input type="submit" value="Enviar" class="submit"/></p>

                                </form>

                            </div>

                            <!-- contact-form-holder-->

                            <div id="output-contact"></div>

                    </div>

                    <!-- /col-lg-12 -->

                </div>

                <!-- /row -->

            </div>

            <!-- /container -->

        </div>

        <!-- /SECTION 3 --> 

        <!-- SECTION 5 -->

            <div id="contacto" class="section-holder section-info  section-nomargin home-section-3-5" style="padding-bottom: 150px;">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="padding-lr200 alignc">

                                <div class="el-smalltitle">Contáctanos</div>

                                <h2 class="display-4 margin-b30">¿Necesitas capturar algún momento en especial?</h2>

                                <p>En Sinopsis Studio, contamos con el equipo y espacios necesarios para realizar tus sesiones fotográficas y capturar momentos mágicos para ti.</p>

                                <a href="https://wa.link/sinopsisstudio" target="_blank" class="read-more margin-t30">Contactanos</a>

                            </div>

                        </div>

                        <!-- /col-lg-12 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /SECTION 5 -->    

        </div>

        <!-- /WRAP CONTENT -->

        



    <?php require_once "footer.php";?>


    <script type="module">
    import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5/dist/photoswipe-lightbox.esm.js';

    const lightbox = new PhotoSwipeLightbox({
    gallery: '.galeria',
    children: 'a',
    pswpModule: () => import('https://unpkg.com/photoswipe@5/dist/photoswipe.esm.js')
    });

    lightbox.init();
    </script>
    </body>

</html>