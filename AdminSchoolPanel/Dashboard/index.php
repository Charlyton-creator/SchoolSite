
 <?php
 require_once("../../utilities/init.php");
 ?>
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

        <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <?php if(ManagerEstConnectéEtEstDirecteur()){
                            ?>
                                <div class="col-xl-8 col-lg-7">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Performances aux différents examen par anneé</h6>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <div class="dropdown-header">Choisissez un examen</div>
                                                    <a class="dropdown-item" href="#">CEPD</a>
                                                    <a class="dropdown-item" href="#">BEPC</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">BACI</a>
                                                    <a class="dropdown-item" href="#">BACII</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="chart-area">
                                                <canvas id="myAreaChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pie Chart -->
                                <div class="col-xl-4 col-lg-5">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Total éleves par Grade</h6>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="chart-pie pt-4 pb-2">
                                                <canvas id="myPieChart"></canvas>
                                            </div>
                                            <div class="mt-4 text-center small">
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-primary"></i> Primaire
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-success"></i> College
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-info"></i> Lycee
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        ?>
                        <?php }?>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                            <?php if(eleveEstConnecte()){
                                        $id = getStudentId($_SESSION['student']['student_username']); 
                                        $bulletin = getBulletinInformations($id);
                                        $classe = getNiveauStudent($_SESSION['student']['student_username']);
                                if($bulletin != null){
                                    if($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 2; else if($classe =='Terminale A'||$classe =='Premiere A') echo 3; else if($classe =='Seconde A' || $classe == 'Seconde S') $coefficient = 4 ; $moyenneFr = round(calculerMoyenne($bulletin['FR_note1'],$bulletin['FR_note2'], $bulletin['FR_composition'],$coefficient),1);
                                    if($classe == 'Seconde S'|| $classe =='Terminale D'  || $classe =='Premiere D') $coefficient = 2; else if($classe =='Seconde A' || $classe =='Terminale A' || $classe =='Premiere A') echo 3; $moyenneAng =  round(calculerMoyenne($bulletin['ANG_note1'], $bulletin['ANG_note2'], $bulletin['ANG_composition'] ,$coefficient), 1);
                                    if($classe =='Terminale D' || $classe =='Seconde S' || $classe == 'Premiere D') $coefficient=2; elseif($classe =='Terminale A' || $classe =='Seconde A' || $classe == 'Premiere A' ) $coefficient=3;$moyenneHg =  round(calculerMoyenne($bulletin['HG_note1'],$bulletin['HG_note2'],$bulletin['HG_composition'],$coefficient),1);
                                    if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') $coefficient = 2; elseif($classe =='Seconde S') $coefficient = 4 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 3; $moyenneMath = round(calculerMoyenne($bulletin['MATHS_note1'], $bulletin['MATHS_note2'], $bulletin['MATHS_composition'], $coefficient),1);
                                    if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') $coefficient = 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D' || $classe == 'Seconde S') $coefficient = 3; $moyenneSpc = round(calculerMoyenne($bulletin['SPC_note1'], $bulletin['SPC_note2'], $bulletin['SPC_composition'], $coefficient), 1);
                                    if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A' || $classe == 'Seconde S') $coefficient = 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 3; $moyenneSvt =  round(calculerMoyenne($bulletin['SVT_note1'], $bulletin['SVT_note2'], $bulletin['SVT_composition'], $coefficient), 1);

                                ?>
                            <!-- Project Card Example -->
                                   <div class="col-lg-12 mb-4">
                                    <div class="card shadow mb-12">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Performances par matière aux diffèrents évaluation aucours de l'année ceci est mis a jour automatiquement</h6>
                                        </div>
                                            <div class="card-body">
                                                <h4 class="small font-weight-bold">Français<span
                                                        class="float-right"><?=$moyenneFr?></span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$moyenneFr?>%"
                                                        aria-valuenow="<?=$moyenneFr?>" aria-valuemin="0" aria-valuemax="20"></div>
                                                </div>
                                                <h4 class="small font-weight-bold">SVT<span
                                                        class="float-right"><?=$moyenneSvt?></span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$moyenneSvt?>%"
                                                        aria-valuenow="<?=$moyenneSvt?>" aria-valuemin="0" aria-valuemax="20"></div>
                                                </div>
                                                <h4 class="small font-weight-bold">Anglais<span
                                                        class="float-right"><?=$moyenneAng?></span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar" role="progressbar" style="width: <?=$moyenneFr?>%"
                                                        aria-valuenow="<?=$moyenneAng?>" aria-valuemin="<?= 0?>" aria-valuemax="<?= 20 ?>"></div>
                                                </div>
                                                <h4 class="small font-weight-bold">Mathématiques <span
                                                        class="float-right"><?=$moyenneMath?></span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: <?=$moyenneMath?>%"
                                                        aria-valuenow="<?=$moyenneMath?>" aria-valuemin="0" aria-valuemax="20"></div>
                                                </div>
                                                <h4 class="small font-weight-bold">Histoire Geographie <span
                                                        class="float-right"><?=$moyenneHg?></span></h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?=$moyenneHg?>%"
                                                        aria-valuenow="<?=$moyenneHg?>" aria-valuemin="0" aria-valuemax="20"></div>
                                                </div>
                                                <h4 class="small font-weight-bold">Sciences physiques <span
                                                        class="float-right"><?=$moyenneSpc?></span></h4>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width:<?=$moyenneSpc?>%"
                                                        aria-valuenow="<?=$moyenneSpc?>" aria-valuemin="0" aria-valuemax="20"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Color System -->
                                    </div>
                                    <?php
                                    ?>
                                     <?php }else{
                                            ?>
                                                <div class="alert alert-warning" role="alert">
                                                     Aucune informations a afficher pour le moment!!!!!!!!!!. Notes non encore mise en ligne
                                                </div>
                                            <?php
                                        } ?>
                                    <?php }else if(professeurEstConnecte()){
                                        
                                        ?>
                                    <div class="col-lg-12 mb-4">
                                    <div class="card shadow mb-8">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Evolution dans le programme</h6>
                                        </div>
                                            <div class="card-body">
                                                <h4 class="small font-weight-bold"><span
                                                        class="float-right">60%</span></h4>
                                                <div class="progress mb-4">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 60%"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Color System -->
                                    </div>
                                    <?php
                                ?>
                                <?php }?>

                        <?php if(ManagerEstConnectéEtEstDirecteur()){
                            ?>
                           
                                <div class="col-lg-6 mb-4">

                                    <!-- Illustrations -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">Votre Etablissement</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                                    src="img/undraw_posting_photo.svg" alt="...">
                                            </div>
                                            <p>Add some quality, svg illustrations to your project courtesy of <a
                                                    target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                                constantly updated collection of beautiful svg images that you can use
                                                completely free and without attribution!</p>
                                            <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                                unDraw &rarr;</a>
                                        </div>
                                    </div>

                                    <!-- Approach -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                                        </div>
                                        <div class="card-body">
                                            <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                                CSS bloat and poor page performance. Custom CSS classes are used to create
                                                custom components and custom utility classes.</p>
                                            <p class="mb-0">Before working with this theme, you should become familiar with the
                                                Bootstrap framework, especially the utility classes.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        <?php
                    ?>
                    <?php } ?>

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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>