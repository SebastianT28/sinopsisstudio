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
$page = 'Usuarios';
$bNomUser = sacarNombreUsuario();
include_once "header.php";
require_once "menu.php";
date_default_timezone_set('America/Lima');
?>
<div class="modal fade modal-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="users" method="post">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>Nombre *</label>
                            <input type="text" required class="form-control" name="name" autocomplete="off">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Apellidos *</label>
                            <input type="text" required class="form-control" name="apellidos" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label>Email *</label>
                            <input type="text" required class="form-control" name="email" autocomplete="off">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Nombre de Usuario *</label>
                            <input type="text" required class="form-control" name="user" autocomplete="off" placeholder="No usar espacios">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label>Password *</label>
                            <input type="password" required class="form-control" name="password" autocomplete="off">
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
	insertUsuario();
	//echo '<div class="alert alert-danger">Aún no estamos listos</div>';
	unset($_POST['btnAdd']);
}
if (isset($_GET['u']) && isset($_GET['t'])) {
	$tabla = 'wg_' . $_GET['t'];
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
                                <h4 class="header-title">Listado Usuarios</h4>
                                <a href="#" class="btn btn-rounded btn-success mb-3" data-toggle="modal" data-target=".modal-add">Agregar nuevo usuario</a>
                                <div class="data-tables datatable-dark table-responsive">
                                    <?php viewAllUsers();?>
                                </div>
                            </div>
                        </div>

                </div>

            </div>

        </div>
        <!-- main content area end -->
        <!-- footer area start-->

    <?php require_once "footer.php";?>
    <script>
     function actualizar(){location.reload(true);}
    $(function(){

    $("#btnaddUser").click(function(){
        var nombre = $('#name').val();
        var apellidos = $('#lastname').val();
        var usuario = $('#username').val();
        var pass = $('#password').val();
        //campo obligatorio
    if(nombre == "" || nombre.length == 0 || /^\s+$/.test(nombre))
    {
      swal("¡Ups!", "Debes ingresar el nombre.", "error");
      return false;
    }
    else if(apellidos == "" || apellidos.length == 0 || /^\s+$/.test(apellidos))
    {
      swal("¡Ups!", "Debes ingresar el apellido.", "error");
      return false;
    }
    else if(usuario == "" || usuario.length == 0 || /^\s+$/.test(usuario))
    {
      swal("¡Ups!", "Debes ingresar el nombre de usuario.", "error");
      return false;
    }
    else if(pass == "" || pass.length == 0 || /^\s+$/.test(pass))
    {
      swal("¡Ups!", "Debes ingresar una contraseña.", "error");
      return false;
    }


    else
    {
        return false;
    }
    });

        });
    </script>
</body>

</html>