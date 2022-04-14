<?php
try {
    $commentaire = new Commentaire($data);
    $article = $entityManager->find('Article', $data["article_id"]);
    $utilisateur = $entityManager->find('Utilisateur', $data["utilisateur_id"]);
    $commentaire->setUtilisateur($utilisateur);
    $commentaire->setArticle($article);
    $entityManager->persist($commentaire);
    $entityManager->flush();
    //valeur de retour si réussite
    echo json_encode(["sucess" => true]);
} catch (Exception $e) {
    echo $e->getMessage();
}
