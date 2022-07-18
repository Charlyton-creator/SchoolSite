<?php require_once("template_header.php")?>

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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Ensemble des élèves inscrits</h1>
                    <p class="mb-4">Ici vous pouvez voir l'ensemble des éleves inscrits.
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Liste des élèves</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Age</th>
                                            <th>Sexe</th>
                                            <th>Office</th>
                                            <th>Date Inscription</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $students = getListofStudents();

                                    foreach($students as $student){
                                        ?>
                                        <tr>
                                            <td><?= $student['Nom']?></td>
                                            <td><?= $student['Prenom']?></td>
                                            <td><?= $student['Age']?></td>
                                            <td><?= $student['Sexe']?></td>
                                            <td><?= $student['Niveau']?></td>
                                            <td><?= $student['Date_inscription']?></td>
                                        </tr>
                                        <?php
                                        ?>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>