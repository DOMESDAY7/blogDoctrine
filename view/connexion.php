<?php ob_start(); ?>
<main>
        <h1>Connexion</h1>
        <form method="POST">
            <input type="text" id=login name=login><br>
            <input type="password" name="mdp" id="mdp"><br>
            <input type="submit" name="subLog" value="se connecter">
        </form>
</main>

<a href="#">Inscription</a>
<?php
$main = ob_get_clean();
$pageTitle = "Connexion";
require "./template/base.php";
