<?php
//affichage de l'article

use Doctrine\ORM\Mapping\Entity;

if (isset($_GET["article"])) {
   $id_article = $_GET["article"];
   echo getArticleAndCom($id_article, $entityManager);

   // $reqCom=$entityManager->getRepository("Commentaire");
   // $coms=$reqCom->findBy(array("article"=>$data));
   // foreach($coms as $com){
   //    echo $com->getContenu();
   // }
   // $dataCom = $req->findBy(array('utilisateur'=>$user));
}

function getArticleAndCom($id_article, $entityManager)
{
   $data = $entityManager->find('Article', $id_article);
   $reqCom = $entityManager->getRepository("Commentaire");
   $coms = $reqCom->findBy(array("article" => $data));
   foreach ($coms as $com) {
      $arrayCom[] = array(
         "contenu" => $com->getContenu(),
         "utilisateur" => array(
            "login"=>$com->getUtilisateur()->getLogin(),
            "id_utilisateur"=>$com->getUtilisateur()->getId(),
            "pseudo"=>$com->getUtilisateur()->getPseudo(),
         ),
         "id_commentaire" => $com->getIdCommentaire(),
         "date" => $com->getDateTime(),

      );
   }
   $array = array(
      "id_article" => $data->getId(),
      "titre" => $data->getTitre(),
      "texte" => $data->getTexte(),
      "id" => $data->getTexte(),
      "commentaires" => $arrayCom
   );

   return json_encode($array);
}

?>
<!-- <br>
<input type="text" name="commentaire">
<input type="submit" value="send" name="subCom"> -->

<?php
if (isset($_POST["subCom"])) {
   $_POST["dateTime"] = new DateTime();
   $commentaire = new Commentaire($_POST);
   $entityManager->persist($commentaire);
   $entityManager->flush();
}


