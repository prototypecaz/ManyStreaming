<?php
 
session_start(); // Avoir un acces a la super variable globale $_SESSION
if (
    !empty($_SESSION['admin']) and isset($_SESSION['admin']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['admin'] === $_COOKIE['PHPSESSID'] and isset($_POST['gender']) and 
    !empty($_POST['gender']) and strlen($_POST['gender']) <= 25 and isset($_POST['category']) and !empty($_POST['category']))
{
    var_dump($_POST['category']);
    require_once('../../classes/Database.php');
    require_once('../../classes/Sanitizing.php');
    
    // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing
    $sanitizing = (object) new Sanitizing();
    
    $gender = (string) $sanitizing-> sanitizeString($_POST['gender']);
    $idCategory = (int) $sanitizing-> sanitizeInteger($_POST['category']);
    Database::query('INSERT INTO `genders`(`id`, `gender`, `id_category`) VALUES (null,(:gender),(:idCategory))',[':gender'=>$gender,':idCategory'=>$idCategory]);

   http_response_code(302);
   header("location:../?add-gender");
   exit();

    
}else{

    http_response_code(302);
    header("location:../?add-gender");
    exit();
 
}


?>