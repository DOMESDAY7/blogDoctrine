<?php
//on récupère les données de l'utilisateur
$id_user = htmlspecialchars($data['id_user']);
$user = $entityManager -> find('Utilisateur', $id_user);
$array = [
    "id_utilisateur" => $user->getId(),
    "login" => $user->getLogin(),
    "pseudo" => $user->getPseudo(),
    "cite" => $user->getCite(),
    "cite_author" => $user->getCite_author(),
];
echo json_encode($array);