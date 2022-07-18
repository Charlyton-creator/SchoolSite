<?php require_once ("template_header.php")?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php require_once("sidebar_template.php")?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <?php require_once("topbar_template.php")?>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->

                <!-- Begin Page Content -->
                <h2>Aux dernières nouvelles Philadelphie organise des activités</h2>
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-6">
                        <?php 
                            $activites = getListofActivities();

                            foreach($activites as $activite):
                            ?>

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><?= $activite['Titre']?></h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">informations supplementaires</div>
                                            <a class="dropdown-item" href="#">Organisateur <?= $activite['Organisateur']?></a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Date <?= $activite['Date_debut']?></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <?= $activite['Description']?>
                                </div>
                            </div>
                            <?php
                            ?>
                        <?php endforeach ?>

                        </div>

                            <!-- Collapsable Card Example -->
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php require_once("footer_template.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- Logout Modal-->
    <?php require_once("logout_template.php")?>
    <!-- Logout Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>