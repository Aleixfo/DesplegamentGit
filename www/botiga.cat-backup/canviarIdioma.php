<?php
    $catalan = "cat";
    $castellano = "es";
    $ingles = "en";



//    setcookie('idioma', $castellano, time()+24*31);


    if (isset($_GET['es'])){

        setcookie('idioma', $castellano, time()+24*31);

    }

    if (isset($_GET['en'])){

        setcookie('idioma', $ingles, time()+24*31);

    }

    if (isset($_GET['cat'])){

	setcookie('idioma', $catalan, time()+24*31);

    }



?>
