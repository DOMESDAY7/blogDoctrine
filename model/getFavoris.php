<?php

if(!isset($data['id_utilisateur']))     return false;
echo getFavorisOfUser(htmlspecialchars($data['id_utilisateur']),$entityManager);

function getFavorisOfUser($id_utilisateur, $entityManager)
{
    $user = $entityManager->getRepository('Utilisateur')->find($id_utilisateur);
    $favoris = $entityManager->getRepository('favoris')->findBy(array('utilisateur' => $user));
    $articles = array();
    foreach ($favoris as $fav) {
        $articles[] = [
            'id'            => $fav->getArticle()->getId(),
            'titre'         => $fav->getArticle()->getTitre(),
            'miniature'     => $fav->getArticle()->getMiniature(),
        ];
    }
    return json_encode($articles);
}
