<?php

        include 'detectarIdioma.php';


        if($_COOKIE['idioma'] == "es"){
                echo '
                <div class="itemMenu"><a href="llista.php">LLISTA DE PRODUCTES</a></div>
                <div class="itemMenu"><a href="carrito.php">CARRITO</a></div>
                <div class="itemMenu"><a href="login.php">INSERTAR NOU PRODUCTE</a></div>';
        }
        elseif($_COOKIE['idioma'] == "en"){
                echo '
                <div class="itemMenu"><a href="llista.php">LIST OF PRODUCTS</a></div>
                <div class="itemMenu"><a href="carrito.php">BAG</a></div>
                <div class="itemMenu"><a href="login.php">INSERT NEW ITEM</a></div>';
        }
        elseif($_COOKIE['idioma'] == "fr"){
                echo '
                <div class="itemMenu"><a href="llista.php">LISTE DE PRODUITS</a></div>
                <div class="itemMenu"><a href="carrito.php">CHARIOT</a></div>
                <div class="itemMenu"><a href="login.php">AFFICHER LE NOUVEAU PRODUIT</a></div>';
        }
        else{
                echo '
                <div class="itemMenu"><a href="llista.php">LLISTA DE PRODUCTES</a></div>
                <div class="itemMenu"><a href="carrito.php">CARRITO</a></div>
                <div class="itemMenu"><a href="login.php">INSERTAR NOU PRODUCTE</a></div>';
        }
?>