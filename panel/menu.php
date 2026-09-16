<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="/panel"><img src="../img/sinopsis_logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li <?php if ($page == 'Panel') {echo 'class="active"';}?>>
                                <a href="/panel"><i class="ti-dashboard"></i><span>Panel</span></a>
                            </li>
                            <li <?php if ($page == 'Usuarios') {echo 'class="active"';}?>>
                                <a href="users"><i class="ti-user"></i><span>Usuarios</span></a>
                            </li>
                            <li <?php if ($page == 'Blog') {echo 'class="active"';}?>>
                                <a href="blogs"><i class="fa fa-edit"></i><span>Blog</span></a>
                            </li>
                            <li <?php if ($page == 'Clientes') {echo 'class="active"';}?>>
                                <a href="clients"><i class="fa fa-users"></i><span>Clientes</span></a>
                            </li>
                            <li <?php if ($page == 'Servicios') {echo 'class="active"';}?>>
                                <a href="servicios"><i class="fa fa-briefcase"></i><span>Servicios</span></a>
                            </li>
                            <li <?php if ($page == 'Proyectos') {echo 'class="active"';}?>>
                                <a href="projects"><i class="ti-briefcase"></i><span>Proyectos</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>

