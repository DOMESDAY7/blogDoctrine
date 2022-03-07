<?php
$req=$entityManager->getRepository("Message");
$user=$entityManager->find("Utilisateur",1);
$data = $req->findBy(array('utilisateur'=>$user));
echo "toto a écrit ".$data[0]->getTexte();
// var_dump($data);