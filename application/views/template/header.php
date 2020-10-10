<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="<?= base_url() ?>asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>asset/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto mr-2">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a href="" class="nav-link image d-flex" data-toggle="dropdown">
                        <span class="align-middle mr-2"><?= $user['name']; ?></span>
                        <img src="<?= base_url(); ?>asset/dist/img/user2-160x160.jpg"
                            style="max-width:40px; height:40px; margin-top:-9px;" class="img-circle user-img"
                            alt="User Image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">User Panel</span>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url(); ?>profile" class="dropdown-item">
                            <i class="fas fa-user mr-2"></i>Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url(); ?>settings" class="dropdown-item">
                            <i class="fas fa-cog mr-2"></i>Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url(); ?>auth/logout" class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-2"></i>Log Out
                        </a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->