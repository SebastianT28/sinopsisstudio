<?php

session_start();

include_once "config/controlador.php";

include_once "config/vista.php";

if (empty($_SESSION['spAD']) || !isset($_SESSION['spAD'])) {

	header("location:login");

} else {

	$sessionID = openssl_decrypt($_SESSION['spAD']['idadmin'], COD, KEY);

	$sessionUsuario = openssl_decrypt($_SESSION['spAD']['usuario'], COD, KEY);

	$sessionRango = openssl_decrypt($_SESSION['spAD']['rango'], COD, KEY);

}

$page = 'Panel';

$bNomUser = sacarNombreUsuario();

include_once "header.php";

require_once "menu.php";

date_default_timezone_set('America/Lima');

?>

            <!-- header area end -->

            <!-- page title area start -->

            <div class="page-title-area">

                <div class="row align-items-center">



                    <div class="col-sm-6">

                        <div class="breadcrumbs-area clearfix">

                            <h4 class="page-title pull-left"><?php echo $page; ?></h4>

                            <ul class="breadcrumbs pull-left">

                                <li><a href="">Inicio</a></li>

                                <li><span><?php echo $page; ?></span></li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-sm-6 clearfix">

                        <div class="user-profile pull-right">

                            <img class="avatar user-thumb" src="assets/images/avatar/1.jpg" alt="avatar">

                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php printf($sessionUsuario);?> <i class="fa fa-angle-down"></i></h4>

                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="logout">Cerrar sesión</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- page title area end -->





            <div class="main-content-inner">



                <div class="row">

                    <div class="col-md-4 mt-5 mb-3">

                        <div class="card">

                            <div class="seo-fact sbg1">

                                <div class="p-4 d-flex justify-content-between align-items-center">

                                    <div class="seofct-icon">

                                        <i class="ti-pencil-alt"></i> Servicios

                                    </div>

                                    <h2>8</h2>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-4 mt-5 mb-3">

                        <div class="card">

                            <div class="seo-fact sbg2">

                                <div class="p-4 d-flex justify-content-between align-items-center">

                                    <div class="seofct-icon">

                                        <i class="ti-user"></i> Clientes

                                    </div>

                                    <h2>8</h2>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-4 mt-5 mb-3">

                        <div class="card">

                            <div class="seo-fact sbg4">

                                <div class="p-4 d-flex justify-content-between align-items-center">

                                    <div class="seofct-icon">

                                        <i class="ti-briefcase"></i> Proyectos

                                    </div>

                                    <h2>8</h2>

                                </div>

                            </div>

                        </div>

                    </div>





                </div>





                <div class="row">

                    <div class="col-12 mt-5">

                        <div class="card">

                            <div class="card-body">



                                    <h4 class="header-title" style="float: left;">ÚLTIMOS PROYECTOS AGREGADOS</h4>



                                <div class="data-tables datatable-dark table-responsive">

                                    <?php widgetPortfolio();?>



                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>







        </div>

        <!-- main content area end -->

        <!-- footer area start-->

    <?php require_once "footer.php";?>

</body>



</html>
