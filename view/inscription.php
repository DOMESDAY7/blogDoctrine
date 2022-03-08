<?php ob_start() ?>
<main>
    <h1>Inscription</h1>
    <form method="POST">
        <input type="text" name="login" placeholder="mail" id=mail required="required"><br>
        <!-- faire une vérification des corresspondance des deux mdp -->
        <input type="password" name="passwd" placeholder="mot de passe" id=passwd required="required"><br>
        <input type="password" id="conf_passwd" placeholder="confirmation de mot de passe" required="required"><br>
        <input type="text" id=pseudo name="pseudo"><br>
        <input type="submit" value="Créé votre profil" name="sub">
    </form>
</main>
<?php $main=ob_get_clean(); 
$pageTitle = "Connexion";
require "./template/base.php";
?>