



<?php
//affichage du message
$req=$entityManager->getRepository("Message");
$user=$entityManager->find("Utilisateur",1);
$data = $req->findBy(array('utilisateur'=>$user));
echo "toto a écrit ".$data[0]->getTexte();
//affichage des commentaires

$reqCom=$entityManager->getRepository("Message");
$com=$entityManager->findBy(array("ext_message"=>4));
$dataCom = $req->findBy(array('utilisateur'=>$user));


 ?>
 <br>
 <input type="text" name="commentaire">
 <input type="submit" value="send" name="subCom">

 <?php
 if(isset($_POST["subCom"])){
    $commentaire = new Commentaire();
    $commentaire->setCommentaire($_POST["commentaire"]);
    $commentaire-> setDateTime(new DateTime());
 }