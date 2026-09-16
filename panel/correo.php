<?php
session_start();
$sessionID=$_SESSION['idusuario'];
$sessionUsuario=$_SESSION['usuario'];
$sessionRango=$_SESSION['range'];
if (!isset($sessionID) && !isset($sessionUsuario)) {
  header("location:login");
}
include_once "config/controlador.php";
include_once "config/vista.php";
$page = 'Correos';
$bNomUser = sacarNombreUsuario();
include_once ("header.php");
//include_once ("menu.php");
?>

<?php 
require_once("menu.php");
?>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">

                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><?php echo $page; ?></h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="/gdem">Inicio</a></li>
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
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-area">
                                    <div class="invoice-head">
                                        <div class="row">
                                            <div class="iv-left col-6">
                                                <span>Enviar Correo Electrónico</span>
                                            </div>

                                        </div>
                                    </div>

                                    <center>
                                        <form action="send" method="post" name="frm_reporte" id="frm_reporte">
                                            <div class="form-row" style="justify-content: center;">
                                                <div class="col-md-3 mb-3">
                                                    <label>Cliente</label>
                                                    <select name="client" id="client" class="form-control">
                                                        <?php selectClients(); ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label>Fecha Inicio</label>
                                                    <input class="form-control" id="date" name="date" required type="date">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label>Fecha Fin</label>
                                                    <input class="form-control" id="date2" name="date2" required type="date">
                                                </div>
                                            </div>
                                                <input type="submit" class="btn btn-rounded btn-primary mt-4 pr-4 pl-4" name="btnreporte" id="btnreporte" value="Ver Noticias">
                                        </form>
                                    </center>
                                    <hr>
                                    
                                    <div class="single-table">
                                        <div class="table-responsive">
                                            <div id="tabla_reportes">

                                            </div>
                                        </div>                   
                                    </div>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
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


    <?php require_once("footer.php"); ?>
        <script>
            
    $(function(){
 $("#btnreporte").click(function(){
        var cliente = document.frm_reporte.client.value;
        var inicio = $('#date').val();
        var fin = $('#date2').val();

        //campo obligatorio
    if(cliente == "null")
    {
      swal("¡Ups!", "Debes elegir un cliente", "error");
      return false; 
    }
    else if(inicio == "")
    {
      swal("¡Ups!", "Debes elegir una fecha de inicio", "error");
      return false; 
    }
    else if(fin == "")
    {
      swal("¡Ups!", "Debes elegir una fecha de fin", "error");
      return false; 
    }

    else
    {
              // Evitar ejecutar el submit del formulario.
    }
 });


});
</script>
</body>

</html>

