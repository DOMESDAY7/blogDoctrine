<?php
if (!isset($_GET['id_utilisateur']))        echo "id_utilisateur non défini";      
$id_utilisateur = htmlspecialchars($_GET['id_utilisateur']);
$user = $entityManager->getRepository('Utilisateur')->findOneBy(array('id_utilisateur' => $id_utilisateur));
$pal = $entityManager->getRepository('PAL')->findBy(array('utilisateur' => $user));
var_dump($pal);
