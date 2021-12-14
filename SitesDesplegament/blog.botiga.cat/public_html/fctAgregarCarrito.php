<?php

session_start();

//Funcio que fa que si es pitja el boto agregar producte al carrito guarda les variables a la sessio i afegeix al carro
if (isset($_REQUEST["botonAgregar"])) {

        $producto = $_REQUEST["txtproducto"];
        $preu = $_REQUEST["txtpreu"];


        $_SESSION["carrito"][$producto]["precio"] = $preu;

        if ($_COOKIE['idioma'] == "es") {
                echo "<script>alert('Producto $producto agregado con exito al carrito de compras');</script>";
        }
        if ($_COOKIE['idioma'] == "en") {
                echo "<script>alert('Product $producto added correctly to the bag');</script>";
        }
        if ($_COOKIE['idioma'] == "ca") {
                echo "<script>alert('Producte $producto agregat al carreto de compra');</script>";
        }
}
?>