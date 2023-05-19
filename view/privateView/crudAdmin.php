<?php

$title = 'admin';
include_once '../view/include/header.php';
// var_dump()

?>


<div class="container-crud">
    <?php if(empty($allArticle)):?>
    <div class="padarticle">   
        <h2 style="text-transform: capitalize;">Bonjour <?= $_SESSION['login_user']?>! Il n'y a pas d'article à votre nom présentement !</h2>
    </div>
    <?php else: ?>
        <table>
        <?php if(isset($problem)): ?>
            <h3><?= $problem ?></h3>
            <?php endif; ?> 
        <tr>
            <th>nom d'article</th>
            <th>description</th>
            <th>date</th>
            <th>auteur</th>
            <th>catégorie</th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <?php
            foreach ($allArticle as $item) :
                ?>
                <td class="case"><?= $item['name_article'] ?></td>
                <td class="case"><?= $item['min_description_article'] ?></td>
                <td class="case"><?= $item['date_article'] ?></td>
                <td class="case"><?= $item['login_user'] ?></td>
                <td class="case" style="padding-right: 1rem;"><?= $item['name_category'] ?></td>
                <td id="update-crud"><button class="btn"><a href="?article_update=<?= $item['id_article'] ?>">update</a></button></td>
                <td id="delete-crud"><button class="btn"><a  onclick="void(0);let a=confirm('Voulez-vous vraiment supprimer \'<?= $item['name_article'] ?>\' ?'); if(a){ document.location = '?p=d&article_delete=<?= $item['id_article'] ?>'; };" href="#">delete</a></button></td>
                
                
            </tr>
    <?php
        endforeach;
    endif;
    ?>

    </table>
</div>

<?php
include_once '../view/include/footer.php';
?>