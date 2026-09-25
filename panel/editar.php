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

$page = 'Editar';

include_once ("header.php");

//include_once ("menu.php");

?>



<?php 

require_once("menu.php");

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



                <div class="card mt-3">

                    <div class="card-body">

                        <?php 



                        if(isset($_GET['id']) && isset($_GET['p']))

                        {

                          $table = $_GET['p'];

                          if($table == 'blogs')

                          {

                            viewEditNew();

                          }

                          else if($table == 'projects')

                          {

                            viewEditProject();

                          }

                          else if($table == 'users')

                          {

                              echo 'entreee';

                            viewEditUser();

                          }

                          else

                          {

                            echo 'No elegiste nada';

                          }

                           

                          

                           

                            

                        }

                         ?>

                        

                    </div>

                </div>



                <?php

                    if(!empty($_POST['btnEditArticle']))

                    {

                      updateArticle();

                      unset($_POST['btnEditArticle']);

                    }



                    if(!empty($_POST['btnEditProject']))

                    {

                      updateProject();

                      unset($_POST['btnEditProject']);

                    }



                    

                    if(!empty($_POST['btnEditUser']))

                    {

                      editUser();

                      unset($_POST['btnEditUser']);

                    }

                    

                ?>



            </div>

              



        

        </div>

        <!-- main content area end -->



    <!-- page container area end -->

    <!-- offset area start -->



    <?php require_once("footer.php"); ?>

    <script>

     function actualizar(){location.reload(true);}

    $(function(){



    $("#btneditArticle").click(function(){

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

    }

    });







    // EDIT PROJECT



    $("#btneditProject").click(function(){

        var titular = $('#title').val();

        var datebus = $('#date').val();

        var challenge = $('#challenge').val();

        var solution = $('#solution').val();

        var shortdesc = $('#shortdesc').val();

        //campo obligatorio

    if(titular == "")

    {

      swal("¡Ups!", "Debes colocar un título", "error");

      return false; 

    }

    else if(datebus == "")

    {

      swal("¡Ups!", "Debes colocar la fecha y empresa", "error");

      return false; 

    }

    else if(challenge == "")

    {

      swal("¡Ups!", "Debes colocar el reto", "error");

      return false; 

    }

    else if(solution == "")

    {

      swal("¡Ups!", "Debes colocar la solución", "error");

      return false; 

    }

    else if(shortdesc == "")

    {

      swal("¡Ups!", "Debes colocar la breve introducción", "error");

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
