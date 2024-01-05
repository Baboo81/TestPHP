<?php
class Visiteur {
    public $prenom;//propriétés
    public $nom;

    public function set_prenom($nouveau_prenom) { //Les fct sont des méthodes; set permet de créer les paramètres
        $this->prenom = $nouveau_prenom;
    }

    public function set_nom($nouveau_nom) { //Les fct sont des méthodes; set permet de créer les paramètres
        $this->nom = $nouveau_nom;
    }

    public function get_prenom() { //Get permet de lire, récupérer les paramètres
        return $this-> prenom;
    }

    public function get_nom() {
        return $this-> nom;
    }


}
?>