<?php
if (isset($_POST["subLog"])) {
    $req = $entityManager->getRepository("Utilisateur");
    $user = $entityManager->find("Utilisateur", 1);
    $data = $req->findBy(array('login' => $user));
    var_dump($data);
}