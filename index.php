<?php
session_start();
if ($_SESSION == NULL) {
    header('location:login.php');
} else {
    include "fungsi/koneksi.php";
    include "fungsi/fungsi_tanggal.php";
    include "fungsi/fungsi_library.php";
    include "fungsi/format_number.php";
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>PENGGAJIAN YAFI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- third party css -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    Geneva <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a> -->

                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Settings</span>
                                </a> -->

                                <!-- item-->
                                <!-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a> -->

                                <!-- <div class="dropdown-divider"></div> -->

                                <!-- item-->
                                <a href="logout.php" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="20">
                                <!-- <span class="logo-lg-text-light">U</span> -->
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-sm pt-1">
                                <!-- <img src="assets/images/logo-sm.png" alt="" height="22"> -->
                                <h2 style="color: white;">AF</h2>
                            </span>
                            <span class="logo-lg pt-1">
                                <!-- <img src="assets/images/logo-light.png" alt="" height="20"> -->
                                <h2 style="color: white;">ASA FATIHA</h2>
                            </span>
                        </a>

                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Create New
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-briefcase mr-1"></i>
                                    <span>New Projects</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>Create Users</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-bar-chart-line- mr-1"></i>
                                    <span>Revenue Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="fe-headphones mr-1"></i>
                                    <span>Help & Support</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown dropdown-mega d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Mega Menu
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="row">
                                    <div class="col-sm-8">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5 class="text-dark mt-0">UI Components</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">Widgets</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Nestable List</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Range Sliders</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Masonry Items</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Sweet Alerts</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Treeview Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Tour Page</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="text-dark mt-0">Applications</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">eCommerce Pages</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">CRM Pages</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Email</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Calendar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Team Contacts</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Task Board</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Email Templates</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                                <h5 class="text-dark mt-0">Extra Pages</h5>
                                                <ul class="list-unstyled megamenu-list">
                                                    <li>
                                                        <a href="javascript:void(0);">Left Sidebar with User</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Menu Collapsed</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Small Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">New Header Style</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Search Result</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Gallery Pages</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);">Maintenance & Coming Soon</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="text-center mt-3">
                                            <h3 class="text-dark">Special Discount Sale!</h3>
                                            <h4>Save up to 70% off.</h4>
                                            <button class="btn btn-primary btn-rounded mt-3">Download Now</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">Geneva Kennedy</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock mr-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title mt-2">Menus</li>

                            <li>
                                <a href="index.php?modul=home">
                                    <i data-feather="calendar"></i>
                                    <span> Home </span>
                                </a>
                                <a href="index.php?modul=jabatan">
                                    <i data-feather="pocket"></i>
                                    <span> Jabatan </span>
                                </a>
                                <a href="index.php?modul=jenis_tunjangan">
                                    <i class="fe-check-square"></i>
                                    <span> Jenis Tunjangan </span>
                                </a>
                                <a href="index.php?modul=tunjangan_jabatan">
                                    <i class="fe-user-check"></i>
                                    <span> Tunjangan Karyawan </span>
                                </a>
                                <a href="index.php?modul=absensi">
                                    <i data-feather="book"></i>
                                    <span> Absensi </span>
                                </a>
                                <a href="index.php?modul=struk_gaji">
                                    <i data-feather="file-text"></i>
                                    <span> Struk Gaji </span>
                                </a>
                                <a href="index.php?modul=laporan_absensi">
                                    <i data-feather="folder"></i>
                                    <span> Lap Absensi </span>
                                </a>
                                <a href="index.php?modul=laporan_gaji">
                                    <i class="fe-command"></i>
                                    <span> Lap Gaji </span>
                                </a>
                            </li>


                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="card">
                            <div class="card-body">
                                <?php include "konten.php"; ?>
                            </div>
                        </div>
                        <!-- end page title -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2015 - <script>
                                    document.write(new Date().getFullYear())
                                </script> &copy; UBold theme by <a href="">Coderthemes</a>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-2" data-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" data-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2 active" data-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content pt-0">
                    <div class="tab-pane" id="chat-tab" role="tabpanel">

                        <form class="search-bar p-3">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <h6 class="font-weight-medium px-3 mt-2 text-uppercase">Group Chats</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-success"></i>
                                <span class="mb-0 mt-1">App Development</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-warning"></i>
                                <span class="mb-0 mt-1">Office Work</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-danger"></i>
                                <span class="mb-0 mt-1">Personal Group</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                <span class="mb-0 mt-1">Freelance</span>
                            </a>
                        </div>

                        <h6 class="font-weight-medium px-3 mt-3 text-uppercase">Favourites <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-right mdi mdi-plus-circle"></i></a></h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <img src="assets/images/users/user-10.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Andrew Mackie</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <img src="assets/images/users/user-1.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Rory Dalyell</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <img src="assets/images/users/user-9.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Jaxon Dunhill</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h6 class="font-weight-medium px-3 mt-3 text-uppercase">Other Chats <a href="javascript: void(0);" class="font-18 text-danger"><i class="float-right mdi mdi-plus-circle"></i></a></h6>

                        <div class="p-2 pb-4">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <img src="assets/images/users/user-2.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Jackson Therry</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <img src="assets/images/users/user-4.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Charles Deakin</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <img src="assets/images/users/user-5.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Ryan Salting</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <img src="assets/images/users/user-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Sean Howse</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <img src="assets/images/users/user-7.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Dean Coward</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative mr-2">
                                        <img src="assets/images/users/user-8.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1 font-14">Hayley East</h6>
                                        <div class="font-13 text-muted">
                                            <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="text-center mt-3">
                                <a href="javascript:void(0);" class="btn btn-sm btn-white">
                                    <i class="mdi mdi-spin mdi-loading mr-2"></i>
                                    Load more
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        <h6 class="font-weight-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                        <div class="px-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">App Development<span class="float-right">75%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Database Repair<span class="float-right">37%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Backup Create<span class="float-right">52%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <h6 class="font-weight-medium px-3 mb-0 mt-4 text-uppercase">Upcoming Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Sales Reporting<span class="float-right">12%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">Redesign Website<span class="float-right">67%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                <p class="text-muted mb-0">New Admin Design<span class="float-right">84%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <div class="p-3 mt-2">
                            <a href="javascript: void(0);" class="btn btn-success btn-block waves-effect waves-light">Create Task</a>
                        </div>

                    </div>
                    <div class="tab-pane active" id="settings-tab" role="tabpanel">
                        <h6 class="font-weight-medium px-3 m-0 py-2 font-13 text-uppercase bg-light">
                            <span class="d-block py-1">Theme Settings</span>
                        </h6>

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert">
                                <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                            </div>

                            <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="light" id="light-mode-check" checked />
                                <label class="custom-control-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="color-scheme-mode" value="dark" id="dark-mode-check" />
                                <label class="custom-control-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Width -->
                            <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="width" value="fluid" id="fluid-check" checked />
                                <label class="custom-control-label" for="fluid-check">Fluid</label>
                            </div>
                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="width" value="boxed" id="boxed-check" />
                                <label class="custom-control-label" for="boxed-check">Boxed</label>
                            </div>

                            <!-- Menu positions -->
                            <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="menus-position" value="fixed" id="fixed-check" checked />
                                <label class="custom-control-label" for="fixed-check">Fixed</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="menus-position" value="scrollable" id="scrollable-check" />
                                <label class="custom-control-label" for="scrollable-check">Scrollable</label>
                            </div>

                            <!-- Left Sidebar-->
                            <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="leftsidebar-color" value="light" id="light-check" checked />
                                <label class="custom-control-label" for="light-check">Light</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="leftsidebar-color" value="dark" id="dark-check" />
                                <label class="custom-control-label" for="dark-check">Dark</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="leftsidebar-color" value="brand" id="brand-check" />
                                <label class="custom-control-label" for="brand-check">Brand</label>
                            </div>

                            <div class="custom-control custom-switch mb-3">
                                <input type="radio" class="custom-control-input" name="leftsidebar-color" value="gradient" id="gradient-check" />
                                <label class="custom-control-label" for="gradient-check">Gradient</label>
                            </div>

                            <!-- size -->
                            <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="leftsidebar-size" value="default" id="default-size-check" checked />
                                <label class="custom-control-label" for="default-size-check">Default</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="leftsidebar-size" value="condensed" id="condensed-check" />
                                <label class="custom-control-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="leftsidebar-size" value="compact" id="compact-check" />
                                <label class="custom-control-label" for="compact-check">Compact <small>(Small size)</small></label>
                            </div>

                            <!-- User info -->
                            <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" name="leftsidebar-user" value="fixed" id="sidebaruser-check" />
                                <label class="custom-control-label" for="sidebaruser-check">Enable</label>
                            </div>


                            <!-- Topbar -->
                            <h6 class="font-weight-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="topbar-color" value="dark" id="darktopbar-check" checked />
                                <label class="custom-control-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="radio" class="custom-control-input" name="topbar-color" value="light" id="lighttopbar-check" />
                                <label class="custom-control-label" for="lighttopbar-check">Light</label>
                            </div>


                            <button class="btn btn-primary btn-block mt-4" id="resetBtn">Reset to Default</button>

                            <a href="https://1.envato.market/uboldadmin" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-basket mr-1"></i> Purchase Now</a>

                        </div>

                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- third party js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

        <script>
            $(function() {

                $('.formatCurrency').blur(function() {
                        $('.formatCurrency').html(null);
                        $(this).formatCurrency({
                            colorize: true,
                            negativeFormat: '-%s%n',
                            roundToDecimalPlace: 2
                        });
                    })

                    .keyup(function(e) {
                        var e = window.event || e;
                        var keyUnicode = e.charCode || e.keyCode;
                        if (e !== undefined) {
                            switch (keyUnicode) {
                                case 16:
                                    break; // Shift
                                case 17:
                                    break; // Ctrl
                                case 18:
                                    break; // Alt
                                case 27:
                                    this.value = '';
                                    break; // Esc: clear entry
                                case 35:
                                    break; // End
                                case 36:
                                    break; // Home
                                case 37:
                                    break; // cursor left
                                case 38:
                                    break; // cursor up
                                case 39:
                                    break; // cursor right
                                case 40:
                                    break; // cursor down
                                case 78:
                                    break; // N (Opera 9.63+ maps the "." from the number key section to the "N" key too!) (See: http://unixpapa.com/js/key.html search for ". Del")
                                case 110:
                                    break; // . number block (Opera 9.63+ maps the "." from the number block to the "N" key (78) !!!)
                                case 190:
                                    break; // .
                                default:
                                    $(this).formatCurrency({
                                        colorize: true,
                                        negativeFormat: '-%s%n',
                                        roundToDecimalPlace: -1,
                                        eventOnDecimalsEntered: true
                                    });
                            }
                        }
                    });

                $("#datepicker").datepicker();
                $("#datepicker_inline").datepicker();
                $('#colorpickerHolder').ColorPicker({
                    flat: true
                });
                $('#timepicker').timepicker({
                    showPeriod: true,
                    showNowButton: true,
                    showCloseButton: true
                });

                $('#timepicker_inline_div').timepicker({
                    defaultTime: '9:20'
                });

                $('#colorSelector').ColorPicker({
                    color: '#FF9900',
                    onShow: function(colpkr) {
                        $(colpkr).fadeIn(500);
                        return false;
                    },
                    onHide: function(colpkr) {
                        $(colpkr).fadeOut(500);
                        return false;
                    },
                    onSubmit: function(hsb, hex, rgb, el) {
                        $(el).ColorPickerHide();
                    },
                    onChange: function(hsb, hex, rgb) {
                        $('#colorSelector div').css({
                            'background-color': '#' + hex
                        });
                        $('#colorpickerField1').val('#' + hex);
                    }
                });

                //MODAL KARYAWAN        
                $('#mdl_karyawan').live('click', function(e) {
                    var nip = $(this).val();
                    e.preventDefault();

                    $.modal({
                        title: 'Data Karyawan',
                        ajax: 'modul/mod_karyawan/karyawan_detail.php?nip=' + nip
                    });
                });

                $('#colorpickerField1').live('keyup', function(e) {
                    var val = $(this).val();
                    val = val.replace('#', '');
                    $('#colorSelector div').css({
                        'background-color': '#' + val
                    });
                    $('#colorSelector').ColorPickerSetColor(val);
                });

                $("#id_jenis_tunjangan").change(function() {
                    var id_jenis_tunjangan = $(this).val();
                    //var item = $(this).parent(); //parent().paren... until you reach the element that you want to delete 

                    if (id_jenis_tunjangan == "1") {
                        $("#banyak").show();
                        $("#per_anak").show();
                    } else {
                        $("#banyak").hide();
                        $("#per_anak").hide();
                    }
                });
                /*
                $("#banyak").keyup(function(){
                    var banyak = $(this).val();
                    var per_anak = $("#per_anak").val(); 
                    var besar = 0;
                    
                    besar = banyak*per_anak;
                    
                    $("#besar_tunjangan").val(besar);
                });
                */

                $("#per_anaknya").keyup(function() {
                    var per_anak = $(this).val();
                    var banyak = $("#banyaknya").val();
                    var hasil_per_anak = 0;
                    var besar = 0;

                    //alert('abc123def456ghi'.replace(/[^0-9]/g,''));
                    hasil_per_anak = per_anak.replace(/[^0-9]/g, '');
                    //var item = $(this).parent(); //parent().paren... until you reach the element that you want to delete 
                    besar = banyak * hasil_per_anak;

                    $("#besar_tunjangan").val(besar);
                });

            });
        </script>
    </body>

    </html>
<?php } ?>