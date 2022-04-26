<?php
$sous_categorie = $entityManager->getRepository("SousCategorie");
if (isset($_GET['categorie'])) {
    $categorie                = htmlspecialchars($_GET['categorie']);
    $tab_sous_categorieObject = $sous_categorie->findBy(['categorie' => $categorie]);
} else {
    $tab_sous_categorieObject = $sous_categorie->findAll();
}
$array_sous_categorie = [];
foreach ($tab_sous_categorieObject as $one_sous_categorie) {
    $id_categorie   = $one_sous_categorie->getCategorie();
    $categorie      = $entityManager->find('Categorie', $id_categorie);
    if (isset($_GET['categorie'])) {
        $array_sous_categorie[] =
            [
                "sous_categorie_id"     => $one_sous_categorie->getId_sous_categorie(),
                "sous_categorie"        => $one_sous_categorie->getSous_categorie(),
                'categorie_id'          => $categorie->getId_categorie(),

            ];
    } else {
        $array_sous_categorie[$categorie->getCategorie_nom()][] =
            [
                "sous_categorie_id"     => $one_sous_categorie->getId_sous_categorie(),
                "sous_categorie"        => $one_sous_categorie->getSous_categorie(),
                'categorie_id'          => $categorie->getId_categorie(),

            ];
    }
}
echo json_encode($array_sous_categorie);
