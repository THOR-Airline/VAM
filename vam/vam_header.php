<?php
	/**
	 * @Project: Virtual Airlines Manager (VAM)
	 * @Author: Alejandro Garcia
	 * @Web http://virtualairlinesmanager.net
	 * Copyright (c) 2013 - 2016 Alejandro Garcia
	 * VAM is licenced under the following license:
	 *   Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
	 *   View license.txt in the root, or visit http://creativecommons.org/licenses/by-nc-sa/4.0/
	 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Thor Airlines</title>
	<meta charset="utf-8">
	<meta name="keywords"
	      content="vam, virtual airlines manager , va , ivao, vatsim , airlines manager, prepar3d, aerosoft, pmdg,virtual pilot, piloto virtual, open source,xplane, flight simulator, flight simulation, flight, flying, fsx, fs9, flight simulator x, flight simulator 2004, simulators, simulator, simulation, flight enthusiasts, fsacars, fskeeper"/>
	<meta name="description"
	      content="VAM Virtual Airline Manager"/>
	<meta name="author" content="Alejandro Garcia">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel=”author” href=”https://plus.google.com/u/0/108665243705425046932/“ title="Virtual Airlines Manager on Google+" />
	<link rel="icon" href="images/thor/icons/logo peque 32.png" type="image/png" sizes="16x16">
	<link rel="shortcut icon" href="images/thor/icons/logo peque 32.png" >
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-datetimepicker.min.css"/>
	<script src="js/bootstrapValidator.min.js" type="text/javascript"></script>
	<script src="Charts/Chart.js"></script>
	<script type="text/javascript" src="js/moment-with-locales.js"></script>
	<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
	<script src="js/jquery.confirm.min.js" type="text/javascript"></script>
	<!-- Custom styles for this template -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/social-vam.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/morris.css" rel="stylesheet">
	<!-- data tables plugins -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
	<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/plug-ins/1.10.12/sorting/numeric-comma.js"></script>
	<script src="js/raphael.min.js" type="text/javascript"></script>
	<script src="js/morris.min.js" type="text/javascript"></script>
	<!-- VAM javascript -->
	<script src="js/vam.js" type="text/javascript"></script>
	<!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./index.php">
                <div class="sidebar-brand-icon rotate-n-15">
				<img style="max-height: 30px; position:-webkit-sticky" src="img/Recurso_7.png">
                </div>
                <div class="sidebar-brand-text mx-3">THOR</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">
                    <i class="fa fa-home fa-fw"></i>
                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-info-circle fa-fw"></i>
                    <span>Información</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="./index.php?page=staff">Staff</a>
						<a class="collapse-item" href="./index.php?page=rules">Normativa</a>
						<a class="collapse-item" href="./index.php?page=ranks">Rangos Pilotos</a>
						<a class="collapse-item" href="./index.php?page=va_global_financial_report">Reporte Financiero</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-plane fa-fw"></i>
                    <span>Operaciones</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="./index.php?page=fleet_public">Flota</a>
                        <a class="collapse-item" href="./index.php?page=route_public">Ruta</a>
                        <a class="collapse-item" href="./index.php?page=hubs">Hubs</a>
						<a class="collapse-item" href="./index.php?page=tours">Tours</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="./index.php?page=stats">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Estadisticas</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="./index.php?page=pilots_public">
                    <i class="fa fa-users fa-fw"></i>
                    <span>Pilotos</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="https://thorairlines.com/">
                    <i class="fas fa-globe-europe fa-fw"></i>
                    <span>Web</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="./index.php?page=pilot_register">
                    <i class="fa fa-user-plus fa-fw"></i>
                    <span>Registrarse</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Panel</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <?php if ($user_logged==0) {
				                    ?>
                                    <a class="dropdown-item" href="#myModal" role="button" data-toggle="modal" rel="tooltip" data-original-title='Hello'><span class="glyphicon glyphicon-log-in"></span>
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Login
                                    </a>
                                <?php
                                }
                                else{
                                    ?>
                                <a class="dropdown-item" href = "./index_vam.php" role = "button" ><span class="glyphicon glyphicon-cog" ></span>
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sistema
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href = "./index.php?page=logout" ><span class="glyphicon glyphicon-log-out" ></span >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                                <?php
			                    }
			                    ?>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">

                        <img src="./images/slider/VAM_banner1.jpg" alt="...">

                    </div>

<!-- HOME PAGE begin -->
<br>
</body>
