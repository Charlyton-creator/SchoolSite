<?php
//--------- BDD
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'myphiladelphie';

try{
    $db_connect = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
    $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}
// $mysqli->set_charset("utf8");
//--------- SESSION
session_start();
//--------- CHEMIN
define("RACINE_SITE","/Myphiladelphie/");
//--------- VARIABLES
$contenu = '';
//--------- AUTRES INCLUSIONS
require_once("fonctions.php");
?>