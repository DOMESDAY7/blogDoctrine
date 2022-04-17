<?php
//renvoie tous les articles
//pour avoir les article d'une certaine catégorie le transmettre en paramettre [categorie]

$li_article = $entityManager->getRepository("Article");
$tab_articleObject = [];
if (isset($_GET['categorie'])){
    $categorie = htmlspecialchars($_GET['categorie']);
    $tab_articleObject = $li_article->findBy(['categorie' => $categorie]);
}   
    
else                     $tab_articleObject = $li_article->findAll();
$array_article = [];
foreach ($tab_articleObject as $article) {
    $array_article[] = array(
        "id_article"    => $article->getId(),
        "datepost"      => $article->getDatepost(),
        "titre"         => $article->getTitre(),
        "miniature"     => $article->getMiniature(),
        "categorie"     =>  ['categorie_id'=>$entityManager->find('Categorie', $article->getId())->getId_categorie(),'categorie_nom'=>$entityManager->find('Categorie', $article->getId())->getCategorie_nom()],
    );
        
}
echo json_encode($array_article);
