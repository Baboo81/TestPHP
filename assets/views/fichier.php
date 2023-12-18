<!DOCTYPE html>
<html>
    <head>
        <title>Les fichiers en PHP</title>
        <meta charset="utf-8" />
    </head>

    <body>
        <?php
        /**
         * La fct fopen() va ouvrir le fichier, cette fct possède plrs arguments
         * r+ : ouvre un fichier en lecture et en écriture.
         * r : ouvre un fichier en lecture seule, pas de modif possible.
         * a : ouvre un fichier en écriture seule, si le fichier n'existe pas, il en crée un nouveau.
         * a+ = ouvre un fichier en écriture et en lecture, si le fichier n'existe pas il en crée un nv.
         * Il existe d'autres arguments : w, w+, x, x+.
         * 
         * La fct fread() : va permettre la lecture du fichier.
         * La fct fclose() : va fermer le fichier.
         */
           $definition =  fopen("definition-php.php", "r+");
           $affichageDef = fread($definition, 1000);
           echo $affichageDef;
           fclose($definition);
        ?>
    </body>
</html>
