<?php
use ReallySimpleJWT\Token;

if (isset($data)) {
    $login = $data["mail"];
    $mdp = $data["mdp"];
    $req = $entityManager->getRepository("Utilisateur");
    $req->findAll("Utilisateur");
    $user = $req->findOneBy(array("login"=>$login));
    if($user!=NULL){
        $mdpDb =$user->getPasswd();
        if(password_verify($mdp,$mdpDb)){
            $expiration=time() + 3600;
           
            $id = $user->getId();
            //création d'un token utilisé pour la connexion
            $token=Token::create($id,$secret,$expiration,$_SERVER['SERVER_NAME']);
            $array = array(
                "id_utilisateur"=>$user->getId(),
                "login"=>$user->getLogin(),
                "pseudo"=>$user->getPseudo(),
                "success"=>true,
                "token"=>$token
            );
            echo json_encode($array);
        }else{
            $array = array(
                "success"=>false
            );
            echo json_encode($array);
        }
    }else{
        echo ("error");
    }

}else{
    echo ("error");
}