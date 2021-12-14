<?php

class Producte {

    //Propietats
    public $id;
    public $nom;
    public $descripcio;
    public $preu;

    //Methods
    function set_nom($nom) {
        $this->nom = $nom;
    }

    function get_nom(){
        return $this->nom;
    }

}

?>