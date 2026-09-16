<?php

require_once 'config/vista.php';



$alias = trim($_GET['var'], '/');

$id = $alias;



$page = 'Portafolio';

$nameImg = extractImageProject($id);

$titulo = extractNameProject($id);

$descProject = extractDescripcionProject($id);

$ruta = "uploads/img_projects/$nameImg";

$title = $titulo . " | Sinopsis Studio";

$description = "Sesión fotográfica profesional de $titulo realizada por Sinopsis Studio en Arequipa, Perú. Especialistas en fotografía familiar, sesiones para bebés, maternidad y eventos.";

require_once "header.php";?>



<!-- TOP HEADER IMAGE -->

        <div class="top-single-bkg top-single-gallery">

            <div class="topsingleimg"> <img src="images/pages/portfolio1-page.jpg" alt="" width="1920" height="1080"></div>

            <div class="inner-desc">

                <div class="container">

                    <h1 class="display-2 single-post-title"><?php echo $titulo; ?></h1>

                    <span class="post-subtitle"><?php viewDetailsProjects($id);?></span>

                </div>

            </div>

        </div>

        <!-- /TOP HEADER IMAGE -->

        <!-- WRAP CONTENT -->

        <div id="wrap-content" class="page-content page-gallery-content">

            <div class="container">

                <div class="page-holder custom-page-template page-full">

                    <div class="margin-b50">

                        <?php viewDetailsProjects($id);?>

                    </div>

                </div>

                <!-- /page-holder -->

            </div>

            <!-- /container -->

            <div class="gallery-container">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="portfolio-grid gallery-holder-grid gallery-justify gallery-grid3cols">



                                <?php 

                                viewGalleryProjects($id);

                                ?>

                                

                                

                            </div>

                            <!-- /portfolio-masonry -->

                        </div>

                        <!-- /col-lg-12 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /gallery-container -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-12">

                        <div class="margin-b50 margin-t35">

                            <h2 class="display-4">También te puede interesar</h2>

                        </div>

                        <?php widgetProjects(); ?>

                    </div>

                </div>

            </div>

            <!-- /prev-next-gallery -->

        </div>

        <!-- /WRAP CONTENT -->

        



<?php require_once "footer.php";?>



    </body>

</html>