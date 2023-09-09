<?php

if(isset($_POST['emailUser']) and !empty($_POST['emailUser']) and strlen($_POST['emailUser']) <= 320 
and isset($_POST['passwordUser']) and !empty($_POST['passwordUser']) and strlen($_POST['passwordUser']) >= 8)
{   
    require_once('./classes/Sanitizing.php');
    // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing
    $sanitizing = (object) new Sanitizing();
    // Validation de l'adresse e-mail
    $email = (string) ($sanitizing->validateEmail($_POST['emailUser'])) ? strtolower($_POST['emailUser']) : die('is not a valid email');
    require_once('./classes/Database.php');

   $data =  Database::query('SELECT * FROM `users` WHERE `email` = (:email)',[':email' => $_POST['emailUser']]);
   
   if(isset($data) and !empty($data)){
$activate = $data[0]['activate'];  
$test= true; 
   }else{
        $data =  Database::query('SELECT * FROM `administrators` WHERE `username` = (:username)',[':username' => $_POST['emailUser']]);   
        $activate = 1;
        $test = false;
    } if(empty($data)){
        var_dump('email invalide');
        // retourne au navigateur le code HTTP pour preparer une redirection
        http_response_code(302);
        // ajoute dans l'en-tete la destination + utilisation du hash dans la prochaine etape
        header('Location: ./?connexion#emailInvalide');
        // arrete l'execution du PHP
        exit();
    }else{
    
    

        if($activate == 1){
                var_dump('activation valide');
            $passwordBDD = $data[0]['password'];
            $password = $_POST['passwordUser'];
            if(password_verify($password,$passwordBDD)){
                session_start();
                if($test){

                
                
                 // Stockage du nom d'utilisateur (idfromdatabase) et de la valeur aleatoire du cookie(session_id) dans une super variable globale
                 $_SESSION['user'] = (string) session_id();

                 // retourne au navigateur le code HTTP pour preparer une redirection
                 http_response_code(302);
                 // ajoute dans l'en-tete la destination
                 header('Location: ./');
                 // arrete l'execution du PHP
                 exit();
                }else{
                    // Attribue un identifiant unique de type cookie a un navigateur
                 
                 // Stockage du nom d'utilisateur (idfromdatabase) et de la valeur aleatoire du cookie(session_id) dans une super variable globale
                
                 $_SESSION['admin'] = (string) session_id();
                 // retourne au navigateur le code HTTP pour preparer une redirection
                 http_response_code(302);
                 // ajoute dans l'en-tete la destination
                 header('Location: ./administration');
                 // arrete l'execution du PHP
                 exit();
                }
            }
            else{
    
            
            // retourne au navigateur le code HTTP pour preparer une redirection
            http_response_code(302);
            // ajoute dans l'en-tete la destination + utilisation du hash dans la prochaine etape
            header('Location: ./?connexion#password');
            // arrete l'execution du PHP
            exit();
            
            
            }
            
        }
        else{

            // Definition des donnees du sujet
            $subject = (string) "Nouvelle demande d'activation de votre compte";
            
            require('./configuration.php');
            // Definition du nom de domaine
            $domain = (string) $general['domain'];
        
            // Encodage en Base64 de l'adresse e-mail
            $encode = (string) base64_encode($email);
        
            // Definition des donnees du corps
            $body = <<<EOF
                <img src="http://$domain/assets/img/logo.png" title="Logo de $domain" alt="Logo de $domain"/>
                <p>Veuillez suivre le lien suivant pour la confirmation :</p>
                <a href="http://$domain/streaming/?connexion#$encode">Confirmez votre compte</a>
            EOF;
        
            require_once('./classes/Mailer.php');
            // Instanciation de la classe Mailer et creation de l'objet $mailer
            $mailer = (object) new Mailer();
            // Appel de methode "sendEmail(arguments)" pour definir les donnees et envoyer
            $mailer->sendEMail($email, $subject, $body); 


            var_dump('Compte non activer');
            // retourne au navigateur le code HTTP pour preparer une redirection
            http_response_code(302);
            // ajoute dans l'en-tete la destination + utilisation du hash dans la prochaine etape
            header('Location: ./?connexion#nonactiver');
            // arrete l'execution du PHP
            exit();
        }}

  
   
}
   
   
   


?>