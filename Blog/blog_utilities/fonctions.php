<?php

require_once('../../utilities/fonctions.php');
function getAllarticles(){
    $tab = [];
    $req = "SELECT * FROM articles ORDER BY Id ASC";
    $articles = executeRequete($req);
    while($resultat = $articles->fetch(PDO::FETCH_ASSOC)){
        $tab[] = $resultat;
    }
    return $tab;
}

    
function getArticleById($table,int $id){
    $req ='SELECT * FROM '.$table.' WHERE Id='.$id;

    $resultat = executeRequete($req);

    $article = $resultat->fetch(PDO::FETCH_ASSOC);
    
    return $article;
}

function getArticlesByCategorie($categorie, $table){
    
    $catArticles = [];
    $req ='SELECT * FROM '.$table.' WHERE Categorie='.$categorie.' LIMIT 0, 3';
    $resultat = executeRequete($req);


    while($data = $resultat->fetch(PDO::FETCH_ASSOC))
    {
        $var[] = $data;

    }
    return $catArticles;
}

?>