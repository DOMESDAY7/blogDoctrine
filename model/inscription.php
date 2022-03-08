<?php
if (isset($_POST["sub"])) { 
    try{
        $user = new Utilisateur($_POST);
        $entityManager->persist($user);
        $entityManager->flush();
    }catch(Exception $e){
        $e->getMessage();
    }
}
