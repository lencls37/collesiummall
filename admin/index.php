<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Collesium Mall Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <!--  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="plugins/jquery/jquery.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="logout.php" role="button">
                    <i class="bi bi-box-arrow-right"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <div class="text-center justify-content-center d-flex">
            <a href="index.php" class="brand-link">
                <img class="w-75" src="../images/logo.png" style="margin: 10px;">
            </a>
        </div>


        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex text-center justify-content-center">

                <span class="brand-text font-weight-light text-light">Collesium Mall Admin</span>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Arama.."
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-store"></i>
                            <p>
                                Mağazalar
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?sayfa=magaza_ekle" class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Mağaza Ekle</p>
                                </a>
                            </li>
<!--                            <li class="nav-item">-->
<!--                                <a href="index.php?sayfa=magaza_duzenle" class="nav-link">-->
<!--                                    <i class="fas fa-edit nav-icon"></i>-->
<!--                                    <p>Mağaza Düzenle</p>-->
<!--                                </a>-->
<!--                            </li>-->
                            <li class="nav-item">
                                <a href="index.php?sayfa=magaza_liste" class="nav-link">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Mağaza Listesi</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-blog nav-icon"></i>
                            <p>
                                Blog
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.php?sayfa=yazi_ekle" class="nav-link">
                                    <i class="fas fa-plus nav-icon"></i>
                                    <p>Yazı Ekle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?sayfa=yazi_duzenle" class="nav-link">
                                    <i class="fas fa-edit nav-icon"></i>
                                    <p>Yazıları Düzenle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?sayfa=yazi_liste" class="nav-link">
                                    <i class="fas fa-list nav-icon"></i>
                                    <p>Yazı Listesi</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <?php
            if(isset($_GET["sayfa"])){
                $current_page = $_GET["sayfa"];
                switch($current_page){
                    case "magaza_ekle":
                        include("sayfa/magaza_ekle.php");
                        break;
                    case "magaza_duzenle":
                        include("sayfa/magaza_duzenle.php");
                        break;
                    case "magaza_liste":
                        include("sayfa/magaza_listele.php");
                        break;
                    case "magaza_sil":
                        include("api/magaza_sil.php");
                        break;
                    case "yazi_ekle":
                        include("sayfa/yazi_ekle.php");
                        break;
                    case "yazi_duzenle":
                        include ("sayfa/yazi_duzenle.php");
                        break;
                    case "yazi_liste":
                        include  ("sayfa/yazi_listele.php");
                        break;
                }
            }
            ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<!--    <footer class="main-footer">-->
<!--        <div class="float-right d-none d-sm-block">-->
<!--            <b>Version</b> 3.2.0-->
<!--        </div>-->
<!--        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.-->
<!--    </footer>-->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">

    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
