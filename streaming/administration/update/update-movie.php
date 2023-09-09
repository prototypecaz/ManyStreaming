<?php
ini_set("display_errors", 1);
session_start();

if (isset($_POST['prive']) and 
!empty($_POST['prive'])){
    $prive = 1;
}
else{
    $prive = 0;
}


if (
    !empty($_SESSION['admin']) and isset($_SESSION['admin']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['admin'] === $_COOKIE['PHPSESSID'] and 
    isset($_POST['titre']) and 
    !empty($_POST['titre']) and isset($_POST['description']) and !empty($_POST['description']) and
    isset($_POST['video']) and !empty($_POST['video'])
    and isset($_POST['categorie']) and !empty($_POST['categorie'])
    and isset($_POST['genre']) and 
    !empty($_POST['genre']) and isset($_POST['annee']) and !empty($_POST['annee'])
    and isset($_POST['videoId']) and !empty($_POST['videoId'])
   ){
 // Permet de recuperer la function replaceorsanitize
 
 require_once('../../classes/Database.php');
 require_once('../../classes/Sanitizing.php');
 
 // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing


    $sanitizing = (object) new Sanitizing();
    $titre = (string) $sanitizing-> sanitizeString($_POST['titre']);
    $description = (string) $sanitizing-> sanitizeString($_POST['description']);
    $video = (string) $sanitizing-> sanitizeString($_POST['video']);
    /* $prive = (int) $sanitizing-> sanitizeInteger($_POST['prive']);  */
    $categorie = (int) $sanitizing-> sanitizeInteger($_POST['categorie']);
    $genre = (int) $sanitizing-> sanitizeInteger($_POST['genre']);
    $annee = (int) $sanitizing-> sanitizeInteger($_POST['annee']);
    $hiddenVideoId = (int) $sanitizing-> sanitizeInteger($_POST['videoId']);

    Database::query("UPDATE `movies` SET `title`= (:title),`description`=(:description),`link`=(:link),`private`= (:private),`id_category`=(:category),`id_gender`=(:gender),`id_year`=(:years) WHERE `movies`.`id`= (:videoId)",
    [':title'=>$titre,
    ':description'=>$description,
    ':link'=>$video,
    ':private'=>$prive,
    ':category'=>$categorie,
    ':gender'=>$genre,
    ':years'=>$annee,
    ':videoId'=>$hiddenVideoId]);

    http_response_code(302);
    // ajoute dans l'en-tete la destination
    header('Location: ../?delete-video');
    // arrete l'execution du PHP
    exit(); 
    
   
 } 

?>