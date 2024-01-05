<!DOCTYPE html>
<html>
    <head>
        <title>Classes et objets</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
            include_once ('visiteur.class.php');
            //Instancier la classe:
            $visiteur1 = new Visiteur;
            $visiteur2 = new Visiteur;

            $visiteur1-> set_prenom('Chris');
            $visiteur2-> set_prenom('Lulu');

        ?>
    </body>
</html>