<?php


require_once("init.php");

$username = $_POST['username'];
$password = $_POST['password'];
$statut = $_POST['statut'];

if (isset($_POST['manager']) && !empty($_POST['manager'])) {
    if (isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = securisation($_POST['username']);
        $password = securisation($_POST['password']);
        $statut = securisation(htmlentities($_POST['statut']));
        debug($_POST);
        $résultat = executeRequete("SELECT * FROM manageraccount WHERE manager_username='$username'");
        if($résultat->rowCount() > 0){
            $manager = $résultat->fetch(PDO::FETCH_ASSOC);
            if($manager['manager_password'] == $password){
                foreach($manager as $indice => $element){
                    if($indice != 'manager_password'){
                        $_SESSION['manager'][$indice] = $element;
                    }
                }               
                header('location:../AdminSchoolPanel/Dashboard/index.php');
            }else
            {
             echo "ERREUR DE MOT DE PASSE!!!";
            }
        }
        else{
         echo "ERREUR DE NOM!!!";
        }
    }else{
        header('location:../AdminSchoolPanel/Dashboard/404.php');
    }
} else
if (isset($_POST['eleve']) && !empty($_POST['eleve'])) {
    if (isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = securisation($_POST['username']);
        $password = securisation($_POST['password']);
        $statut = securisation(htmlentities($_POST['statut']));
        debug($_POST);
        $résultat = executeRequete("SELECT * FROM sutudents_account_information WHERE student_username='$username'");
        if($résultat->rowCount() > 0){
            $manager = $résultat->fetch(PDO::FETCH_ASSOC);
            if($manager['student_password'] == $password){
                foreach($manager as $indice => $element){
                    if($indice != 'student_password'){
                        $_SESSION['student'][$indice] = $element;
                    }
                }
                header('location:../AdminSchoolPanel/Dashboard/index.php');
            }else
            {
             echo "ERREUR DE MOT DE PASSE!!!";
            }
        }
        else{
         echo "ERREUR DE NOM!!!";
        }
    }else{
        header('location:../AdminSchoolPanel/Dashboard/404.php');
    }
}else 
if (isset($_POST['professeur']) && !empty($_POST['professeur'])) {
    if (isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = securisation($_POST['username']);
        $password = securisation($_POST['password']);
        $statut = securisation(htmlentities($_POST['statut']));
        debug($_POST);
        $résultat = executeRequete("SELECT * FROM professors_account_information WHERE professor_username='$username'");
        if($résultat->rowCount() > 0){
            $manager = $résultat->fetch(PDO::FETCH_ASSOC);
            if($manager['professor_password'] == $password){
                foreach($manager as $indice => $element){
                    if($indice != 'professor_password'){
                        $_SESSION['professeur'][$indice] = $element;
                    }
                }
                header('location:../AdminSchoolPanel/Dashboard/index.php');
            }else
            {
             echo "ERREUR DE MOT DE PASSE!!!";
            }
        }
        else{
         echo "ERREUR DE NOM!!!";
        }
    }else{
        header('location:../AdminSchoolPanel/Dashboard/404.php');
    }
}
?>