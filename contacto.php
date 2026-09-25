<?php

require_once 'config/vista.php';

$page = 'Contacto';
$title = "Contacto | Sinopsis Studio";
$description = "Contáctanos para reservar tu sesión de fotos familiar, para bebés o eventos especiales con Sinopsis Studio.";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);

    $telefono = htmlspecialchars($_POST['telefono']);

    $email = htmlspecialchars($_POST['email']);

    $message = htmlspecialchars($_POST['message']);



    //$to = "sinopsismarketingventas@gmail.com"; // Cambia esto por tu dirección de correo.

     $to = "milerweb@gmail.com"; // Cambia esto por tu dirección de correo.

    $subject = "Nuevo mensaje de contacto Sinopsis Studio de $name";

    $body = "Nombre: $name\nTeléfono: $telefono\nEmail: $email\n\nMensaje:\n$message";

    $headers = "From: $email\r\nReply-To: $email\r\n";



    if (mail($to, $subject, $body, $headers)) {

        //echo "¡Mensaje enviado con éxito!";

    } else {

        //echo "Lo siento, ocurrió un error al enviar el mensaje.";

    }

} else {

   // //echo "Método no permitido.";

}

require_once "header.php";?>

<style type="text/css">

    .info-msg,

.success-msg,

.warning-msg,

.error-msg {

  margin: 10px 0;

  padding: 10px;

  border-radius: 3px 3px 3px 3px;

}

.info-msg {

  color: #059;

  background-color: #BEF;

}

.success-msg {

  color: #270;

  background-color: #DFF2BF;

   font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 

  font-weight: 300;

 

}

.warning-msg {

  color: #9F6000;

  background-color: #FEEFB3;

}

.error-msg {

  color: #D8000C;

  background-color: #FFBABA;

}



</style>

<!-- TOP HEADER IMAGE -->

        <div class="top-single-bkg topsinglepage">

            <div class="topsingleimg"> <img src="images/pages/8737.jpg" alt="" width="1920" height="680"></div>

            <div class="inner-desc">

                <div class="container">

                    <h1 class="display-2 single-post-title"><?php echo $page; ?></h1>

                    <span class="post-subtitle">Contacto</span>

                </div>

            </div>

        </div>

        <!-- /TOP HEADER IMAGE -->

        <!-- WRAP CONTENT -->

        <div id="wrap-content" class="page-content page-holder custom-page-template page-full fullscreen-page clearfix">

            <!-- SECTION 1 -->

            <div id="aboutus-2-1" class="section-holder aboutus-2-1">

                <div class="container">

                    <div class="row align-items-center">

                        <div class="col-lg-6 order2">

                 

                                <div class="el-smalltitle">Envíenos su consulta</div>

                                <h2 class="display-4 margin-b50">Contactanos</h2>

                              <?php

if($_GET['p']==1){

   echo '<div class="success-msg">

  <i class="fa fa-check"></i>

  Mensaje enviado Correctamente!

</div><br>';

}

                              ?>

    <form action="contacto.php?p=1#aboutus-2-1" method="POST">

        <label for="name">Nombre:</label>

        <input type="text" id="name" name="name" required class="form-control"><br><br>



        <label for="name">Teléfono:</label>

        <input type="text" id="telefono" name="telefono" required class="form-control"><br><br>



        <label for="email">Email:</label>

        <input type="email" id="email" name="email" required class="form-control"><br><br>



        <label for="message">Mensaje:</label><br>

        <textarea id="message" name="message" rows="5" required class="form-control"></textarea><br><br>



        <input type="submit" class="form-control" value="Enviar">

    </form>

                        </div>

                        <!-- /col-lg-6 -->

                        <div class="col-lg-6 order1 margin-bm50">

                            <div class="margin-l50">

                                <img class="img-fluid radius10" src="images/pages/186201.jpg" alt=" " />

                            </div>

                        </div>

                        <!-- /col-lg-6 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /SECTION 1 -->

            



             <!-- SECTION 5 -->

            <!--<div id="contacto" class="section-holder aboutus-2-5" style="padding-top: 60px;">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="padding-lr200 alignc">

                                <div class="el-smalltitle">Contáctanos</div>

                                <h2 class="display-5 margin-b30">¿Buscas un fotógrafo / filmmaker?</h2>

                                <p>En Sinopsis Studio podemos ayudarte a capturar tus momentos mágicos</p>

                                <a href="contact.html" class="read-more margin-t30">Contáctanos</a>

                            </div>

                        </div>-->

                        <!-- /col-lg-12 -->

                   <!--</div>-->

                    <!-- /row -->

               <!-- </div>-->

                <!-- /container -->

            <!--</div>-->

            <!-- /SECTION 5 --> 



             <!-- SECTION 5 -->

            <div id="contacto" class="section-holder section-info  section-nomargin home-section-3-5" style="padding-bottom: 150px;">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="padding-lr200 alignc">

                                <div class="el-smalltitle">Contáctanos</div>

                                <h2 class="display-4 margin-b30">¿Necesitas capturar algún momento en especial?</h2>

                                <p>En Sinopsis Studio, contamos con el equipo y espacios necesarios para realizar tus sesiones fotográficas y capturar momentos mágicos para ti.</p>

                                <a href="https://wa.me/51941221847?text=Hola%2C%20quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20servicios" target="_blank" class="read-more margin-t30">Contactanos</a>

                            </div>

                        </div>

                        <!-- /col-lg-12 -->

                    </div>

                    <!-- /row -->

                </div>

                <!-- /container -->

            </div>

            <!-- /SECTION 5 -->      

        </div>

        <!-- /WRAP CONTENT -->

        



<?php require_once "footer.php";?>



    </body>

</html>
