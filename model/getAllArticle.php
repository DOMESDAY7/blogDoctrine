<?php
//renvoie tous les articles
//pour avoir les article d'une certaine catégorie le transmettre en paramettre [categorie]

$li_article = $entityManager->getRepository("Article");

$tab_articleObject = [];
if (isset($_GET['categorie'])){
    $categorie = htmlspecialchars($_GET['categorie']);
    
    // on récupère les sous-categories ayant pour categorie la categorie passée en paramettre
    $li_sous_categorie = $entityManager->getRepository("SousCategorie");
    $tab_sous_categorieObject = $li_sous_categorie->findBy(array('categorie' => $categorie));
    $tab_sous_categorie = [];
    foreach ($tab_sous_categorieObject as $sous_categorie) {
        $tab_sous_categorie[] = $sous_categorie->getId_sous_categorie();
    }
    
    //on met dans tab_articleObject les articles de la categorie passée en paramettre
    foreach($tab_sous_categorie as $sous_categorie){
        $tab_articleObject = array_merge($tab_articleObject, $li_article->findBy(array('sousCategorie' => $sous_categorie)));
    }
}  
else                     $tab_articleObject = $li_article->findAll();
$array_article = [];

//on parcours le tableau d'article et on crée un tableau d'article
foreach ($tab_articleObject as $article) {
    
    
    $array_article[] = array(
        "id_article"    => $article->getId(),
        "datepost"      => $article->getDatepost(),
        "titre"         => $article->getTitre(),
        "miniature"     => $article->getMiniature(),
        "sous_categorie"=> $article->getSousCategorie()->getId_sous_categorie(),
        "categorie"     => $article->getSousCategorie()->getCategorie()->getId_categorie(),
    );
        
}
echo json_encode($array_article);
