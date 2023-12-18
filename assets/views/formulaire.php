<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>

    <form method= "POST" action= "#"> 
        <div>
            <label class="fw-b p-3" for="prenom">Entrez votre prénom :</label>
            <input class="rounded-4 p-3" type="text" name="prenom" id="prenom" />
        </div>
        <div class="p-3">
            <input class="rounded-4 p-2" type="submit" value="Envoyer" />
        </div>
        <p>Bonjour 
        <?php
          echo $_POST['prenom'];
        ?>
        , fais comme chez toi ! </p>
    </form>
    </body>
</html>