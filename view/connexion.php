<?php ob_start(); ?>
<section>
    <div>
        <h1>Connexion</h1>
        <input type="text"><br>
        <input type="password"><br>
        <input type="submit" name="subLog" value="se connecter">
    </div>
</section>

<a href="#">Inscription</a>
<?php
$main = ob_get_clean();
require "./template/base.php";
