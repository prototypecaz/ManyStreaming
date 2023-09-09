<?php

ini_set('display_errors', 1);

require_once('./vendor/autoload.php');

# Defini l'emplacement des fichiers de templates
$fileSystemLoader = (object) new \Twig\Loader\FilesystemLoader('./themes/classic/templates/front-office/');

# Defini les parametres du chargeur
$optionsLoader = (array) array(
    'debug' => true,    // active le mode debug
    'autoescape' => false, // desactive l'echappement automatique
    'auto_reload' => true, // compilation systematique des templates
    'cache' => './cache/' // definition de l'emplacement du dossier de cache
);

// Chargement de l'environnement avec la definitions des parametres
$environment = (object) new \Twig\Environment($fileSystemLoader, $optionsLoader);
// Finalise la possibilite d'utiliser la commande "debug"
$environment->addExtension(new \Twig\Extension\DebugExtension());

require_once('./classes/Database.php');

session_start();

$general = (array) array(
    'title' => "Titre de mon site",
    'page' => $_SERVER['QUERY_STRING'],
    "movies" => Database::query('SELECT * FROM `movies`', array())
);

$nav = (array) array(
    'menu' => [
        
        ['href' => "./?categories", 'title' => "Page des categories", 'text' => 'Categories'],
        ['href' => "./?genres", 'title' => "Page des genres", 'text' => 'Genres'],
        ['href' => "./?connexion", 'title' => "Page de connexion", 'text' => 'Connexion']
    ]
);

/* $video  = (array) array(
    "movies" => Database::query('SELECT * FROM `movies`', array()),
    "uniqueMov" => (isset($_GET['uniquemov']) and !empty($_GET['uniquemov']) ) ? 
    Database::query('SELECT * FROM `movies` WHERE `id` = (:id)', array(':id' => $_GET['uniquemov'])) : array()
 
); */


if(isset($_GET['uniquemov']) and !empty($_GET['uniquemov'])){
$video  = (array) array(
   
    "uniqueMov" => (
    !empty($_SESSION['user']) and isset($_SESSION['user']) and
    isset($_COOKIE['PHPSESSID']) && !empty($_COOKIE['PHPSESSID']) && 
    $_SESSION['user'] === $_COOKIE['PHPSESSID'])?
    Database::query('SELECT * FROM `movies` WHERE `id` = (:id)', array(':id' => $_GET['uniquemov'])) : 
    Database::query('SELECT * FROM `movies` WHERE `id` = (:id) AND `private`=0', array(':id' => $_GET['uniquemov']))  
 );
}
else{
    
    $video = array();
    
}

/* "movies" => Database::query('SELECT * FROM `movies`', array()), */

$categories = (array) array(
    "categories" => Database::query('SELECT * FROM `categories`', array()),
);

$genres = (array) array(
    "genres" => Database::query('SELECT * FROM `genders`', array()),
);

$choiceCategory = (array) array(
    "choiceCategory" => (isset($_GET['categorie']) and !empty($_GET['categorie'])) ? 
    Database::query('SELECT * FROM `genders` WHERE `genders`.`id_category` = (:idcategorie) ', array(':idcategorie' => $_GET['categorie'])) : array()
);

$choiceGenre = (array) array(
    "choiceGenre" => (isset($_GET['genres']) and !empty($_GET['genres'])) ? 
    Database::query('SELECT * FROM `movies` WHERE `movies`.`id_gender` = (:idgenre)',array('idgenre'=>$_GET['genres'])) : array()
);

$backgroundImg = (array) array(
    "backgroundImg" => Database::query('SELECT * FROM `general`',[])
);


$recherche = (array) array(
    
    "recherche" => (isset($_GET['search']) and !empty($_GET['search'])) ? 
    Database::query( 'SELECT `id`, `title`, `picture`, `id_category`, `id_gender` FROM `movies` WHERE LOWER(`title`) LIKE LOWER(:search)', array(':search' => '%'.$_GET['search'].'%')) : array()
);

$lastSlidemovies = (array) array(
    "lastSlidemovies" => Database::query('SELECT * FROM `movies` ORDER BY id DESC LIMIT 3',[]),
    "firstSlidemovies" => Database::query('SELECT * FROM `movies` ORDER BY id LIMIT 3',[])
);



$twig = (object) $environment->load('index.master.html.twig');
echo $twig->render(
    array_merge(
        $general, 
        $nav, 
        $video,
        $categories,
        $genres, 
        $choiceCategory,
        $choiceGenre,
        $backgroundImg,
        $recherche,
        $lastSlidemovies

    )
);

?>