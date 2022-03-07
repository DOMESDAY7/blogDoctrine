<?php

// require "./template/livre.php";



require "bootstrap.php";
// require "./model/creer_message.php";
// require "./model/affiche_message.php";

//connexion

// if(!isset($_SESSION)){
    $pathModel= "./model/connexion.php";
    $pathView = "./view/connexion.php";
    if(file_exists($pathModel)){
        require $pathModel;
        if(file_exists($pathView)){
            require $pathView;
        }
    }

// }