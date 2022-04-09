<?php



if (isset($_POST["subAdd"])) {
    $_POST["datepost"] = new DateTime();
    $message = new Article($_POST);
    addArticle($message,$entityManager);
}


//
// ─── ADD AN ARTICLE IN THE DATABASE ─────────────────────────────────────────────
//    
function addArticle($message,$entityManager){
    
    // $message->setTexte("ceci est mon premier message");
    // $message->setDatepost(new DateTime());
    // $user = $entityManager->find("Utilisateur", 1);
    // $message->setUtilisateur($user);
    $entityManager->persist($message);
    $entityManager->flush();
}