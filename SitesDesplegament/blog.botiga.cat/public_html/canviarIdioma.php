<?php
    //Idiomes
    $castellano = "es";
    $ingles = "en";
    $catalan = "ca";

    if (isset($_GET['es'])){              
        setcookie('idioma', $castellano, time()+24*31);
    }

    if (isset($_GET['en'])){
        setcookie('idioma', $ingles, time()+24*31);
    }
    
    if (isset($_GET['ca'])){
        setcookie('idioma', $catalan, time()+24*31);
    }

   header("Location:llista.php");
    //header("refresh:0.1;url=llista.php");
    

?>