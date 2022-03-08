<?php
if (isset($_POST["subLog"])) {
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    $req = $entityManager->getRepository("Utilisateur");
    $req->findAll("Utilisateur");
    $user = $req->findOneBy(array("login"=>$login));
    if($user!=NULL){
        $mdpDb =$user->getPasswd();
        if(password_verify($mdp,$mdpDb)){
            session_start();            
            header("Location:./home");
        }else{
            $_GET["error"]=true;
        }
    }else{
        //si l'user n'a pas de compte
        $_GET["error"]=true;
        die();
    }

}