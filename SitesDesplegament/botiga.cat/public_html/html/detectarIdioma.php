<?php
    function obtenerIdioma(){
        $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
        return $idioma;
    }

    $idioma_usuario = obtenerIdioma();
    $_COOKIE['idioma'] = $idioma_usuario;
?>