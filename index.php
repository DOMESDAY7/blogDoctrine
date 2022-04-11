<?php
// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}


//récupération des données en post
$data= json_decode(file_get_contents("php://input"),true);

require "bootstrap.php";
//secret utilisé pour la génération de token
$secret = "@arnakeuseDU93";
if (isset($_GET["action"])) {
    $action = $_GET["action"];
    $pathModel = "./model/$action.php";
    if (file_exists($pathModel)) {
        require $pathModel;
    } else {
        header("HTTP/1.0 404 Not Found");
    }

} else {
    echo "action not defined";
}
