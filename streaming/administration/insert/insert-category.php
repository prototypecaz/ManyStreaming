<?php
 
session_start(); // Avoir un acces a la super variable globale $_SESSION
if (
    !empty($_SESSION['admin']) and isset($_SESSION['admin']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['admin'] === $_COOKIE['PHPSESSID'] and isset($_POST['category']) and 
    !empty($_POST['category']) and strlen($_POST['category']) <= 25)
{
    require_once('../../classes/Database.php');
    require_once('../../classes/Sanitizing.php');
    
    // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing
    $sanitizing = (object) new Sanitizing();
    
    $category = (string) $sanitizing-> sanitizeString($_POST['category']);
  
    Database::query('INSERT INTO `categories`(`id`, `category`) VALUES (null,(:category))',[':category'=>$category]);

   http_response_code(302);
   header("location:../?add-gender");
   exit();

    
}


?>