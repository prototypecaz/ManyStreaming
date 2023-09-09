<?php

ini_set('display_errors', 1);

session_start();

if (
    isset($_POST['email']) and !empty($_POST['email']) and strlen($_POST['email']) <= 320
){
    require_once('./classes/Sanitizing.php');
    // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing
    $sanitizing = (object) new Sanitizing();

    // Validation de l'adresse e-mail
    $email = (string) ($sanitizing->validateEmail($_POST['email'])) ? strtolower($_POST['email']) : die('is not a valid email');
    require_once('./classes/Database.php');
    $verifEmail = Database::query(
        'SELECT `email`,`activate` FROM `users` WHERE `email` = (:email) ', 
        array(
            ':email' => $email
        )
    );

    if (isset($verifEmail) and !empty($verifEmail) and $verifEmail[0]['activate'] == 1){
        // retourne au navigateur le code HTTP pour preparer une redirection
       http_response_code(302);
       // ajoute dans l'en-tete la destination
       header('Location: ./?connexion#already-existe');
       // arrete l'execution du PHP
       exit(); 
       
           /*  echo ('cette email existe deja '); */
    } elseif(isset($verifEmail) and !empty($verifEmail) and $verifEmail[0]['activate'] == 0){
       // Definition des donnees du sujet
       $subject = (string) "Confirmation de votre compte";
        
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
   
       // retourne au navigateur le code HTTP pour preparer une redirection
       http_response_code(302);
       // ajoute dans l'en-tete la destination
       header('Location: ./?inscription#activate-again');
       // arrete l'execution du PHP
       exit(); 
       
       
        /* echo ("Cette email existe mais n'est pas activé"); */
    }
    elseif (
   

        isset($_POST['email']) and !empty($_POST['email']) and strlen($_POST['email']) <= 320 and
    
        isset($_SESSION['password']) and !empty($_SESSION['password']) and
    
        isset($_POST['password']) and !empty($_POST['password']) and
    
        $_SESSION['password'] === $_POST['password']
    ) {
    
        require_once('./classes/Sanitizing.php');
        // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing
        $sanitizing = (object) new Sanitizing();
    
        // Validation de l'adresse e-mail
        $email = (string) ($sanitizing->validateEmail($_POST['email'])) ? strtolower($_POST['email']) : die('is not a valid email');
     
        require_once('./classes/Encryption.php');
        // Instanciation de la classe Encryption et creation de l'objet $encryption
        $encryption = (object) new Encryption();
    
        // Chiffrement du mot de passe
        $password = (string) $encryption->passwordHash($_POST['password']);
    
        require_once('./classes/Database.php');
        // Appel de la classe abstraite Database et insertion des donnees dans la table "users"
        Database::query(
            'INSERT INTO `users` (`id`, `email`, `password`, `activate`) VALUES (NULL, (:email), (:password), 0)', 
            array(
                ':email' => $email,
                ':password' => $password
            )
        );
    
        // Definition des donnees du sujet
        $subject = (string) "Confirmation de votre compte";
        
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
    
        // retourne au navigateur le code HTTP pour preparer une redirection
        http_response_code(302);
        // ajoute dans l'en-tete la destination
        header('Location: ./?inscription#activate');
        // arrete l'execution du PHP
        exit(); 
        
    }
    
    

}

?>
