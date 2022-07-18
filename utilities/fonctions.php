<?php
function executeRequete($req)
{
global $db_connect;
$resultat = $db_connect->query($req);
if(!$resultat) //
{
die("Erreur sur la requete sql.<br>Message : " . $db_connect->error . "<br>Code: " . $req);
}
return $resultat; //
}


function debug($var, $mode = 1)
{
echo '<div style="background: orange; padding: 5px; float: right; clear: both; margin-top: 34px; ">';
$trace = debug_backtrace();
$trace = array_shift($trace);
echo 'Debug demandé dans le fichier : $trace[file] à la ligne $trace[line].';
if($mode === 1)
{
echo '<pre>'; print_r($var); echo '</pre>';
}
else
{
echo '<pre>'; var_dump($var); echo '</pre>';
}
echo '</div>';
}




function securisation($donnee){
    $donneeSecure = strip_tags($donnee);
    $donneeSecure = stripcslashes($donnee);
    $donneeSecure = trim($donnee);

    return $donneeSecure;
}

function getNumberofMessage(){
    $requete = "SELECT COUNT(*) as NumberofMessage FROM Inbox ORDER BY Id_message ASC";
    $stat = executeRequete($requete);
    return $stat->fetch()['NumberofMessage'];
}
function eleveEstConnecte()
{
if(!isset($_SESSION['student'])) return false;
else return true;
}
function professeurEstConnecte()
{
if(!isset($_SESSION['professeur'])) return false;
else return true;
}
function ManagerEstConnecté()
{
if(!isset($_SESSION['manager'])) return false;
else return true;
}

function ManagerEstConnectéEtEstDirecteur()
{
if(!isset($_SESSION['manager']['Statut']) == "Directeur") return false;
else return true;
}

function getListofInformations(){
    $req = 'SELECT * FROM informations ORDER BY Id ASC';

    $resultat = executeRequete($req);

    $informations = [];

    while($information = $resultat->fetch(PDO::FETCH_ASSOC)){
        $informations[] = $information;
    }

    return $informations;

}

function getListofActivities(){
    $req = 'SELECT * FROM activites ORDER BY Id ASC';

    $resultat = executeRequete($req);

    $activites = [];

    while($activite = $resultat->fetch(PDO::FETCH_ASSOC)){
        $activites[] = $activite;
    }

    return $activites;

}

function envoyerMail($emaildestinator, $subject, $message ){
    $messagesecure = MHASH_SHA512;
    //mail($emaildestinator, $subject, $messagesecure);
}

function countDemanderecus(){
    $requete = "SELECT COUNT(*) as NumberofDemandes FROM demande_inscriptions";
    $stat = executeRequete($requete);
    return $stat->fetch()['NumberofDemandes'];

}
function countElevesGarcons(){
    $requete = "SELECT COUNT(*) as NumberofGarcons FROM students WHERE Sexe='Masculin'";
    $stat = executeRequete($requete);
    return $stat->fetch()['NumberofGarcons'];

}

function countElevesFilles(){
    $requete = "SELECT COUNT(*) as NumberofFilles FROM students WHERE Sexe='Feminin'";
    $stat = executeRequete($requete);
    return $stat->fetch()['NumberofFilles'];

}

function countElevesInscrits(){
    $requete = "SELECT COUNT(*) as NumberofStudents FROM students";
    $stat = executeRequete($requete);
    return $stat->fetch()['NumberofStudents'];
}

function countCommentairesReçus($id){
    $requete = "SELECT COUNT(*) as CommentairesReçus FROM commentaires WHERE Id_article =".$id;
    $stat = executeRequete($requete);
    return $stat->fetch()['CommentairesReçus'];
}

function getListofStudents(){
    $req = 'SELECT * FROM students ORDER BY Id ASC';

    $resultat = executeRequete($req);

    $students = [];

    while($student = $resultat->fetch(PDO::FETCH_ASSOC)){
        $students[] = $student;
    }

    return $students;

}

function getListofMessages(){
    $req = 'SELECT * FROM Inbox ORDER BY Id_message ASC';

    $resultat = executeRequete($req);

    $messages = [];

    while($message = $resultat->fetch(PDO::FETCH_ASSOC)){
        $messages[] = $message;
    }

    return $messages;

}

function delibarate($moyenneAnuelle, $mail, $nom){
    if($moyenneAnuelle >= 10){
        $req = "UPDATE demande_inscriptions SET Statut_demande = 'Approuveé' WHERE Nom = '$nom'";
        executeRequete($req);
        //envoyerMail($mail, "mis a jour du Statut de la demande", " Demande Approuveé veuillez vous rendre dans l'enceinte de l'établissement pour terminer la proceduire d'inscription");
    }else{
        //envoyerMail($mail, "mis a jour du Statut de la demande", " Demande Refuseé vos resultats ne satisfons pas a nos profils recherchés");

    }
}


