<!DOCTYPE html>
<html>
    <?php
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