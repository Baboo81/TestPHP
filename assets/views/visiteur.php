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
            

            $visiteur1-> set_prenom('Chris');
            $visiteur1-> set_nom('Rodriguez');

            echo 'Ton nom est '. $visiteur1->nom . '<br/>';
            echo 'Ton prénom est ' . $visiteur1->prenom . '<br/>';
            
        ?>
    </body>
</html>