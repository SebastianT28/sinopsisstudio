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

$page = 'Servicios';

$bNomUser = sacarNombreUsuario();

include_once "header.php";

require_once "menu.php";

date_default_timezone_set('America/Lima');

?>

<div class="modal fade modal-add">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">Nuevo servicio</h5>

                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>

            </div>

            <div class="modal-body">

                <form action="" method="post">

                    <div class="form-row">

                        <div class="col-md-12 mb-3">

                            <label>Nombre del servicio *</label>

                            <input type="text" required class="form-control" name="name" autocomplete="off">

                        </div>

                    </div>

            </div>

            <div class="modal-footer">

                <input type="submit" name="btnAdd" class="btn btn-rounded btn-success" value="Agregar">

                </form>

                <a href="#" class="btn btn-rounded btn-dark" data-dismiss="modal">Cerrar</a>

            </div>

            <?php

if (!empty($_POST['btnAdd'])) {

	newService();

	//echo '<div class="alert alert-danger">Aún no estamos listos</div>';

	unset($_POST['btnAdd']);

}

if (isset($_GET['u']) && isset($_GET['t'])) {

	$tabla = 'ws_' . $_GET['t'];

	$id = $_GET['u'];

	deleteUsuario($tabla, $id);

}

?>

        </div>

    </div>

</div>

            <!-- header area end -->

            <!-- page title area start -->

            <div class="page-title-area">

                <div class="row align-items-center">



                    <div class="col-sm-6">

                        <div class="breadcrumbs-area clearfix">

                            <h4 class="page-title pull-left"><?php echo $page; ?></h4>

                            <ul class="breadcrumbs pull-left">

                                <li><a href="#">Inicio</a></li>

                                <li><span><?php echo $page; ?></span></li>

                            </ul>

                        </div>

                    </div>

                    <div class="col-sm-6 clearfix">

                        <div class="user-profile pull-right">

                            <img class="avatar user-thumb" src="assets/images/avatar/1.jpg" alt="avatar">

                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php printf($bNomUser[$sessionID]);?> <i class="fa fa-angle-down"></i></h4>

                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="logout">Cerrar sesión</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- page title area end -->

            <div class="main-content-inner">



                <div class="col-12 mt-5">

                        <div class="card">

                            <div class="card-body">

                                <a href="#" class="btn btn-rounded btn-success mb-3" data-toggle="modal" data-target=".modal-add">Agregar servicio</a>

                                <div class="data-tables datatable-dark table-responsive">

                                    <?php viewAllServices();?>

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
