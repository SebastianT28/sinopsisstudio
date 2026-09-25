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

                                                <span>Enviar E-mail</span>

                                            </div>



                                        </div>

                                    </div>



                                    <?php viewMails(); ?>



                                    <div id="respuestamail"></div>

                                



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

 $("#btnSendEmail").click(function(){

        var emails = $('#email').val();

        var asunto = $('#asunto').val();

        //campo obligatorio

    if(emails == "")

    {

      swal("¡Ups!", "Debes ingresar al menos un correo electrónico", "error");

      return false; 

    }

    else if(asunto == "")

    {

      swal("¡Ups!", "Debes ingresar el asunto del mensaje", "error");

      return false; 

    }



        else

        {   

            var url = "success"; // El script a dónde se realizará la petición.

            $("#loadmail").show();

            $.ajax({

                   type: "POST",

                   url: url,

                   data: $("#frm_sendmail").serialize(), // Adjuntar los campos del formulario enviado.

                   success: function(data)

                   {

                       $("#respuestamail").html(data);

                       $("#loadmail").hide(); // Mostrar la respuestas del script PHP.

                   }

                 });

            return false;

              // Evitar ejecutar el submit del formulario.

        }

 });





});

</script>

</body>



</html>



