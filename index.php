<?php

//Définition des pages courante

if(isset($_GET['page']) AND !empty($_GET['page'])){
    $page = trim(strtolower($_GET['page']));
}else{
    $page = 'accueil';
}

//tableau contenant toute nos pages

$allPages = scandir('controllers/');
//var_dump($allPages);

if(in_array($page.'_controller.php', $allPages)){
    //inclusion des pages
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';
}else{
    //ramène une erreur
    echo 'La page que vous demander n\'existe pas';
}