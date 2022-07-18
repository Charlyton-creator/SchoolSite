<?php


require_once("databaseconfig.php");

$identity = $_POST['identity'];
$email = $_POST['email'];
$commentaire = $_POST['commentaire'];
$id = $_POST['Id'];
$date = date("d-m-y");

if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST['identity'], $_POST['email']) && !empty($_POST['identity']) && !empty($_POST['email'])) {
        $id = $_POST['Id'];
        $identity= securisation($_POST['identity']);
        $email = securisation($_POST['email']);
        $commentaire = securisation(htmlentities($_POST['commentaire']));
        debug($_POST);
        $résultat = executeRequete("INSERT INTO commentaires(Id_article, Auteur_commentaire, Date_post,commentaire) VALUES('$id', '$identity', '$date', '$commentaire')");

        if($résultat){
            header('location:../Blog/view/ViewAcceuil.php');
            
        }
    }
}
?>