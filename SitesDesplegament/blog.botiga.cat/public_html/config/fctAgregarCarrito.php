<?php 

session_start();

//Funcio que fa que si es pitja el boto agregar producte al carrito guarda les variables a la sessio i afegeix al carro
if (isset($_REQUEST["botonAgregar"])) {

        $producto = $_REQUEST["txtproducto"];
        $preu = $_REQUEST["txtpreu"];


        $_SESSION["carrito"][$producto]["precio"] = $preu;

        echo "<script>alert('Producte $producto agregado con exito al carrito de compras');</script>";
}


?>