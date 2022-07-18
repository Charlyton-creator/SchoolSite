<?php require_once ("../../utilities/init.php")?>
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dernières informations</h1>

                    <div class="row">

                        <div class="col-lg-6">
                            <?php 
                            $informations = getListofInformations();

                            foreach($informations as $information):
                            ?>

                            <!-- Circle Buttons -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><?= $information['information_title']?></h6>
                                </div>
                                <div class="card-body">
                                    <p>
                                        <?= $information['Contenu']?>
                                    </p>
                                    <!-- Circle Buttons (Default) -->
                                    <a href="<?= $information['Source']?>" class="btn btn-google btn-block">
                                        <i class="fab fa-google-f">Google</i>
                                    </a>
                                </div>
                            </div>
                            <?php
                            ?>
                          <?php endforeach ?>
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
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

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