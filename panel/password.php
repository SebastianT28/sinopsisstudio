<?php session_start();
include_once "config/controlador.php";
$page = 'Restablecer Contraseña';
require_once("header.php");
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
                        <form action="password" method="post">
                            <div class="login-form-head">
                                <h4>¿Olvidaste tu contraseña?</h4>
                                <p>Aquí te ayudamos ;)</p>
                            </div>
                            <div class="login-form-body">
                                <div class="form-gp">
                                    <label for="username">Nombre de Usuario</label>
                                    <input type="text" name="usuario" id="username" autocomplete="off" required autofocus>
                                    <i class="ti-user"></i>
                                </div>
                                <div class="form-gp">
                                    <label for="password">Nueva Contraseña</label>
                                    <input type="password" id="password"  name="newpassword" autocomplete="off" required>
                                    <i class="ti-lock"></i>
                                </div>
                                <div class="submit-btn-area">
                                    <!--button id="login" type="submit" name="login">Ingresar <i class="ti-arrow-right"></i></button-->
                                    <input type="submit" value="Restablecer Contraseña" name="btnUpdate">
                                </div>
                                <!--div class="form-footer text-center mt-5">
                                    <p class="text-muted">¿No recuerdas tu contraseña? <a href="login.html">Restablecer aquí</a></p>
                                </div-->
                                <div class="form-footer text-center mt-5">
                                    <p class="text-muted">¿Aún no tienes una cuenta? <a href="register" class="link-form">Regístrate aquí</a></p>
                                </div>
                            </div>
                        </form>
                        <?php  
                          if (!empty($_POST['btnUpdate']))
                            {
                              newPasswordUser();
                              unset($_POST['btnUpdate']);
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