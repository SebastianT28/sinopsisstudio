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

$page = 'Blog';

include_once "header.php";

include_once "menu.php";

date_default_timezone_set('America/Lima');

?>

<div class="modal fade modal-client">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">Nuevo artículo</h5>

                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>

            </div>

            <div class="modal-body">

                <form action="" method="post" name="form_blog" id="form_blog" enctype="multipart/form-data">

                    <div class="form-row">

                        <div class="col-md-6 mb-3">

                            <label>Imagen</label>

                            <input type="file" required class="form-control" name="image" id="image" autocomplete="off">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Título</label>

                            <input type="text" required class="form-control" name="title" id="title" maxlength="500" autocomplete="off">

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-6 mb-3">

                            <label>Autor</label>

                            <input type="text" required class="form-control" name="author" id="author" maxlength="400" autocomplete="off">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Etiquetas (separadas por comas)</label>

                            <input type="text" required class="form-control" name="tags" id="tags" maxlength="500" autocomplete="off">

                        </div>

                    </div>                    

                    <div class="form-row">

                        <div class="col-md-12 mb-3">

                            <label>Contenido</label>

                            <textarea class="form-control" name="contenido" id="editor1" autocomplete="off" rows="10" cols="80"></textarea>

                        </div>

                    </div>

                    <div class="col-md-12 mb-3">

                        <small class="text-danger">¡Advertencia! Por favor, no cierre esta ventana mientras carga un archivo. Cuando termine de cargar será redirigido automáticamente.</small>

                        <div id="loadimg" style="text-align:center;vertical-align: middle;margin-top: 10px;"><b>Subiendo artículo por favor espere...</b><img src="loading.gif" width="40px" alt=""></div>

                    </div>

            </div>

            <div class="modal-footer">

                <input type="submit" name="btnaddblog" class="btn btn-rounded btn-success" id="btnaddblog" value="Guardar Noticia">

                </form>

                <a href="#" class="btn btn-rounded btn-dark" data-dismiss="modal">Cerrar</a>

            </div>

            <?php

            

            ?>

        </div>

    </div>

</div>



<?php

if(isset($_POST['btnaddblog']))

{  

    newArticle();

}



if(isset($_GET['u']) && isset($_GET['t']) && isset($_GET['image']))

{   

    $tabla = 'ws_'.$_GET['t'];

    $id = $_GET['u'];

    $ruta = $_GET['image'];

    $rimg = "../uploads/img_articles/".$ruta;

    if(file_exists($rimg))

    {

        unlink($rimg);

    }

    deleteData($tabla,$id);

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

                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php printf($sessionUsuario); ?> <i class="fa fa-angle-down"></i></h4>

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

                    <div class="col-md-12 sm-6">

                        <div class="card">

                            <div class="card-body">

                                <a href="#" data-toggle="modal" data-target=".modal-client" class="btn btn-success btn-rounded">Crear nuevo artículo</a>

                                <div class="data-tables datatable-dark table-responsive">

                                    <?php viewAllBlog(); ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

              



        

        </div>

        <!-- main content area end -->

        <!-- footer area start-->



    <?php require_once("footer.php"); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">



<!-- Latest compiled and minified JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>





    <script>

        $('select').selectpicker();

     //function actualizar(){location.reload(true);}

    $(function(){



    $("#btnaddblog").click(function(){

        var imagen = $('#image').val();

        var titular = $('#title').val();

        var author = $('#author').val();

        var tags = $('#tags').val();

        var content = $('#editor1').val();

        //campo obligatorio

    if(imagen == 0)

    {

      swal("¡Ups!", "Debes elegir un archivo", "error");

      return false; 

    }

    else if(titular == "")

    {

      swal("¡Ups!", "Debes colocar un título", "error");

      return false; 

    }

    else if(author == "")

    {

      swal("¡Ups!", "Debes colocar un autor", "error");

      return false; 

    }

    else if(tags == "")

    {

      swal("¡Ups!", "Debes colocar etiquetas", "error");

      return false; 

    }

    else

    {



        // var url = "addimage.php";

        // $("#loadimg").show();

        // $.ajax({

        //     type: "POST",

        //     url: url,

        //     data: $("#form_blog").serialize(),

        //     success: function(data)

        //     {

        //         $("#respuesta").html(data);

        //         $("#loadimg").hide();

        //         //setInterval("actualizar()",3000); // Mostrar la respuestas del script PHP.

        //     }

        // });

        // return false;



        // var formData = new FormData($("#form_blog")[0]);

        // var url = "addimage.php"; 

        // $("#loadimg").show();

        // $.ajax({

        //     type: "POST",

        //     url: url,

        //     data: formData,

        //     contentType: false,

        //     processData: false,

        //     success: function(data)

        //     {

        //     $("#respuesta").html(data);

        //     $("#loadimg").hide();

        //     //setInterval("actualizar()",3000);

        //     }

        // });

        //return false;

    }

    });



        });

    </script>

</body>



</html>
