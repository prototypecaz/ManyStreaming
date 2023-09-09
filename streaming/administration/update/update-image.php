
<?php

session_start(); // Avoir un acces a la super variable globale $_SESSION
ini_set('post_max_size', '1M');
ini_set('upload_max_filesize', '1M');

$WHITE_LIST = (array) ['jpg', 'jpeg', 'gif', 'png', 'bmp'];
$UPLOADS = (string) '/var/www/html/streaming/assets/upload/';

/* $UPLOADS_BDD = (string) './assets/img/uploads/'; */
if (
    !empty($_SESSION['admin']) and isset($_SESSION['admin']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['admin'] === $_COOKIE['PHPSESSID']
){
 // Permet de recuperer la function replaceorsanitize
 
 require_once('../../classes/Database.php');

 
 // Instanciation de la classe Sanitizing et creation de l'objet $sanitizing


if (
    isset($_POST['imageId']) && !empty($_POST['imageId']) and
    isset($_FILES['image']['error']) and $_FILES['image']['error'] === 0 
   
) {
    require_once('../../classes/Sanitizing.php');
    $sanitizing = (object) new Sanitizing();
    
    $chooseImage= (int) $sanitizing-> sanitizeInteger($_POST['imageId']); 
    
   //////////////////////////////////////////////////////////////////////////
    // retourne un tableau multidimensionnelle
    // la premiere cle est egale a la valeur de l'attribut 'name' de l'input file
    // var_dump($_FILES);
    
    $image = (string) $_FILES['image']['name'];

	// recupere l'extension de l'image
    $extension = (string) pathinfo($image)['extension'];

    // in_array('ceQueJeCherche', ['dansQuoi']);
    if (in_array($extension, $WHITE_LIST)) {
	
	    // recupere le nom de l'image
        $name = (string) pathinfo($image)['filename'];
        
	    // genere une chaine aleatoire alphanumerique
	    $random = (string) bin2hex(random_bytes(32));
        
        // construction du nouveau nom de l'image
        $image = (string) "$name-$random.$extension";
        
        /* 
        deplace le fichier temporaire dans un autre repertoire
        l'autre repertoire doit avoir des permissions www-data
        exemple : sudo chown -R www-data:www-data /var/www/html/uploads/
        et doit avoir obligatoirement un index.php
        exemple : /var/www/html/uploads/index.php
        */

        // move_uploaded_file('source', 'destination');
        move_uploaded_file($_FILES['image']['tmp_name'], $UPLOADS . $image);
    }

    else {

        echo "Extension non autorisee.";

    }

   
    Database::query("UPDATE `movies` SET `picture` = (:image) WHERE `movies`.`id` = (:chooseImage)",
    [
    ':image'=>$image,
    ':chooseImage'=>$chooseImage
    ]);

}

else {

    echo "Echec du telechargement.";

}

 // retourne au navigateur le code HTTP pour preparer une redirection
 http_response_code(302);
 // ajoute dans l'en-tete la destination
 header('Location: ../?delete-video');
 // arrete l'execution du PHP
 exit();

}

else { // si une des condition de la if et elseif est false on rentre donc dans l'instruction de la else
    // retourne au navigateur le code HTTP pour preparer une redirection
    /*http_response_code(302);
    // ajoute dans l'en-tete la destination
    header('Location: ../');
    // arrete l'execution du PHP
    exit();*/

}

?>