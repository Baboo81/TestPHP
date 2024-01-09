<?php
    //Initiation d'une session:
    session_start();
    session_destroy();
    //Initiation de cookies:
    $nomCookie = "utilisateur";
    $valeurCookie = "Chris";
    setcookie($nomCookie, $valeurCookie, time() + 3600, "/", "nomDuSite.be", false, true);
    //Pour supprimer ce cookie il faut juste lui mettre le même temps mais passé : setcookie($nomCookie, $valeurCookie, time() - 3600);

    $nomCookie2 = "test";
    $valeurCookie2 = "Ceci est un test";
    setcookie($nomCookie2, $valeurCookie2);

    echo $_COOKIE["test"];
?>

<!DOCTYPE html>
<html>
    <?php
    /**
     * Les instructions; include & require servent à inclure des fichiers mais la 
     * différence est que si PHP n'arrive pas à récupérer les données avec include 
     * le script continuera de s'executer mais pas avec require.
     */
        include("./assets/components/head.php");
        include("./assets/components/nav.php");
    ?>
    <body>
        <section class="container">
            <article class="row">
                <div class="col-md-6">
                    <h1 class="p-4">Le PhP, j'adore !</h1>
                    <h3 class="p-4">Les tableaux</h3>
                    <?php
                      $membre = array(
                                array('Chris', 42, 'chrisrodriguez@hotmail.be'),
                                array('Chonchon', 5, 'chonchon@hotmail.com'),
                                array('Boubouille', 6, 'boubouille@hotmail.com')
                      );
                      echo $membre[0][0]. ' a ' .$membre[0][1]. ' ans. Son mail est ' .$membre[0][2]. '<br/>'; 

                      for ($ligne = 0; $ligne < 3; $ligne++) {
                        $membre_no = $ligne+1;
                        echo ' Membre numéro ' .$membre_no. '<br/>';
                        echo ' <ul> ';
                            for ($col = 0; $col < 3; $col++) {
                                echo ' <li> ' .$membre[$ligne][$col]. ' </li> ';
                            }
                        echo ' </ul> ';
                      }
                    ?>
                    <h3 class="p-4">Les fonctions</h3>
                    <?php
                        function Bonjour () {
                            echo "Bonjour les amis<br/> ";
                        }

                        function BonjourUser($prenom){
                            echo ' Bonjour ' .$prenom. ' ! ' . ' <br/> ';
                        }

                        function NomAge($prenom, $age) {
                            echo ' Age = ' .$age. ' et le prénom est ' .$prenom. ' <br/> ';
                        }

                        function DireBonjour () {
                            return "Bonjour";
                        }

                        function DireBonsoir () {
                            echo "Bonsoir";
                        }

                        $bonjour = DireBonjour();
                        $bonsoir = DireBonsoir();

                        echo $bonjour;
                        echo $bonsoir;

                        Bonjour();
                        BonjourUser('Chris');
                        NomAge('Chris', '42');
                        DireBonjour();
                        DireBonsoir();
                    ?>
                     <h5 class="p-4">Les types de fonctions</h5>
                     <?php
                        echo strlen("Bonjour les amis").'<br/>';
                        echo str_word_count("Salut les grenouilles"). '<br/>';//Les caractères accentués comptent pour 2 et les espaces pour 1
                        echo str_repeat("Salut <br/>", 6). '<br/>';
                        $txt = "Hello World";
                        echo str_replace("Hello", "Hi", $txt, $i);
                        echo '<br/> Nombre de remplacement : ' .$i. '<br/>';
                        $words = "BONJOUR";
                        echo strtolower($words). '<br/>';
                        echo strtoupper($words). '<br/>';
                        echo strpos("Salut", "u"). '<br/>';//Les caractères accentués comptent pour 2 et les espaces pour 1
                        $string = "J'aime le <strong>PHP</strong";
                        echo htmlspecialchars($string). '<br/>';
                        echo nl2br("Salut les
                        grenouilles vertes !"). '<br/>';//Permet de conserver le saut de ligne
                        $string2 = "Bonjour à tous";
                        print_r (explode(" ", $string2)). '<br/>';
                        echo '<br/>';
                        print_r (str_split("Bonjour", 2)). '<br/>';
                        echo '<br/>';
                        $string3 = array('Bonjour', 'à', 'tous');
                        echo implode("@", $string3);
                     ?>
                     <h5 class="p-4">Les fonctions pour les array</h5>
                     <?php
                     $voitures = array(
                        "BMW" => "318",
                        "Toyota" => "Celika",
                        "Lotus" => "Elise",
                        "BMW2" => 318
                     );
                       print_r (array_keys($voitures, "318", true));
                       echo '<br/>';
                       $loisirs = array(
                        "sport" => "vélo",
                        "bonsaika" => "bonsais",
                        "lecture" => "géopolitique"
                       );
                       echo '<pre>';
                       print_r (array_values($loisirs));
                       echo '</pre>';
                       echo '<br/>';
                       if (array_key_exists("BMW", $voitures)) {
                            echo "La clé existe";
                       } else {
                            echo "La clé n'existe pas";
                       }
                       echo '<br/>';
                       echo array_search("Celika", $voitures);
                       echo '<br/>';
                       $prenom2 = array("Chris", "Bodoo", "Chonchon", "Boubouille");
                       if (in_array("Chris", $prenom2)) {
                            echo "Prenom trouvé";
                       } else {
                            echo "Prenom pas trouvé";
                       }
                       echo '<br/>';
                       echo count($prenom2);
                       echo '<br/>';
                       $compter = array("Vélo", "Vélo", "Chien", "B", "B");
                       echo '<pre>';
                       print_r (array_count_values($compter));//Compte le nb valeurs identiques
                       echo '</pre>';
                       echo '<br/>';
                       $compare = array(
                        "a" => "bleu",
                        "b" => "vert",
                        "c" => 'rose'
                       );
                       $comparant = array(
                        "a" => "bleu",
                        "b" => "vert"
                       );
                       echo '<pre>';
                       print_r(array_diff_assoc($compare, $comparant));//Compare les différences dans les array
                       echo '</pre>';
                       echo '<pre>';
                       print_r(array_intersect_assoc($compare, $comparant));//Compare les similitudes dans les array
                       echo '</pre>';
                       echo '<br/>';
                       echo '<pre>';
                       $remplissage = array_fill(0, 4,"Mauve");//Remplir l array arg1 = index, arg2 = Nb de fois, arg3 = valeur
                       print_r ($remplissage);
                       echo '</pre>';
                       $cles = array("a", "b", "c", "d");
                       $remplir = array_fill_keys($cles, "lettre");
                       echo '<pre>';
                       print_r($remplir);
                       echo '</pre>';
                       $couleurs = array("bleu", "vert");
                       array_push($couleurs, "Rose", "Mauve");//Insérer un éléments en fin d'array
                       echo '<pre>';
                       print_r($couleurs);
                       echo '</pre>';
                       array_pop($couleurs);//Supprimer le dernier élément en fin d'array
                       echo '<pre>';
                       print_r($couleurs);
                       echo '</pre>';
                       array_unshift($couleurs, "Rose", "Mauve");//Insérer un éléments au début d'array
                       echo '<pre>';
                       print_r($couleurs);
                       echo '</pre>';
                       array_shift($couleurs);//Supprimer le premier élément
                       echo '<pre>';
                       print_r($couleurs);
                       echo '</pre>';
                       $couleurs1 = array("a" => "bleu", "b" => "vert", "c" => "jaune");
                       $couleurs2 = array("a" => "rouge", "b" => "violet");
                       array_splice($couleurs1, 1, 2, $couleurs2);//Supprimer et remplace des éléments
                       print_r($couleurs1);
                       $newArray = array_merge($couleurs, $couleurs1, $couleurs2);//Combiner des array entre eux
                       echo '<pre>';
                       print_r($newArray);
                       echo '</pre>';
                       echo '<pre>';
                       print_r(array_unique($compter));//Supprime les doublons
                       echo '</pre>';
                       echo '<pre>';
                       $prenom3 = array("Zaza", "Fifi", "Riri");
                       echo '<pre>';
                       rsort($prenom3);
                       print_r($prenom3);//Trie les valeurs d'un array
                       echo '</pre>';
                       $ageNoms = array(
                        "Chris" => "42",
                        "Loulou" => "57",
                        "Fanfan" => "34"
                       );
                       ksort($ageNoms);//Classe les keys par ordre croissant dans un tableau assoc
                       echo '<pre>';
                       print_r ($ageNoms);
                       echo '</pre>';
                       krsort($ageNoms);//Classe les keys par ordre dé-croissant dans un tableau assoc
                       echo '<pre>';
                       print_r($ageNoms);
                       echo '</pre>';
                       asort($ageNoms);//Classe les valeurs par ordre croissant dans un tableau assoc
                       echo '<pre>';
                       print_r($ageNoms);
                       echo '</pre>';
                       arsort($ageNoms);//Classe les valeurs par ordre dé-croissant dans un tableau assoc
                       echo '<pre>';
                       print_r($ageNoms);
                       echo '</pre>';
                     ?>
                     <h5 class="p-4">Les fonctions relatives à la date</h5>
                     <?php
                        $jours = array(
                            "", 
                            "Lundi",
                            "Mardi", 
                            "Mercredi",
                            "Jeudi",
                            "Vendredi",
                            "Samedi",
                            "Dimanche"
                        );
                        $mois = array(
                            "",
                            "Janvier",
                            "Fevrier",
                            "Mars",
                            "Avril",
                            "Mai",
                            "Juin",
                            "Juillet",
                            "Août",
                            "Septembre",
                            "Octobre",
                            "Novembre",
                            "Décembre"
                        );
                        $dateFr = $jours[date("N")]. ' ' .date("d"). ' ' .$mois[date("n")]. ' ' .date("Y");
                        echo "Nous sommes le : " .$dateFr;
                        setlocale(LC_TIME, 'fr_FR');
                        echo '<p>Vérifier le format de la date :</p>';
                        $date = checkdate(12, 31, 2014);
                        $date2 = checkdate(13, 54, 2054);
                        $date3 = checkdate(25, 04, -100);

                        if ($date) {
                            echo "La date est valite ! <br/>";
                        } else {
                            echo "La date n'est pas valide ! <br/>";
                        }

                        if ($date2) {
                            echo "La date est valite ! <br/>";
                        } else {
                            echo "La date n'est pas valide ! <br/>";
                        }

                        if ($date3) {
                            echo "La date est valite ! <br/>";
                        } else {
                            echo "La date n'est pas valide ! <br/>";
                        }
                        echo '<p>Récupérer des infos au format array :</p>';
                        echo '<pre>';
                        print_r (getdate());
                        echo '</pre>';
                     ?>
                     <h5 class="p-4">Les constantes</h5>
                     <?php
                        define("BIENVENUE", "Bienvenue sur mon site !");//Les constantes sont tjrs accessibles n'importe où, sa portée est globale contrairement aux variables
                        echo BIENVENUE;
                        $a = "Bonjour";
                        define("NOMBRE", 4);

                        function portee () {
                            echo NOMBRE;
                        }

                        portee();
                        echo '<p>Les constantes magiques : </p>';
                        echo '<br/>';
                       /**
                        *__FILE__ Contient le chemin complet et le nom du fichier dans lequel elle sera placée
                        *__DIR__ Va contenir le nom dans lequel est le fichier
                        *__FUNCTION__ Va contenir le nom de la fct qui va la contenir
                        *__LINE__ Numéo de la ligne du fichier à laquelle la constante est appelée
                        *__CLASS__
                        *__METHOD__
                        *__NAMESPACE__
                        */
                        echo __LINE__ . '<br/>';

                        function test () {
                            echo __FUNCTION__ . '<br/>';
                        }

                        test();

                        echo __FILE__ . '<br/>';
                        echo __DIR__ . '<br/>';
                        echo __LINE__ . '<br/>';
                     ?>
                     <h5 class="p-4">Les formulaires</h5>
                     <?php
                        echo "Cfr : pages; target et formulaire";
                     ?>
                </div>
                <div class="col-md-6 py-4">
                    <h1 class="py-4">PhP suite ...</h1>
                    <h5 class="py-4">Les variables super globales</h5>
                     <?php
                     /**Une variable super globale est une variable accessible partout contrairement
                      *à une variable déclarée localement (ds une fct) ou globalement (ds l'environnement global).
                        A utiliser avec parcimonie !
                      */
                      //$GLOBALS est une variable tableau, qui permet d'acceder à n'importe quelle variable
                        $x = 10;
                        $y = 20;

                        function Mult() {
                          $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
                        }
                        Mult();
                         echo "Le résultat = " . $z;
                         echo '<br/>';
                      //$_SERVER est une variable tableau, qui contient des infos du type server ou systeme
                      echo $_SERVER['PHP_SELF']. '<br/>';
                      echo $_SERVER['SERVER_ADDR']. '<br/>';
                      echo $_SERVER['SERVER_NAME']. '<br/>';
                      echo $_SERVER['SCRIPT_NAME']. '<br/>';
                      echo $_SERVER['HTTP_HOST']. '<br/>';
                      //$_REQUEST permet de récolter des infos après l'envoi d'un form HTML.
                      //$_POST collecte les données après soumission d'un form.
                      //$_COOKIE:
                      //Création d'un cookie, la variable setcookie peut contenir jusqu'à 7 paramètres: cfr le haut de page
                      //$_SESSION: permet de stocker des infos de page en page. cfr haut de page.
                        $_SESSION['prenom'] = "Chris";
                        $_SESSION['age'] = 42;
                        $_SESSION['sport'] = "Vélo";
                     ?>
                     <h5 class="py-4">POO</h5>
                     <?php
                     /**La POO, permet de créer des objets à partir de classe */
                     echo "cfr: visiteur.php et visiteur.class.php" . '<br/>';
                     ?>
                     <h5 class="py-4">Gestion des erreurs</h5>
                     <?php
                      if(!file_exists("./assets/views/definition-php.txt")) {
                            die("Fichier non trouvé !");
                      } else {
                            $fichier = fopen("./assets/views/definition-php.txt", "r");
                            $fichierAffichage = fread($fichier, 1000);
                      }
                      echo $fichierAffichage;
                     ?>
                     <h5 class="py-4">Gestion des exceptions</h5>
                     <?php
                        function Division ($x, $y) {
                            if($y == 0) {
                                /**Throw permet de lancer l'exception si try a trouver une erreur*/
                                throw new Exception("Division par zéro impossible !");
                            }
                            return $x/$y;
                        }

                        /**Bloc try; vérifie si il y a une erreur et donc si il faut 
                         * déclencher une exception
                        */
                        try {
                           echo Division(2,4) . '<br/>';
                           echo Division(2,0) . '<br/>';
                        }
                        /**Le bloc catch va attraper l'exception et la stocker dans l'objet $e,
                         * $e sera récupérer par la méthode getMessage qui appartient à la classe Exception.
                        */
                        catch(Exception $e) {
                            echo "Message d'erreur : " . $e -> getMessage();
                        }
                        echo '<br/>';
                     ?>
                     <h1 class="py-5">Les BD avec MySQL</h1>
                     <?php
                        /**Connexion avec PDO, PDO ext une extension orientée objet :*/
                        $serveur = "localhost";
                        $login = "root";
                        $passWord = "root";
                        /**Test de la connexion à la DB test :*/
                       /** try {
                                *Initialisation à la DB mySQL en créant un objet :
                        *$connexion = new PDO("mysql:host=$serveur;dbname=test", $login, $passWord);
                        *$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                        *echo "Connexion à la BD réussie :)"; 
                        * }
                        
                        *catch (PDOException $e) {
                            *echo 'Echec de la connexion : ' . $e->getMessage();
                        * }*/
                            /////////////////////////////////////////////////////////:
                        //Connexion à mySQL:
                        /** 
                        *echo "<h5>Création d'une BD en SQL</h5>";
                        *try {
                            *$connexion = new PDO("mysql:host=$serveur", $login, $passWord);
                            *$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            *Permier ordre en SQL avec la méthode exec :
                            *$connexion ->exec("CREATE DATABASE test2");
                            *echo "Base de données créée avec succès ! Yehhhhhhhhh !!!!!!";
                        * }

                        *catch (PDOException $e) {
                            *echo "Echec de la connexion : " . $e->getMessage();
                        * }*/
                        /*echo "<h5>Connexion à la DB : test2</h5>" . '<br/>';
                        try {
                            $connexion = new PDO("mysql:host=$serveur;dbname=test2", $login, $passWord);
                            $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            //Requêtes SQL :
                            $request = "CREATE TABLE Visiteurs(
                                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,/**Col 1*/
                                //nom VARCHAR(50),/**Col 2*/
                                //prenom VARCHAR(50),/**Col 3*/
                               //email VARCHAR(70)/**Col 4*/
                               // )";
                            //$connexion->exec($request);
                               // echo "Table visiteur créée ! ";
                            //}

                       /*catch (PDOException $e) {
                            echo "Echec de la connexion : " . $e->getMessage();
                        }*/
                        /**echo "<h5>Insertion de valeurs dans la BD</h5>" . '<br/>';

                        

                        try {
                            $connexion = new PDO("mysql:host=$serveur; dbname=test2", $login, $passWord);
                            $connexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            //Sécurisation de l'envoi de données SQL:
                            //1.Préparation de la requête:
                            $request = $connexion->prepare(
                                    "INSERT INTO Visiteurs(nom, prenom, email)
                                     VALUES(:nom, :prenom, :email)"
                            );
                            //2.Lier les marqueurs avec bindParam:
                            $request->bindParam(':nom',$nom);
                            $request->bindParam(':prenom',$prenom);
                            $request->bindParam(':email',$email);

                            $nom = "Pape";
                            $prenom = "Jean";
                            $email = "jean.pape@gmail.com";

                            $request->execute();
                        }

                        catch(PDOException $e) {
                            echo "Echec de la connexion :( " . $e->getMessage();
                        }*/

                        /*echo "<h5>Récupérer des info dans la DB</h5>" . '<br/>';

                        try{
                            $connexion = new PDO("mysql:host=$serveur;dbname=test2", $login, $passWord);
                            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $request = $connexion->prepare("
                            SELECT * FROM Visiteurs");

                            $request->execute();
                            $result = $request->fetchAll();//Permet d'afficher le resultat sous forme d'un tableau

                            echo '<pre>';
                            print_r($result);
                            echo '</pre>';

                        }

                        catch(PDOException $e) {
                            echo "Echec de la connexion :(( " . $e->getMessage();
                        }*/
                        
                        /*echo "<h5>Ajouter des colonnes à la DB</h5>";

                        try {
                            $connexion = new PDO("mysql:host=$serveur;dbname=test2", $login, $passWord);
                            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $request = "
                                ALTER TABLE Visiteurs ADD sexe VARCHAR(10)";//Ajout de colonnes

                            $connexion->exec($request);
                            echo "Ajout réussi :)))";
                        }

                        catch(PDOException $e) {
                            echo "Echec de la connexion :(( " . $e->getMessage();
                        }*/

                        /*try {
                            $connexion = new PDO("mysql:host=$serveur;dbname=test2", $login, $passWord);
                            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $request1 = $connexion->prepare(
                                "SELECT prenom FROM Visiteurs LIMIT 4,1"
                            );
                            
                            $request1->execute();

                            $result = $request1->fetchAll();

                            echo "<pre>";
                            print_r($result);
                            echo "</pre>";

                        }

                        catch(PDOException $e) {
                            echo "Echec de la connexion :( " . $e->getMessage();
                        }*/

                        /*try {
                            $connexion = new PDO("mysql:host=$serveur;dbname=test2", $login, $passWord);
                            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            //$modifAge = "UPDATE Visiteurs SET age=38 WHERE ID=1";
                            $suppr = "DROP TABLE Visiteurs";

                            $request = $connexion->prepare($suppr);
                            $request->execute();
                            echo "Modification réussie :))";
                        }

                        catch(PDOException $e) {
                            echo "Echec de la connexion " . $e->getMessage();
                        }*/

                        echo "<h5>Relations entre tables</h5>";

                        try {
                            $connexion = new PDO("mysql:host=$serveur;dbname=test2", $login, $passWord);
                            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        }

                        catch(PDOException $erreur) {
                            echo "Echec de connexion :(( " . $erreur->getMessage();
                        }
                     ?>
                </div>
            </article>
        </section>
        <section>
            <?php
                include("./assets/views/formulaire.php");
                
            ?>
        </section>
    </body>
        <?php
            include("./assets/components/footer.php");
        ?>
</html>