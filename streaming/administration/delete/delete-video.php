<?php
 
session_start(); // Avoir un acces a la super variable globale $_SESSION
if (
    !empty($_SESSION['admin']) and isset($_SESSION['admin']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['admin'] === $_COOKIE['PHPSESSID'] and  !empty($_GET['videoid']) and 
    isset($_GET['videoid'])
){
    require_once('../../classes/Database.php');
    require_once('../../classes/Sanitizing.php');
     // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing
     $sanitizing = (object) new Sanitizing();
     $videoId = (int) $sanitizing-> sanitizeInteger($_GET['videoid']);

    Database::query('DELETE FROM `movies` WHERE `movies`.`id` = (:idvideo)',[':idvideo'=>$videoId]);

    http_response_code(302);
    header("location:../?delete-video");
    exit();

    
}


?>