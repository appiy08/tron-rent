<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5ae9b5">
    <title>Admin | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Tron Supply</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="dashboard.php" class="d-block">Admin</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="dashboard.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plane"></i>
                                <p>
                                    Plane
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="time-manage.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Time Manage</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="plane-manage.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Plane Manage</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="referral.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Manage Referral</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="ranking.php" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>User Ranking</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="users.php" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Manage Users</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-university"></i>
                                <p>
                                    Deposit
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Tdeposit.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Total Deposit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="Pdeposit.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pending Deposit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="Rdeposit.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rejected Deposit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="Ddeposit.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Deposited Charge</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-university"></i>
                                <p>
                                    Withdraw
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Twithdrwal.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Total Withdrawal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="Pwithdrawal.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pending Withdrawal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="Rwithdrawal.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rejected Withdrawal</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="Wwithdrawal.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Withdrawal Charge</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-university"></i>
                                <p>
                                    Investment
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Tinvestment.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Total Investment</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="Tinterest.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Total Interest</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="Ainvestment.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active Investment</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="Cinvestment.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Closed Investment</p>
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