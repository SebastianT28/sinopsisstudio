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

$page = 'Clientes';

$bNomUser = sacarNombreUsuario();

include_once ("header.php");

//include_once ("menu.php");

?>



<?php 

require_once("menu.php");

date_default_timezone_set('America/Lima');

?>

<div class="modal fade modal-client">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">Nuevo Cliente</h5>

                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>

            </div>

            <div class="modal-body">

                <form action="" method="post" name="form_blog" id="form_blog" enctype="multipart/form-data">

                    <div class="form-row">

                        <div class="col-md-6 mb-3">

                            <label>Logo *</label>

                            <input type="file" required class="form-control" name="image" id="image" autocomplete="off">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Nombre de Cliente *</label>

                            <input type="text" required class="form-control" name="nombre" id="nombre" maxlength="300" autocomplete="off">

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-12 mb-3">

                            <label>Sitio web *</label>

                            <input type="text" required class="form-control" name="url" id="url" maxlength="500" autocomplete="off" placeholder="http://sitioweb.com">

                        </div>

                    </div>



                    <div class="col-md-12 mb-3">

                        <small class="text-danger">Advertencia! Por favor, no cierre esta ventana mientras carga un archivo. Cuando termine de cargar será redirigido automáticamente.</small>

                        <div id="loadimg" style="text-align:center;vertical-align: middle;margin-top: 10px;"><b>Subiendo artículo por favor espere...</b><img src="https://www.nicpeshawar.pk/wp-content/uploads/2018/05/lg.dual-ring-loader.gif" width="40px" alt=""></div>

                    </div>

            </div>

            <div class="modal-footer">

                <input type="submit" name="btnaddclients" class="btn btn-rounded btn-success" id="btnaddclients" value="Agregar cliente">

                </form>

                <a href="#" class="btn btn-rounded btn-dark" data-dismiss="modal">Cerrar</a>

            </div>

        </div>

    </div>

</div>



<?php 



if(isset($_POST['btnaddclients']))

{  

    newClient();

}



?>





<div id="respuesta"></div>



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

                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php printf($bNomUser[$sessionID]); ?> <i class="fa fa-angle-down"></i></h4>

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

                    <div class="col-md-12 sm-5">

                        <div class="card">

                            <div class="card-body">

                                

                                <a href="#" data-toggle="modal" data-target=".modal-client" class="btn btn-success btn-rounded">Agregar nuevo cliente</a>

                                <div class="data-tables datatable-dark table-responsive">

                                    <?php viewAllClients(); ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            

            <?php

            

            if(isset($_GET['u']) && isset($_GET['t']) && isset($_GET['image']))

            {   

                $tabla = 'wg_'.$_GET['t'];

                $id = $_GET['u'];

                $ruta = $_GET['image'];

                $rimg = "../uploads/logo_clientes/".$ruta;

                if(file_exists($rimg))

                {

                    unlink($rimg);

                }

                deleteData($tabla,$id);

            }

            

            ?>

              



        

        </div>

        <!-- main content area end -->

        <!-- footer area start-->



        <footer>

            <div class="footer-area">

                <p>© Copyright 2018 . All right reserved Goma de Mascar</p>

            </div>

        </footer>

        <!-- footer area end-->

    </div>

    <!-- page container area end -->

    <!-- offset area start -->



    <?php require_once("footer.php"); ?>

    <script>

     function actualizar(){location.reload(true);}

    

    $(function(){



    $("#btnaddclients").click(function(){

        var imagen = $('#image').val();

        var nombre = $('#nombre').val();

        var url = $('#url').val();

        //campo obligatorio

    if(imagen == 0)

    {

      swal("¡Ups!", "Debes elegir un archivo", "error");

      return false; 

    }

    else if(nombre == "")

    {

      swal("¡Ups!", "Debes colocar un nombre", "error");

      return false; 

    }

    else if(url == "")

    {

      swal("¡Ups!", "Debes colocar el enlace a la página web / facebook del cliente", "error");

      return false; 

    }

    else

    {



    }

    });



        });

    </script>

    

</body>



</html>
