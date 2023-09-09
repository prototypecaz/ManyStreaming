<?php
session_start(); // Avoir un acces a la super variable globale $_SESSION
if (
    !empty($_SESSION['admin']) and isset($_SESSION['admin']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['admin'] === $_COOKIE['PHPSESSID'] and  !empty($_GET['userid']) and 
    isset($_GET['userid'])
){
    require_once('../../classes/Database.php');
    require_once('../../classes/Sanitizing.php');
    $sanitizing = (object) new Sanitizing();
    $userId = (int) $sanitizing->sanitizeInteger($_GET['userid']); 
    var_dump($userId);
   Database::query('DELETE FROM `users` WHERE `users`.`id` = (:idUser)',[':idUser'=>$userId]);

   http_response_code(302);
   header("location:../?delete-user");
   exit(); 

    
}


?>