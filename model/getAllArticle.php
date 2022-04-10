<?php
//renvoie tous les articles
$li_article = $entityManager->getRepository("Article");
$tab_articleObject = $li_article->findAll();
$array_article=[];
foreach($tab_articleObject as $article){
    $array_article[] = array(
        "id_article" => $article->getId(),
        "datepost" => $article->getDatepost(),
        "titre" => $article->getTitre(),
        "miniature" => $article->getMiniature(),
    );
  
}
echo json_encode($array_article);
