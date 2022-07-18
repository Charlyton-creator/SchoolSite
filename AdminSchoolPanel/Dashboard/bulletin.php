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
                    <h1 class="h3 mb-2 text-gray-800">Etat de votre travail</h1>
                    <p class="mb-4">Ici vous pouvez voir le fruit de votre travail
                    </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Bulletin de notes de <?= $_SESSION['student']['student_username'] ?></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Matiere</th>
                                            <th>Coefficient</th>
                                            <th>Note1</th>
                                            <th>Note2</th>
                                            <th>Note Composition</th>
                                            <th>Moyenne</th>
                                            <th>Appreciations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $id = getStudentId($_SESSION['student']['student_username']); 
                                    $bulletin = getBulletinInformations($id);
                                    $classe = getNiveauStudent($_SESSION['student']['student_username']);

                                    if($bulletin != null){
                                        ?>
                                        <tr>
                                        <?php $somme=0; $sommeNote1=0; $sommeNote2=0; $coefficient = 0;?>
                                            <th><strong>Français</strong> </td>
                                            <td><?php if($classe =='Terminale D'  || $classe =='Premiere D') echo 2; elseif($classe =='Terminale A' || $classe =='Premiere A') echo 3 ;elseif($classe =='Seconde A' || $classe == 'Seconde S') echo 4 ;?></td>
                                            <td><?php if($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 2; else if($classe =='Terminale A'||$classe =='Premiere A') echo 3; else if($classe =='Seconde A' || $classe == 'Seconde S') $coefficient = 4 ; echo round(note($bulletin['FR_note1'],$coefficient), 2);?></td>
                                            <td><?php if($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 2; else if($classe =='Terminale A'||$classe =='Premiere A') echo 3; else if($classe =='Seconde A' || $classe == 'Seconde S') $coefficient = 4 ; echo round(note($bulletin['FR_note2'],$coefficient),2); ?></td>
                                            <td><?php if($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 2; else if($classe =='Terminale A'||$classe =='Premiere A') echo 3; else if($classe =='Seconde A' || $classe == 'Seconde S') $coefficient = 4 ; echo round(note($bulletin['FR_composition'],$coefficient),2); ?></td>
                                            <td><?php if($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 2; else if($classe =='Terminale A'||$classe =='Premiere A') echo 3; else if($classe =='Seconde A' || $classe == 'Seconde S') $coefficient = 4 ; echo round(calculerMoyenne($bulletin['FR_note1'],$bulletin['FR_note2'], $bulletin['FR_composition'],$coefficient),1);?></td>
                                            <td><?php if($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 2; else if($classe =='Terminale A'||$classe =='Premiere A') echo 3; else if($classe =='Seconde A' || $classe == 'Seconde S') $coefficient = 4 ; echo donneappreciation(calculerMoyenne($bulletin['FR_note1'],$bulletin['FR_note2'], $bulletin['FR_composition'],$coefficient));?></td>
                                        </tr>
                                        <tr>
                                            <th><strong>Anglais</strong> </td>
                                            <td><?php if($classe == 'Seconde S'|| $classe =='Terminale D'  || $classe =='Premiere D') echo 2; elseif($classe =='Seconde A' || $classe =='Terminale A' || $classe =='Premiere A') echo 3 ;?></td>
                                            <td><?php if($classe == 'Seconde S'|| $classe =='Terminale D'  || $classe =='Premiere D') $coefficient = 2; else if($classe =='Seconde A' || $classe =='Terminale A' || $classe =='Premiere A') echo 3; echo round(note($bulletin['ANG_note1'],$coefficient), 2);?></td>
                                            <td><?php if($classe == 'Seconde S'|| $classe =='Terminale D'  || $classe =='Premiere D') $coefficient = 2; else if($classe =='Seconde A' || $classe =='Terminale A' || $classe =='Premiere A') echo 3; echo round(note($bulletin['ANG_note2'],$coefficient), 2);?></td>
                                            <td><?php if($classe == 'Seconde S'|| $classe =='Terminale D'  || $classe =='Premiere D') $coefficient = 2; else if($classe =='Seconde A' || $classe =='Terminale A' || $classe =='Premiere A') echo 3; echo round(note($bulletin['ANG_composition'],$coefficient), 2);?></td>
                                            <td><?php if($classe == 'Seconde S'|| $classe =='Terminale D'  || $classe =='Premiere D') $coefficient = 2; else if($classe =='Seconde A' || $classe =='Terminale A' || $classe =='Premiere A') echo 3; echo round(calculerMoyenne($bulletin['ANG_note1'], $bulletin['ANG_note2'], $bulletin['ANG_composition'] ,$coefficient), 1);?></td>
                                            <td><?php if($classe == 'Seconde S'|| $classe =='Terminale D'  || $classe =='Premiere D') $coefficient = 2; else if($classe =='Seconde A' || $classe =='Terminale A' || $classe =='Premiere A') echo 3; echo donneappreciation(calculerMoyenne($bulletin['ANG_note1'], $bulletin['ANG_note2'], $bulletin['ANG_composition'] ,$coefficient));?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><strong>Histoire-Géographie</strong> </td>
                                            <td><?php if($classe =='Terminale D' || $classe =='Seconde S' || $classe == 'Premiere D') echo 2; elseif($classe =='Terminale A' || $classe =='Seconde A' || $classe == 'Premiere A' ) echo 3; ?></td>
                                            <td><?php if($classe =='Terminale D' || $classe =='Seconde S' || $classe == 'Premiere D' ) $coefficient=2; elseif($classe =='Terminale A' || $classe =='Seconde A' || $classe == 'Premiere A') $coefficient=3; echo round(note($bulletin['HG_note1'],$coefficient),2); $somme+=$coefficient;$sommeNote1+=note($bulletin['HG_note1'],$coefficient);?></td>
                                            <td><?php if($classe =='Terminale D' || $classe =='Seconde S' || $classe == 'Premiere D') $coefficient=2; elseif($classe =='Terminale A' || $classe =='Seconde A' || $classe == 'Premiere A' ) $coefficient=3; echo round(note($bulletin['HG_note2'],$coefficient),2);$sommeNote2+=note($bulletin['HG_note2'],$coefficient);?></td>
                                            <td><?php if($classe =='Terminale D' || $classe =='Seconde S' || $classe == 'Premiere D') $coefficient=2; elseif($classe =='Terminale A' || $classe =='Seconde A' || $classe == 'Premiere A' ) $coefficient=3; echo round(note($bulletin['HG_composition'],$coefficient),2);?></td>
                                            <td><?php if($classe =='Terminale D' || $classe =='Seconde S' || $classe == 'Premiere D') $coefficient=2; elseif($classe =='Terminale A' || $classe =='Seconde A' || $classe == 'Premiere A' ) $coefficient=3; echo round(calculerMoyenne($bulletin['HG_note1'],$bulletin['HG_note2'],$bulletin['HG_composition'],$coefficient),1);?></td>
                                            <td><?php if($classe =='Terminale D' || $classe =='Seconde S' || $classe == 'Premiere D') $coefficient=2; elseif($classe =='Terminale A' || $classe =='Seconde A' || $classe == 'Premiere A') $coefficient=3; echo donneappreciation(calculerMoyenne($bulletin['HG_note1'],$bulletin['HG_note2'], $bulletin['HG_composition'],$coefficient));?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><strong>Philosophie</strong> </td>
                                            <td><?php if($classe =='Terminale D' || $classe =='Seconde S' || $classe =='Seconde A') echo 2; elseif($classe =='Terminale A') echo 3; ?></td>
                                            <td><?php if($classe =='Terminale D' || $classe =='Seconde S' || $classe =='Seconde A') $coefficient = 2; elseif($classe =='Terminale A') $coefficient = 3; echo round(note($bulletin['PHILO_note1'], $coefficient), 2) ;?></td>
                                            <td><?php if($classe =='Terminale D' || $classe =='Seconde S' || $classe =='Seconde A') $coefficient = 2; elseif($classe =='Terminale A') $coefficient = 3; echo round(note($bulletin['PHILO_note2'], $coefficient), 2) ;?></td>
                                            <td><?php if($classe =='Terminale D' || $classe =='Seconde S' || $classe =='Seconde A') $coefficient = 2; elseif($classe =='Terminale A') $coefficient = 3; echo round(note($bulletin['PHILO_composition'], $coefficient), 2);?></td>
                                            <td><?php if($classe =='Terminale D' || $classe =='Seconde S' || $classe =='Seconde A') $coefficient = 2; elseif($classe =='Terminale A') $coefficient = 3; echo round(calculerMoyenne($bulletin['PHILO_note1'], $bulletin['PHILO_note2'], $bulletin['PHILO_composition'], $coefficient), 1)?></td>
                                            <td><?php if($classe =='Terminale D' || $classe =='Seconde S' || $classe =='Seconde A') $coefficient = 2; elseif($classe =='Terminale A') $coefficient = 3; echo donneappreciation(calculerMoyenne($bulletin['PHILO_note1'], $bulletin['PHILO_note2'], $bulletin['PHILO_composition'], $coefficient))?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><strong>Mathématiques</strong> </td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') echo 2; elseif($classe =='Seconde S') echo 4 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') echo 3; ?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') $coefficient = 2; elseif($classe =='Seconde S') $coefficient = 4 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 3; echo round(note($bulletin['MATHS_note1'], $coefficient), 2) ?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') $coefficient = 2; elseif($classe =='Seconde S') $coefficient = 4 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 3; echo round(note($bulletin['MATHS_note2'], $coefficient), 2) ?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') $coefficient = 2; elseif($classe =='Seconde S') $coefficient = 4 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 3; echo round(note($bulletin['MATHS_composition'], $coefficient), 2) ?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') $coefficient = 2; elseif($classe =='Seconde S') $coefficient = 4 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 3; echo round(calculerMoyenne($bulletin['MATHS_note1'], $bulletin['MATHS_note2'], $bulletin['MATHS_composition'], $coefficient),1)?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') $coefficient = 2; elseif($classe =='Seconde S') $coefficient = 4 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 3; echo donneappreciation(calculerMoyenne($bulletin['MATHS_note1'], $bulletin['MATHS_note2'], $bulletin['MATHS_composition'], $coefficient))?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><strong>Sciences Physiques</strong> </td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') echo 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D' || $classe == 'Seconde S') echo 3; ?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') $coefficient = 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D' || $classe == 'Seconde S') $coefficient = 3; echo round(note($bulletin['SPC_note1'], $coefficient), 2)?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') $coefficient = 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D' || $classe == 'Seconde S') $coefficient = 3; echo round(note($bulletin['SPC_note2'],$coefficient), 2)?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') $coefficient = 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D' || $classe == 'Seconde S') $coefficient = 3; echo round(note($bulletin['SPC_composition'], $coefficient), 2)?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') $coefficient = 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D' || $classe == 'Seconde S') $coefficient = 3; echo round(calculerMoyenne($bulletin['SPC_note1'], $bulletin['SPC_note2'], $bulletin['SPC_composition'], $coefficient), 1)?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A') $coefficient = 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D' || $classe == 'Seconde S') $coefficient = 3;echo donneappreciation(calculerMoyenne($bulletin['SPC_note1'], $bulletin['SPC_note2'], $bulletin['SPC_composition'], $coefficient)) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><strong>ECM</strong> </td>
                                            <td><?= $coefficient = 2; $coefficient ?></td>
                                            <td><?= round(note($bulletin['ECM_note1'], $coefficient), 2) ?></td>
                                            <td><?= round(note($bulletin['ECM_note2'], $coefficient), 2) ?></td>
                                            <td><?= round(note($bulletin['ECM_composition'], $coefficient), 2) ?></td>
                                            <td><?= round(calculerMoyenne($bulletin['ECM_note1'],$bulletin['ECM_note2'], $bulletin['ECM_composition'], $coefficient), 1) ?></td>
                                            <td><?= donneappreciation(calculerMoyenne($bulletin['ECM_note1'],$bulletin['ECM_note2'], $bulletin['ECM_composition'], $coefficient)) ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><strong>SVT</strong> </td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A' || $classe == 'Seconde S') echo 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') echo 4; ?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A' || $classe == 'Seconde S') $coefficient = 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 4; echo round(note($bulletin['SVT_note1'], $coefficient), 2) ?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A' || $classe == 'Seconde S') $coefficient = 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 4; echo round(note($bulletin['SVT_note2'], $coefficient), 2)?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A' || $classe == 'Seconde S') $coefficient = 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 4; echo round(note($bulletin['SVT_composition'],$coefficient), 2)?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A' || $classe == 'Seconde S') $coefficient = 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 4; echo round(calculerMoyenne($bulletin['SVT_note1'], $bulletin['SVT_note2'], $bulletin['SVT_composition'], $coefficient), 1)?></td>
                                            <td><?php if($classe =='Terminale A' || $classe =='Seconde A' || $classe =='Premiere A' || $classe == 'Seconde S') $coefficient = 2 ;elseif($classe == 'Terminale D' || $classe == 'Premiere D') $coefficient = 4; echo donneappreciation(calculerMoyenne($bulletin['SVT_note1'], $bulletin['SVT_note2'], $bulletin['SVT_composition'], $coefficient))?></td>
                                        </tr>
                                        <?php 
                                        $classe = getNiveauStudent($_SESSION['student']['student_username']);

                                        if ( $classe == 'Premiere A' || $classe == "Premiere D"){
                                            echo "L ALLEMAND  ne fait pas parti de vos matieres";
                                        }else if($classe == "Terminale A" || $classe == "Seconde S"|| $classe == 'Seconde A'){
                                        ?>
                                        <tr>
                                            <th scope="row"><strong>Allemand</strong> </td>
                                            <td><?php if($classe =='Terminale A') echo 4 ;elseif($classe == 'Seconde S') echo 2;?></td>
                                            <td><?php if($classe =='Terminale A') $coefficient = 4 ;elseif($classe == 'Seconde S') $coefficient = 2; echo round(note($bulletin['ALL_note1'], $coefficient), 2)?></td>
                                            <td><?php if($classe =='Terminale A') $coefficient = 4 ;elseif($classe == 'Seconde S') $coefficient = 2; echo round(note($bulletin['ALL_note2'], $coefficient), 2)?></td>
                                            <td><?php if($classe =='Terminale A') $coefficient = 4 ;elseif($classe == 'Seconde S') $coefficient = 2; echo round(note($bulletin['ALL_composition'], $coefficient), 2)?></td>
                                            <td><?php if($classe =='Terminale A') $coefficient = 4 ;elseif($classe == 'Seconde S') $coefficient = 2; echo round(calculerMoyenne($bulletin['ALL_note1'], $bulletin['ALL_note2'], $bulletin['ALL_composition'] ,$coefficient), 2)?></td>
                                            <td><?php if($classe =='Terminale A') $coefficient = 4 ;elseif( $classe == 'Seconde S') $coefficient = 2; echo donneappreciation(calculerMoyenne($bulletin['ALL_note1'], $bulletin['ALL_note2'], $bulletin['ALL_composition'] ,$coefficient))?></td>
                                        </tr>
                                        <?php
                                        ?>
                                        <?php }?>
                                        <?php
                                        ?>
                                        <?php  }else{
                                            ?>
                                                <div class="alert alert-warning" role="alert">
                                                     Aucune informations a afficher pour le moment!!!!!!!!!!. Notes non encore mise en ligne
                                                </div>
                                            <?php
                                        } ?>
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