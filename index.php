<?php

// require "./template/livre.php";



require "bootstrap.php";
// require "./model/creer_message.php";
// require "./model/affiche_message.php";

//connexion

if(isset($_GET["page"])){
    $page=$_GET["page"];
    $pathModel= "./model/$page.php";
    $pathView = "./view/$page.php";
    if(file_exists($pathModel)){
        require $pathModel;
    }
    if(file_exists($pathView)){
        require $pathView;
    }

}else{
    //header(Location:./home)
    echo "page not defined";
}