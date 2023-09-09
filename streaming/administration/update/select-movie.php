<?php
 

session_start(); // Avoir un acces a la super variable globale $_SESSION

if (
    !empty($_SESSION['admin']) and isset($_SESSION['admin']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['admin'] === $_COOKIE['PHPSESSID'] and isset($_GET['videoid'])
    and !empty($_GET['videoid'] )) 
{
  
    require_once('../../classes/Database.php');
    require_once('../../classes/Sanitizing.php');
    
    // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing
    $sanitizing = (object) new Sanitizing();
    
    $chooseMovie = (int) $sanitizing-> sanitizeInteger($_GET['videoid']); 
    
    
   $movie = Database::query('SELECT `id`, `title`, `description`, `link`, `private`, `id_category`, `id_gender`, `id_year` FROM `movies` WHERE `movies`.`id` = (:chooseMovie) ',[':chooseMovie' => $chooseMovie]);
  
   echo json_encode($movie);
   
}
 

?>