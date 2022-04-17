<?php
$sous_categorie = $entityManager->getRepository("SousCategorie")->findAll();
var_dump($sous_categorie);