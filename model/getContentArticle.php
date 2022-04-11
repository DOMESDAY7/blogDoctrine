<?php
//affichage de l'article

use Doctrine\ORM\Mapping\Entity;

if (isset($data)) {
   $id_article = $data["article_id"];
   echo getArticleAndCom($id_article, $entityManager);
}
//function qui affiche l'article et les commentaires associés
function getArticleAndCom($id_article, $entityManager)
{
   $data = $entityManager->find('Article', $id_article);
   $reqCom = $entityManager->getRepository("Commentaire");
   $coms = $reqCom->findBy(array("article" => $data));
   foreach ($coms as $com) {
      $arrayCom[] = array(
         "contenu" => $com->getContenu(),
         "utilisateur" => array(
            "login" => $com->getUtilisateur()->getLogin(),
            "id_utilisateur" => $com->getUtilisateur()->getId(),
            "pseudo" => $com->getUtilisateur()->getPseudo(),
         ),
         "id_commentaire" => $com->getIdCommentaire(),
         "date" => $com->getDateTime(),
         
      );
   }
   $array = array(
      "article" => [
         "id_article" => $data->getId(),
         "titre" => $data->getTitre(),
         "texte" => $data->getTexte(),
         "id" => $data->getTexte()
      ],
      "commentaires" => $arrayCom,
      "success" => true
   );

   return json_encode($array);
}
