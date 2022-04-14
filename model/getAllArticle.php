<?php
//renvoie tous les articles
//pour avoir les article d'une certaine catégorie le transmettre en paramettre [categorie]
$categorie = htmlspecialchars($_GET['categorie']);
$li_article = $entityManager->getRepository("Article");
$tab_articleObject = [];
if (isset($categorie))   $tab_articleObject = $li_article->findBy(['categorie' => $categorie]);
else                     $tab_articleObject = $li_article->findAll();
$array_article = [];
foreach ($tab_articleObject as $article) {
    $array_article[] = array(
        "id_article"    => $article->getId(),
        "datepost"      => $article->getDatepost(),
        "titre"         => $article->getTitre(),
        "miniature"     => $article->getMiniature(),
        "categorie"     => intval($categorie)
    );
}
echo json_encode($array_article);
