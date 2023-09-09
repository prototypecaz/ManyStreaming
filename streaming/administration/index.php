<?php

ini_set('display_errors', 1);

require_once('../vendor/autoload.php');

# Defini l'emplacement des fichiers de templates
$fileSystemLoader = (object) new \Twig\Loader\FilesystemLoader('../themes/classic/templates/back-office/');

# Defini les parametres du chargeur
$optionsLoader = (array) array(
    'debug' => true,    // active le mode debug
    'autoescape' => false, // desactive l'echappement automatique
    'auto_reload' => true, // compilation systematique des templates
    'cache' => '../cache/' // definition de l'emplacement du dossier de cache
);

// Chargement de l'environnement avec la definitions des parametres
$environment = (object) new \Twig\Environment($fileSystemLoader, $optionsLoader);
// Finalise la possibilite d'utiliser la commande "debug"
$environment->addExtension(new \Twig\Extension\DebugExtension());

require_once('../classes/Database.php');

session_start();

$general = (array) array(
    'title' => "Titre de mon site",
    'page' => $_SERVER['QUERY_STRING']
   
);

$emailUser = (array) array(
    "emailUser" => Database::query('SELECT `email`,`activate`,`id` FROM `users`', array())
);

$movies = (array) array(
    "movies" => Database::query('SELECT `id`,`title`,`picture` FROM `movies`',[])
);

$category = (array) array(
    "category" => Database::query('SELECT * FROM `categories`',[])
);

$gender = (array) array(
    "genders" => Database::query('SELECT * FROM `genders`',[])
);

$year = (array) array(
    "years" => Database::query('SELECT * FROM `years`',[])
);

$backgroundImg = (array) array(
    "backgroundImg" => Database::query('SELECT * FROM `general`',[])
);




$twig = (object) $environment->load('index.master.html.twig');
echo $twig->render(
    array_merge(
        $general,
        $emailUser,
        $movies,
        $category,
        $gender,
        $year,
        $backgroundImg 
    )
);



?>