<?php
if (!isset($_GET['id_utilisateur']))        echo "id_utilisateur non défini";
$id_utilisateur = htmlspecialchars($_GET['id_utilisateur']);
echo getPalOfUser($id_utilisateur, $entityManager);

function getPalOfUser($id_utilisateur, $entityManager)
{
    $user = $entityManager->getRepository('Utilisateur')->findOneBy(array('id' => $id_utilisateur));
    $pal = $entityManager->getRepository('PAL')->findBy(array('utilisateur' => $user));
    $array = [];
    foreach ($pal as $p) {
        $array[] = [
            "utilisateur" => $p->getUtilisateur()->getId(),
            "article"       => [
                "id"=>$p->getArticle()->getId(),
                "titre"=>$p->getArticle()->getTitre(),
            ]
        ];
    }
    return json_encode($array);
}