function getListofCommentaires($id){
    $req = 'SELECT * FROM commentaires WHERE Id_article='.$id.' ORDER BY Date_Post ASC';

    $resultat = executeRequete($req);

    $commentaires = [];

    while($commentaire = $resultat->fetch(PDO::FETCH_ASSOC)){
        $commentaires[] = $commentaire;
    }

    return $commentaires;

}

function getFeaturedArticles(){
    $req = 'SELECT * FROM featured ORDER BY Id_feature_article ASC';

    $getIt = executeRequete($req);

    $listoffeaturedArticles = [];

    while($featuredarticle = $getIt->fetch(PDO::FETCH_ASSOC)){
        $listoffeaturedArticles [] = $featuredarticle;
    }

    return $listoffeaturedArticles;
}

function getFormations(){
    $req = "SELECT * FROM formations";
    $resultat = executeRequete($req);

    $listofFormations = [];

    while($formation = $resultat->fetch(PDO::FETCH_ASSOC)){
        $listofFormations [] = $formation;
    }

    return $listofFormations;
}

function getformationById($id){
    $req = "SELECT * FROM formations where Id=".$id;

    $resultat = executeRequete($req);

    $formation = $resultat->fetch(PDO::FETCH_ASSOC);

    return $formation;
}

function getStudentId($nom){
    $req =  "SELECT Id FROM students s join sutudents_account_information a on s.Id = a.Id_student WHERE a.student_username='$nom' ";

    $result = executeRequete($req);

    $return = $result->fetch()['Id'];

    return $return;
}

function getBulletinInformations($Id){
    $req = "SELECT * FROM bulletin  WHERE Id_student =".$Id;

    $resultat = executeRequete($req);

    $donnees = $resultat->fetch(PDO::FETCH_ASSOC);

    return $donnees;
}

function getNiveauStudent($username){
    $req = "SELECT Niveau as classe FROM students s join sutudents_account_information a on s.Id = a.Id_student WHERE a.student_username='$username' ";

    $res = executeRequete($req);

    $classe= $res->fetch()['classe'];

    return $classe;
}


function getStudentSexe($username){
    $req = "SELECT Sexe as sexe FROM students s join sutudents_account_information a on s.Id = a.Id_student WHERE a.student_username='$username' ";

    $res = executeRequete($req);

    $Sexe= $res->fetch()['sexe'];

    return $Sexe;
}

function getTotalYears($username){
    $req = "SELECT TotalAnnees as Years FROM students s join sutudents_account_information a on s.Id = a.Id_student WHERE a.student_username='$username' ";

    $res = executeRequete($req);

    $Years= $res->fetch()['Years'];

    return $Years;
}

function getStudentAge($username){
    $req = "SELECT Age as age FROM students s join sutudents_account_information a on s.Id = a.Id_student WHERE a.student_username='$username' ";

    $res = executeRequete($req);

    $age= $res->fetch()['age'];

    return $age;
}

function getProfSubject($username){
    $req = "SELECT Matiere as subject FROM professors s join professors_account_information a on s.Id = a.Id_professeur WHERE a.professor_username='$username' ";

    $res = executeRequete($req);

    $subject= $res->fetch()['subject'];

    return $subject;
}

function getProfPerformance($username){
    $req = "SELECT performance as perform FROM professors s join professors_account_information a on s.Id = a.Id_professeur WHERE a.professor_username='$username' ";

    $res = executeRequete($req);

    $performance= $res->fetch()['perform'];

    return $performance;
}

function getProfTotalYears($username){
    $req = "SELECT Annees as total FROM professors s join professors_account_information a on s.Id = a.Id_professeur WHERE a.professor_username='$username' ";

    $res = executeRequete($req);

    $totalyears= $res->fetch()['total'];

    return $totalyears;
}

function getProfMerite($username){
    $req = "SELECT Merite as merite FROM professors s join professors_account_information a on s.Id = a.Id_professeur WHERE a.professor_username='$username' ";

    $res = executeRequete($req);

    $merite= $res->fetch()['merite'];

    return $merite;
}

function note($note,$coefficient){
    $noteattribuer= ($note*$coefficient);
    return $noteattribuer;
}
function calculerMoyenne($note1,$note2,$note3,$coefficient){
    $moyenne=($note1 + $note2 + $note3)/3;
    $vraieMoyenne=$moyenne*$coefficient;
    return $moyenne;
}
function donneappreciation($moyenne){
       if($moyenne<=20 && $moyenne>15){
           $appreciation="TRES-BIEN";
       }else if($moyenne<=15 && $moyenne>=14){
           $appreciation="BIEN";
       }else if($moyenne<14 && $moyenne>=12){
           $appreciation="ASSEZ-BIEN";
       }else if($moyenne<12 && $moyenne>=10){
           $appreciation="PASSABLE";
       }else $appreciation="TRAVAIL INSUFFISANT";
       return $appreciation;
}
function sommecoefficient($coefficient){
    $somme=0;
      $somme+=$coefficient;
      return $somme;
}

?>