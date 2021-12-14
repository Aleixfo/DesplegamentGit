<?php

    function obtenerIdioma(){
        $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
        return $idioma;
    }

    setcookie('idioma', obtenerIdioma(), time()+24*31);


    //$idioma_usuario = obtenerIdioma();

    //if(isset($_COOKIE['idioma'] != $idioma_usuario){
    //	setcookie('idioma', $idioma_usuario, time()+24*31);
    //}
?>
