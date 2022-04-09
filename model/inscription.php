<?php

try {
    $user = new Utilisateur($data);
    $entityManager->persist($user);
    $entityManager->flush();
    echo json_encode(["success" => true]);
} catch (Exception $e) {
    echo json_encode(["success" => false]);
}
