<?php 

$title = "contact";
include_once '../view/include/header.php';


?>


<div class="box">
        <form action="./" class="formbloc" method="POST">
            <div class="formgroupe">
                <label for="Nom" class="labelAll">Utilisateur</label>
                <input type="text" placeholder="nom" id="utilisateur"class="inputUser" name="username" required
                maxlength="16">
            </div>

            <div class="formgroupe">
                <label for="mail" class="labelAll">Mail</label>
                <input name="text" type="exemple@mail.com" id="mdp"class="inputUser" required
                maxlength="16">
            </div>

            <div class="formgroupe">
                <label for="message" class="labelAll">Message</label>
                <textarea name="message" placeholder="Entrez ici votre message" id="message" required /></textarea>
            </div>   


            <div class="formgroupe">
                <input type="submit" value="LOGIN" class="buttonsub inputUser" id="submit">
                </div>
        
        </form>
    </div>
<?php
    include_once '../view/include/footer.php';

