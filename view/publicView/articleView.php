<?php 

$title = "articles";
include_once '../view/include/header.php';
// var_dump($articleById);  

foreach($articleById as $article): 
$textArticle = $article['max_description_article']; 
$paragraphe = breakText($textArticle, strlen($textArticle)/3);
?>

<div class="container-art">
    <div class="titre-art">
        <h2><?= $article['name_article'] ?></h2>
    </div>
    <div class="article">
        <div class="header-article">
            <!-- on a d'office un première photo qu'on va afficher -->
            <img src="<?= $imageByArticleID[0]['url'] ?> " alt=""> 
        </div>

        <div class="para-art">
            <img class="para-img" src="<?= $imageByArticleID[1]['url'] ?> " alt="">
            <p><?= $paragraphe['0']?></p>           
            <!-- par contre si on pas d'autres photos doit vérifier si elle existe avant d'essayer de l'afficher sinon ça fait une erreur -->
            <?php if(!empty($imageByArticleID[1]['url'])):?>
            <?php endif; ?>
        </div>

        <div class="para-art">
            <img class="para-img" src="<?= $imageByArticleID[2]['url'] ?> " alt="">
            <p><?= $paragraphe['1']?></p>
            <?php if(!empty($imageByArticleID[2]['url'])):?>
            <?php endif; ?>
        </div>
        <div class="para-art">
            <p><?=$paragraphe['2']?></p>
        </div>

        <div class="wiki">
            <?php
            if(!empty($article['wiki_article'])):?>
            <p><a href="<?=$article['wiki_article']?>">Cliquez sur ce lien pour accéder à l'article Wikipédia de cet instrument.</a></p> 
            <?php endif;?>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php include_once "../view/include/footer.php";?>
