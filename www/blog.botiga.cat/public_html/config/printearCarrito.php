<?php

include '../config-db.php';

session_start();
//session_destroy();

$total = 0;

echo "<h3>Carrito de compres:</h3>";
if (isset($_SESSION["carrito"])) {

    foreach ($_SESSION["carrito"] as $indice => $array) {
        echo "<hr>Producto: " . $indice . "<br>";
        $total += $array["precio"];
        foreach ($array as $key => $value) {

            echo $key . ": " . $value . "<br>";
        }
    }

    echo "<h3><strong>Total: " . $total;
} else {
    echo "<script>alert('Es carro esta buit');</script>";
}

echo "<br><br><br><hr><a href='carrito.php?vaciar=true'>Pagar</a>";

if (isset($_REQUEST["vaciar"])) {
    session_destroy();
    header("Location:carrito.php");
}

$conn->close();

?>
