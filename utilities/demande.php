<?php


require_once("init.php");

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$sexe = $_POST['sexe'];
$email = $_POST['email'];
$anterieure = $_POST['classe_antérieure'];
$moyenneAnnuelle = $_POST['moyenne_annuelle'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordconfirm'];


if(isset($_POST) && !empty($_POST)){
        $nom = securisation($_POST['nom']);
        $prenom = securisation($_POST['prenom']);
        $age = securisation($_POST['age']);
        $sexe =securisation($_POST['sexe']) ;
        $email = securisation($_POST['email']);
        $anterieure =securisation($_POST['classe_antérieure']);
        $moyenneAnnuelle =securisation( $_POST['moyenne_annuelle']);
        $password = securisation(md5($_POST['password']));
        $passwordConfirm = securisation(md5($_POST['passwordconfirm']));


        if($password == $passwordConfirm){ 
            $result = executeRequete("INSERT INTO demande_inscriptions(Nom, Prenom, Age, Sexe, Niveau_antérieure, Moyenne_annuelle, Account_password, Email, Statut_demande) VALUES('$nom','$prenom', '$age', '$sexe', '$anterieure', '$moyenneAnnuelle','$password', '$email', 'En cours de traitement')");
            delibarate($moyenneAnnuelle, $email, $nom);
            executeRequete("INSERT INTO Inbox(Contenu, Auteur)VALUES('Demande inscription', '$nom')");

            if($result){
                header('location:../AdminSchoolPanel/Dashboard/register.php?message=successfull');
                //envoyerMail('youroukouc@gmail.com', 'demande inscription', 'Une nouvelle demande vient d etre envoyé');
            }
        }else{
            header('location:../AdminSchoolPanel/Dashboard/register.php?message=passwordswrong');
        }

}


?>