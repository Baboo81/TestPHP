<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire PHP</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form class="col-mg-6 border p-4" method= "POST" action= "#"> 
                <h1 class="text-align-center p-4">Formulaire</h1>
                    <div class="p-4">
                        <label class="fw-b p-3" for="prenom">Entrez votre prénom :</label>
                        <input class="rounded-4 p-3" type="text" name="prenom" id="prenom" />
                    </div>
                    <div class="p-4">
                        <label class="fw-b p-3" for="nom">Entrez votre nom :</label>
                        <input class="rounded-4 p-3" type="text" name="nom" id="nom" />
                    </div>
                    <div class="p-4">
                        <label class="fw-b p-3" for="pseudo">Entrez votre pseudo :</label>
                        <input class="rounded-4 p-3" type="text" name="pseudo" id="pseudo" />
                    </div>
                    <div class="p-3">
                        <input class="rounded-4 p-2" type="submit" value="Envoyer" />
                    </div>
                    <section class="col-md-6 result$_POST">
                        <h1 class="p-4">Résultat du $_POST</h1>
                            <p>Bonjour 
                            <?php
                            /**
                             * La fct html specialchars va empêcher d'injecter du code malvéillant 
                             * au cas ou l'utilisateur voudrait injecter du code HTML ou JS.
                             * La fct strip_tags fonctionne de la même façon mais en occultant le code HTML
                             * que l'utilisateur aurait ajouté.
                             * La fct trim(); va permettre de retirer les espace que l'utilisateur aurait mis.
                             * La fct strpslashes(); ve retirer le symbol / que l'utilisateur aurait mis.
                             */
                            $prenom = "";
                            $nom = "";
                            $pseudo = "";

                            function securisation ($donnees) {
                               $donnees = trim($donnees);
                               $donnees = stripslashes($donnees);
                               $donnees = strip_tags($donnees);
                               return $donnees;
                            }
                            /**
                             * Les variables vont récupérer les $donnees du return
                             */
                            $prenom = securisation($_POST['prenom']);
                            $nom = securisation($_POST['nom']);
                            $pseudo = securisation($_POST['pseudo']);

                            echo 'Ton prénom est : ' .$prenom. '<br/>';
                            echo 'Ton nom est : ' .$nom. '<br/>';
                            echo 'Ton pseudo est ' .$pseudo;
                            ?>
                    </section>
                </form>
            </div>
        </div>
    </body>
</html>