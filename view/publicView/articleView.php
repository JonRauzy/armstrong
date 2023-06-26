<?php 

$title = "articles";
include_once '../view/include/header.php';
// var_dump($articleById);  

foreach($articleById as $article): 
$textArticle = $article['max_description_article']; 
$paragraphe = breakText($textArticle, strlen($textArticle)/2);
?>

    <div class="titre-art">
        <h2><?= $article['name_article'] ?></h2>
    </div>
    <div class="container-art">
        <!-- on a d'office un première photo qu'on va afficher -->
        <img class="header-img" src="<?= $imageByArticleID[0]['url'] ?> " alt=""> 
        
        <div class="para-art">
            <p><?= $paragraphe['0']?></p>           
            <!-- par contre si on pas d'autres photos doit vérifier si elle existe avant d'essayer de l'afficher sinon ça fait une erreur -->
            <?php if(!empty($imageByArticleID[1]['url'])):?>
            <img class="right" src="<?= $imageByArticleID[1]['url'] ?> " alt="">
            <?php endif; ?>
        </div>

        <div class="para-art">
            <?php if(!empty($imageByArticleID[2]['url'])):?>
            <img class="left" src="<?= $imageByArticleID[2]['url'] ?> " alt="">
            <?php endif; ?>
            <p><?= $paragraphe['1']?></p>
        </div>

        <?php
        if(!empty($article['wiki_article'])):?>
        <p><a href="<?=$article['wiki_article']?>">Cliquez sur ce lien pour accéder à l'article Wikipédia de cet instrument.</a></p> 
        <?php endif;?>
    </div>
<?php endforeach; ?>
<?php include_once "../view/include/footer.php";?>
