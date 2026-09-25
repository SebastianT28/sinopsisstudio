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

$page = 'Proyectos';

include_once "header.php";

include_once "menu.php";

date_default_timezone_set('America/Lima');

?>







<div class="modal fade" id="modalGrande">

    <div class="modal-dialog modal-lg">

        <div class="modal-content" id="modalContentGrande">



        </div>

    </div>

</div>



<div class="modal fade" id="modalGallery">

    <div class="modal-dialog" style="max-width: 80%;">

        <div class="modal-content" id="modalContentGallery">



        </div>

    </div>

</div>







<div class="modal fade modal-client">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title">Nuevo Proyecto</h5>

                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>

            </div>

            <div class="modal-body">

                <form action="" method="post" name="form_blog" id="form_blog" enctype="multipart/form-data">

                    <div class="form-row">

                        <div class="col-md-6 mb-3">

                            <label>Imagen Principal / Portada *</label>

                            <input type="file" required class="form-control" name="image" id="image" autocomplete="off">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Nombre del proyecto *</label>

                            <input type="text" required class="form-control" name="title" id="title" maxlength="200" autocomplete="off">

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-6 mb-3">

                            <label>Cliente - Fecha *</label>

                            <input type="text" required class="form-control" name="date" id="date" maxlength="200" autocomplete="off" placeholder="Ejemplo: Sinopsis - 20 Junio 2060">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Tipo de Proyecto *</label>

                            <select class="selectpicker form-control" name="type_project[]" data-live-search="true" title="Seleccionar servicio">

                                <?php selectTypeProjects();?>

                            </select>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-12 mb-3">

                            <label>Introducción (150 caracteres) *</label>

                            <textarea class="form-control" name="shortdesc" id="shortdesc" maxlength="150" required autocomplete="off" rows="2"></textarea>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-12 mb-3">

                            <label>Enlace Facebook o Página web (opcional para social media o web)</label>

                            <input type="text" class="form-control" name="link" id="link" maxlength="500" autocomplete="off" placeholder="https://">

                        </div>

                    </div>



                    <div class="form-row">

                        <div class="col-md-12 mb-3">

                            <label>Enlace Youtube video (para servicio audiovisual)</label>

                            <input type="text" class="form-control" name="video" id="video" maxlength="500" autocomplete="off" placeholder="Ej: https://www.youtube.com/watch?v=qcAZJXMMnVQ">

                        </div>

                    </div>



                    <div class="form-row">

                        <div class="col-md-12 mb-3">

                            <label>Descripción *</label>

                            <textarea class="form-control" name="results" id="editor1" autocomplete="off" rows="10" cols="80"></textarea>

                        </div>

                    </div>

                    <div class="col-md-12 mb-3">

                        <small class="text-danger">Advertencia! Por favor, no cierre esta ventana mientras carga un archivo. Cuando termine de cargar será redirigido automáticamente.</small>

                        <div id="loadimg" style="text-align:center;vertical-align: middle;margin-top: 10px;"><b>Subiendo artículo por favor espere...</b><img src="loading.gif" width="40px" alt=""></div>

                    </div>

            </div>

            <div class="modal-footer">

                <input type="submit" name="btnaddproject" class="btn btn-rounded btn-success" id="btnaddproject" value="Guardar Proyecto">

                </form>

                <a href="#" class="btn btn-rounded btn-dark" data-dismiss="modal">Cerrar</a>

            </div>

        </div>

    </div>

</div>





<?php



if (isset($_POST['btnaddproject'])) {

	newProject();

}



if (isset($_GET['u']) && isset($_GET['t']) && isset($_GET['image'])) {

	$tabla = 'wS_' . $_GET['t'];

	$id = $_GET['u'];

	$ruta = $_GET['image'];

	$rimg = "../uploads/img_projects/" . $ruta;

	if (file_exists($rimg)) {

		unlink($rimg);

	}

	deleteData($tabla, $id);

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

                    <div class="col-md-12 sm-6">

                        <div class="card">

                            <div class="card-body">

                                <a href="#" data-toggle="modal" data-target=".modal-client" class="btn btn-success btn-rounded">Crear nuevo proyecto</a>

                                <div class="data-tables datatable-dark table-responsive">

                                    <?php viewAllPortfolio();?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>





        <?php



if (!empty($_POST['btnaddfoto'])) {

	//newPhotoProject();

	$respuesta = '

              <script>

              swal("¡Urra!", "Agregado con éxito.", "success");

             var pagina="projects"

                function redireccionar()

                {

                location.href=pagina

                }

                setTimeout ("redireccionar()", 2000);

                  </script>';

	echo $respuesta;

}



?>





        </div>

        <!-- main content area end -->

        <!-- footer area start-->



    <?php require_once "footer.php";?>







    <script>



    function addPhotoProject(project_id) {

        $('#modalGrande').modal();

        $('#modalContentGrande').load('add_photo_projects.php?project_id=' + project_id);

    }



    function viewPhotosProject(project_id) {

        $('#modalGallery').modal();

        $('#modalContentGallery').load('view_photo_projects.php?project_id=' + project_id);

    }





        $('select').selectpicker();

     //function actualizar(){location.reload(true);}

    $(function(){



    $("#btnaddproject").click(function(){

        var imagen = $('#image').val();

        var titular = $('#title').val();

        var datebus = $('#date').val();

        var shortdesc = $('#shortdesc').val();

        //campo obligatorio

    if(imagen == 0)

    {

      swal("¡Ups!", "Debes elegir un archivo", "error");

      return false;

    }

    else if(titular == "")

    {

      swal("¡Ups!", "Debes colocar un nombre", "error");

      return false;

    }

    else if(datebus == "")

    {

      swal("¡Ups!", "Debes colocar cliente y fecha", "error");

      return false;

    }

    else if(shortdesc == "")

    {

      swal("¡Ups!", "Debes colocar la breve introducción", "error");

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
