<?php
$sous_categorie = $entityManager->getRepository("SousCategorie");
if(isset($_GET['categorie'])){
    $categorie = htmlspecialchars($_GET['categorie']);
    $tab_sous_categorieObject = $sous_categorie->findBy(['categorie' => $categorie]);
}
else{
    $tab_sous_categorieObject = $sous_categorie->findAll();
}
$array_sous_categorie = [];
foreach ($tab_sous_categorieObject as $one_sous_categorie) {
    // $categorie = $entityManager->findOneBy('Categorie', $one_sous_categorie->getId());
 
    $array_sous_categorie[$one_sous_categorie->getId()][] = array(
        "sous_categorie"    => $one_sous_categorie->getSous_categorie(),
            
    );
    if(!isset($_GET['categorie'])){
        $array_sous_categorie[$one_sous_categorie->getId()]["categorie"] =  [
            'categorie_id'          => $categorie->getId(),
            'categorie_nom'         => $entityManager->find('Categorie', $one_sous_categorie->getId())->getCategorie_nom(),
        ];
        
    }  
}
echo json_encode($array_sous_categorie);
// var_dump($array_sous_categorie);