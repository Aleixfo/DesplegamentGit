<?php
    //Funcio que retorna en string de 2 length l'idioma predeterminat del navegador
    function obtenerIdioma(){
        $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
        return $idioma;
    }

    if (!isset($_COOKIE['idioma'])){
        $_COOKIE['idioma'] = obtenerIdioma();
    }

?>