<?php
        if($_COOKIE['idioma'] == "es"){
                echo '
                <div class="itemMenu"><a href="llista.php">LISTA DE PRODUCTOS</a></div>
                <div class="itemMenu"><a href="carrito.php">CARRITO</a></div>
                <div class="itemMenu"><a href="login.php">INSERTAR NUEVO PRODUCTO</a></div>';
        }

        elseif($_COOKIE['idioma'] == "en"){
                echo '
                <div class="itemMenu"><a href="llista.php">LIST OF PRODUCTS</a></div>
                <div class="itemMenu"><a href="carrito.php">BAG</a></div>
                <div class="itemMenu"><a href="login.php">INSERT NEW ITEM</a></div>';
        }

        elseif($_COOKIE['idioma'] == "ca"){
                echo '
                <div class="itemMenu"><a href="llista.php">LLISTA DE PRODUCTES</a></div>
                <div class="itemMenu"><a href="carrito.php">CARRETO</a></div>
                <div class="itemMenu"><a href="login.php">INSERIR NOU PRODUCTE</a></div>';
        }
?>