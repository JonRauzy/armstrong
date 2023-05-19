<?php

$title = "ajout d'article";
include_once '../view/include/header.php';
// var_dump($_POST, $problem);
?>


<div class="container-add">
    <div class="champs">
    <h2 id="salut">Salut <?= $_SESSION['login_user']?> ! </h2>

    <?php if(isset($problem)): ?>
        <h3><?= $problem ?></h3>
        <?php endif; ?> 
    
    <form action="" method="POST">
        <input class="field" type="text" placeholder="nom de l'instrument" name="name_article">
        <textarea class="field" name="min_description_article" id="" cols="30" rows="5" placeholder="une courte introduction de votre article"></textarea>
        <textarea class="field" name="max_description_article" id="" cols="30" rows="20" placeholder="votre texte"></textarea>

        <input class="field" type="text" placeholder="extrait sonore mp3 (url)" name="sound_article">

        <h3>Ajoutez une ou plusieurs photos : </h3>
        <input class="field" type="text" placeholder="URL photo 1 (obligatoire)" name="add_url_image[]">
        <input class="field" type="text" placeholder="Source de la photo" name="add_image_wiki_name[]">
        <input class="field" type="text" placeholder="URL de la source" name="add_image_wiki_url[]">

        <hr>
        <input class="field" type="text" placeholder="URL photo 2 (optionnelle)" name="add_url_image[]">
        <input class="field" type="text" placeholder="Source de la photo" name="add_image_wiki_name[]">
        <input class="field" type="text" placeholder="URL de la source" name="add_image_wiki_url[]">

        <hr>
        <input class="field" type="text" placeholder="URL photo 3 (optionnelle)" name="add_url_image[]">
        <input class="field" type="text" placeholder="Source de la photo" name="add_image_wiki_name[]">
        <input class="field" type="text" placeholder="URL de la source" name="add_image_wiki_url[]">

    </div>
        <hr>
        <h3>Choisissez une ou plusieurs catégorie(s) : </h3>
        <div class="checkbox">
        <?php
        //modif
        foreach ($allCateg as $item) :
        ?>
            <input type="checkbox" name="category_id_category[]" value="<?= $item['id_category'] ?>" id="<?= $item['name_category'] ?>">
            <label for="<?= $item['name_category'] ?>"><?= $item['name_category'] ?></label>
            <hr>
        <?php
        endforeach;
        ?>
        <!-- <input type="submit" value="envoie" name="submit" class="btn"> -->
        </div>
        <input type="submit" class="btn">
        </form>
</div>



<?php


include_once '../view/include/footer.php';

?>