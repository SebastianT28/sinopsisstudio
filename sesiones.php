<?php

require_once 'config/vista.php';

$page = 'Portafolio';
$title = "Sesiones fotográficas | Sinopsis Studio";
$description = "Sesiones fotográficas profesionales para eventos, bebés y parejas con escenarios personalizados en exterior y en studio.";


require_once "header.php";?>





<!-- TOP HEADER IMAGE -->

        <div class="top-single-bkg top-single-gallery">

            <div class="topsingleimg"> <img src="images/pages/img-pricing.jpg" alt="" width="1920" height="1080"></div>

            <div class="inner-desc">

                <div class="container">

                    <h1 class="display-2 single-post-title"><?php echo $page; ?></h1>

                    <span class="post-subtitle">Momentos de magia capturados</span>

                </div>

            </div>

        </div>

        <!-- /TOP HEADER IMAGE -->

        <!-- WRAP CONTENT -->

        <div id="wrap-content" class="page-content page-holder custom-page-template clearfix">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <?php viewFiltersProjects();?>

                        <div class="portfolio-grid-container portfolio-grid-container-v2">

                            <?php viewProjects();?>

                            <!-- /portfolio-grid -->

                        </div>

                        <!-- /portfolio-grid-container -->

                    </div>

                    <!-- /col-lg-12 -->

                </div>

                <!-- /row -->

            </div>

            <!-- /container -->

        </div>

        <!-- /WRAP CONTENT -->

         <!-- SECTION 5 -->

            <!--<div id="contacto" class="section-holder aboutus-2-5" style="padding-top: 60px;">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="padding-lr200 alignc">

                                <div class="el-smalltitle">Contáctanos</div>

                                <h2 class="display-5 margin-b30">¿Buscas un fotógrafo / filmmaker?</h2>

                                <p>En Sinopsis Studio podemos ayudarte a capturar tus momentos mágicos</p>

                                <a href="contact.html" class="read-more margin-t30">Contáctanos</a>

                            </div>

                        </div>-->

                        <!-- /col-lg-12 -->

                   <!--</div>-->

                    <!-- /row -->

               <!-- </div>-->

                <!-- /container -->

            <!--</div>-->

            <!-- /SECTION 5 --> 



             <!-- SECTION 5 --><br><br>

            <div id="contacto" class="section-holder section-info  section-nomargin home-section-3-5" style="padding-bottom: 150px;">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="padding-lr200 alignc">

                                <div class="el-smalltitle">Contáctanos</div>

                                <h2 class="display-4 margin-b30">¿Necesitas capturar algún momento en especial?</h2>

                                <p>En Sinopsis Studio, contamos con el equipo y espacios necesarios para realizar tus sesiones fotográficas y capturar momentos mágicos para ti.</p>

                                <a href="https://wa.me/51941221847?text=Hola%2C%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios" target="_blank" class="read-more margin-t30">Contactanos</a>

                            </div>

                        </div>

                        <!-- /col-lg-12 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /SECTION 5 -->  



<?php require_once "footer.php";?>



    </body>

</html>
