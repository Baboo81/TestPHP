<?php
class Visiteur {
    private $prenom;//propriétés

    public function set_prenom($nouveau_prenom) { //Les fct sont des méthodes; set permet de créer les paramètres
        $this->prenom = $nouveau_prenom;
    }

    public function get_prenom() { //Get permet de lire, récupérer les paramètres
        return $this-> prenom;
    }
}
?>