<?php

$articleMenu = getCategoryMenu($db);
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- On mettra le title dans une variable $title a renseigner en haut de chaque vue ex: $title = accueil  -->
    <title>C•Ͻ - <?= $title ?></title>
    
    <link rel="stylesheet" href="css/article.css">
    <link rel="stylesheet" href="css/crud.css"  type="text/css" />
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/general-setting.css"  type="text/css" />
    <link rel="stylesheet" href="css/home-categ.css"  type="text/css" />
    <link rel="stylesheet" href="css/insert-update-sub.css" type="text/css">
    <link rel="stylesheet" href="css/nav-footer.css" type="text/css">
</head>
<body>
    <header class="main-head">
        <img src="asset/img/logo.jpg" alt="" id="logo">
    <nav>
        <div class="desktop-nav">
            <?php if(empty($_SESSION)): ?>
                <a class="menu" href="?p=homePage">Accueil</a>
                
                <!-- lien pour les category : -->
                <?php
                foreach($articleMenu as $item) : 
                ?>
        
                <a class="menu" href="?categoryId=<?=$item['id_category']?>"><?=$item['name_category']?></a>
        
                <?php
                    
                endforeach;
                ?>
                <a class="menu" href="?p=contact">Contact</a>
                <a class="menu" href="?p=connect">Connexion</a>
                <?php else : ?>
                    <div class="btn-nav">
                        <button class="btn"><a href="?deconnect">Deconnection</a></button>
                        <button class="btn"><a href="?p=article_add">Ajoutez article</a></button>
                        <button class="btn"><a href="./" style="text-transform: capitalize;"><?= $_SESSION['login_user']?> <i class='fas fa-home'></i></a></button>
                    </div>
            <?php endif; ?>
        </div>
        <div class="mobile-nav">
            <div class="bouton bouton-open" onclick="navbarbar()"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Hamburger_icon.svg/1024px-Hamburger_icon.svg.png" alt=""></div>
            <div class="close-navbar">
                <div class="bouton bouton-close" onclick="navbarbar()"><i class="fa-solid fa-x fa-2xl" style="color: #ffffff;"></i></div>
                <?php if(empty($_SESSION)): ?>
                    <a class="menu" href="?p=homePage">Accueil</a>
                    
                    <!-- lien pour les category : -->
                    <?php
                    foreach($articleMenu as $item) : 
                    ?>
            
                    <a class="menu" href="?categoryId=<?=$item['id_category']?>"><?=$item['name_category']?></a>
            
                    <?php
                        
                    endforeach;
                    ?>
                    <a class="menu" href="?p=contact">Contact</a>
                    <a class="menu" href="?p=connect">Connexion</a>
                    <?php else : ?>
                        <div class="btn-nav">
                            <button class="btn"><a href="?deconnect">Deconnection</a></button>
                            <button class="btn"><a href="?p=article_add">Ajoutez article</a></button>
                            <button class="btn"><a href="./" style="text-transform: capitalize;"><?= $_SESSION['login_user']?> <i class='fas fa-home'></i></a></button>
                        </div>
                <?php endif; ?>
            </div>
        </div>

    </nav>

    </header>

