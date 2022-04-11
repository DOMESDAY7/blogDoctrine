<?php
use ReallySimpleJWT\Token;
$token = $data["token"];
$resp = Token::validate($token,$secret);
if($resp == true){
    echo json_encode(array("valide"=>true));
}