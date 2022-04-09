<?php
use ReallySimpleJWT\Token;
$token = $data["token"];
$secret = "@arnakeuseDU93";
$result = Token::validate($token, $secret);
if($result==true){
    //retouner les infos de l'utilisateur
    //mail
    //pseudo
    $entityManager->find('Utilisateur');

}