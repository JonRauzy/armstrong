<?php 

$title = "articles";
include_once '../view/include/header.php';

// var_dump($articleById);  
?>

<?php foreach($articleById as $article): 
    $textArticle = $article['max_description_article']; 
    $paragraphe = breakText($textArticle, strlen($textArticle)/2);
?>
    <main>
        <div class="contitreart">
            <h2><?= $article['name_article'] ?></h2>
        </div>
    <!-- on a d'office un première photo qu'on va afficher -->
        <section class="conteneurart">

            <div class="contimgart">
                <img src="<?= $imageByArticleID[0]['url'] ?> " alt=""> 
            </div>

            <div class="conteneurpara">
                <p><?= $paragraphe['0']?></p>   
                <p><?= $paragraphe['1']?></p>
            </div>
            <!-- par contre si on pas d'autres photos doit vérifier si elle existe avant d'essayer de l'afficher sinon ça fait une erreur -->
    
            <div class="contimgart">

                <div>
                    <?php if(!empty($imageByArticleID[1]['url'])):?>
                    <img src="<?= $imageByArticleID[1]['url'] ?> " alt="">
                    <?php endif; ?>
                </div>
                    
                <div>
                    <?php if(!empty($imageByArticleID[2]['url'])):?>
                    <img src="<?= $imageByArticleID[2]['url'] ?> " alt="">
                    <?php endif; ?>
                </div>
            </div>
            <div class="conteneurpara">
                <?php
                if(!empty($article['wiki_article'])):?>
                    <p><a href="<?=$article['wiki_article']?>">Cliquez sur ce lien pour accéder à l'article Wikipédia de cet instrument.</a></p> 
                <?php endif;?>
            </div>
        </section>
    </main>

<?php endforeach; ?>
<?php include_once "../view/include/footer.php";?>
