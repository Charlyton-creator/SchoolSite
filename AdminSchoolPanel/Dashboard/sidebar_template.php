<?php require_once("../../utilities/init.php") ?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?= "" ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span><?= "Dashboard" ?></span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-newspaper" ></i>
                    <span>News</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Généralités</h6>
                        <a class="collapse-item" href="infos.php">News educationnels</a>
                        <a class="collapse-item" href="activites.php">Activités extrascolaires</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <?php if(professeurEstConnecte()){
                 ?>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-users"></i>
                            <span>Elèves par salle</span>
                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Choisissez une classe</h6>
                                <a class="collapse-item" href="infos.php">6 ème</a>
                                <a class="collapse-item" href="activites.php">5 ème</a>
                                <a class="collapse-item" href="infos.php">4 ème</a>
                                <a class="collapse-item" href="activites.php">3 ème</a>
                                <a class="collapse-item" href="infos.php">Seconde A</a>
                                <a class="collapse-item" href="activites.php">Seconde S</a>
                                <a class="collapse-item" href="infos.php">Première A</a>
                                <a class="collapse-item" href="activites.php">Première D</a>
                                <a class="collapse-item" href="infos.php">Terminale A</a>
                                <a class="collapse-item" href="activites.php">Terminale D</a>
                            </div>
                        </div>
                    </li>
                 <?php  
            ?>
            <?php }?>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Charts -->

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="liste_eleves.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span><?php 
                    if(ManagerEstConnecté()){
                        echo "Eleves inscrits";
                    }else 
                    if(professeurEstConnecte()) echo "Eleves inscrits";?></span>
                </a>
            </li>
            <?php if(eleveEstConnecte()){
                 ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="liste_eleves.php">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Faire une demande d'atestation</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="bulletin.php">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Consulter son bulletin</span>
                        </a>
                    </li>
                 <?php  
            ?>
            <?php }?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
    </div>