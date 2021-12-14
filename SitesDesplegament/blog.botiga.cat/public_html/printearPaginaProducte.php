<?php

include 'config/config-db.php';

//$sql = "SELECT * FROM llistaProductes where id='" . $row['id'] . "'";
$sql = "SELECT id, nom, descripcio, preu from productos";


$id = $_GET['id'];

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['id'] == $id) {

            if ($_COOKIE['idioma'] == "es") {
                echo "<div><img width='300px' height='300px' src='../img/" . $row["id"] . ".jpeg'> <br>· Id: " . $row["id"] . "<br>· Nombre: " . $row["nom"] . "<br>· Descripcion:  " . $row["descripcio"] . "<br>· Precio: " . $row["preu"] . "<br></div>";
            }
            if ($_COOKIE['idioma'] == "en") {
                echo "<div><img width='300px' height='300px' src='../img/" . $row["id"] . ".jpeg'> <br>· Id: " . $row["id"] . "<br>· Name: " . $row["nom"] . "<br>· Description:  " . $row["descripcio"] . "<br>· Price: " . $row["preu"] . "<br></div>";
            }
            if ($_COOKIE['idioma'] == "ca") {
                echo "<div><img width='300px' height='300px' src='../img/" . $row["id"] . ".jpeg'> <br>· Id: " . $row["id"] . "<br>· Nom: " . $row["nom"] . "<br>· Descripcio:  " . $row["descripcio"] . "<br>· Preu: " . $row["preu"] . "<br></div>";
            }
        }
    }
} else {
    echo "<br>0 results";
}
$conn->close();

?>
