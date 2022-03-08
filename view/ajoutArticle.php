<?php ob_start(); ?>
<main>
    <form method="">
        <!-- mettre un resize:none -->
        <input type="text" name="titre" id="titre"><br>
        <textarea name="article" id="article" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Nouvel article">
    </form>
</main>
<?php $main=ob_get_clean();
$pageTitle = "Rajouter un article";
require "./template/base.php";
?>