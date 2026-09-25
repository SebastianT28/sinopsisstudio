<?php session_start();

include_once "config/controlador.php";

$page = 'Login';

require_once "header.php";

?>

<body>

    <div id="preloader">

        <div class="loader"></div>

    </div>

    <!-- preloader area end -->

    <!-- login area start -->

    <div class="login-area login-bg">

        <div class="container-fluid p-0">

            <div class="row no-gutters">

                <div class="col-xl-4 offset-xl-8 col-lg-6 offset-lg-6">

                    <div class="login-box-s2 ptb--100">

                        <form action="login" method="post">

                            <div class="login-form-head">

                                <h4>Ingresar</h4>

                                <p>Hola, Sinopsis</p>

                            </div>

                            <div class="login-form-body">

                                <div class="form-gp">

                                    <label for="username">Nombre de Usuario</label>

                                    <input type="text" id="username" name="user" autocomplete="off" required autofocus>

                                    <i class="ti-user"></i>

                                </div>

                                <div class="form-gp">

                                    <label for="password">Contraseña</label>

                                    <input type="password" id="password" name="password" autocomplete="off" required>

                                    <i class="ti-lock"></i>

                                </div>

                                <div class="submit-btn-area">

                                    <!--button id="login" type="submit" name="login">Ingresar <i class="ti-arrow-right"></i></button-->

                                    <input type="submit" id="login" value="Ingresar" name="login">

                                </div>

                                <!--div class="form-footer text-center mt-5">

                                    <p class="text-muted">¿No recuerdas tu contraseña? <a href="login.html">Restablecer aquí</a></p>

                                </div-->



                            </div>

                        </form>

                        <?php

if (!empty($_POST['login'])) {

	loginUsuario($_POST['user'], $_POST['password']);

	unset($_POST['login']);

}

?>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>

    <script src="assets/js/popper.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/metisMenu.min.js"></script>

    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script src="assets/js/plugins.js"></script>

    <script src="assets/js/scripts.js"></script>

</body>



</html>
