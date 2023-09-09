<?php




if (
isset($_POST['email']) and !empty($_POST['email']) and strlen($_POST['email']) <= 320 

){
    

    require_once('./classes/Sanitizing.php');
    // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing
    $sanitizing = (object) new Sanitizing();

    // Validation de l'adresse e-mail
    $email = (string) ($sanitizing->validateEmail($_POST['email'])) ? strtolower($_POST['email']) : die('is not a valid email');
    
    require_once('./classes/Database.php');
    // Appel de la classe abstraite Database et insertion des donnees dans la table "users"
    $resultat=Database::query(
        'SELECT `id`, `activate` FROM `users` WHERE `email` = (:email) ', 
        array(
            ':email' => $email
        )
    );

    
    ($resultat)? null : die ("votre mail ".$email." n'existe pas");
    if($resultat[0]["activate"]==1){
    
     $passwordStrong=substr(password_hash(bin2hex(random_bytes(16)), PASSWORD_BCRYPT, array('cost' => 4)), 0, 12);
     
     require_once('./classes/Encryption.php');
     // Instanciation de la classe Encryption et creation de l'objet $encryption
     $encryption = (object) new Encryption();
 
     // Chiffrement du mot de passe
     $passwordCrypt = (string) $encryption->passwordHash($passwordStrong);

     Database::query(
        'UPDATE `users` SET `password` =  (:passwordCrypt) WHERE `id` = (:id)', 
        array(
            ':passwordCrypt'=>$passwordCrypt,
            ':id'=>$resultat[0]["id"]
        )
    );
    
     
        // Definition des donnees du sujet
        $subject = (string) "envoi de votre nouveau mot de passe";

        // Definition des donnees du corps
        $body = "votre nouveau mot de passe est : " .$passwordStrong;
        

        require_once('./classes/Mailer.php');
        // Instanciation de la classe Mailer et creation de l'objet $mailer
        $mailer = (object) new Mailer();
        // Appel de methode "sendEmail(arguments)" pour definir les donnees et envoyer
        $mailer->sendEMail($email, $subject, $body); 
        
        // Encodage en Base64 de l'adresse e-mail
         $encode = (string) base64_encode($email);

         
        // retourne au navigateur le code HTTP pour preparer une redirection
         http_response_code(302);
         // ajoute dans l'en-tete la destination
         header('Location: ./?forget#'.$encode);
         // arrete l'execution du PHP
         exit(); 
    }else{

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

    // retourne au navigateur le code HTTP pour preparer une redirection
    http_response_code(302);
    // ajoute dans l'en-tete la destination
    header('Location: ./?forget#nonactiver');
    // arrete l'execution du PHP
    exit(); }

}
// Validez l'email

// Verifiez si dans la BDD elle existe (SELECT - IF)

// generer un mdp variabiliser
// crypter le mdp
// update du mdp avec l'id concerné
// envoyer un mail avec le mdp variabilisé

// Envoyez au mail

// Soit un lien avec une autre page HTML pour changement du mot de passe
// ou 
// Soit vous generez un mot de passe fort (UPDATE)
/* $2y$12$kLfoQUOcRcYttC/Tpc7s7OcfJfBwiJq/gaaGhh7lsSDUF2aAq.dTW */

//

?>