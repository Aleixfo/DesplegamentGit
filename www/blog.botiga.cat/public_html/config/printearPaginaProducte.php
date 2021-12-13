<?php

include 'config-db.php';

$id = $_GET['id'];


//$sql = "SELECT * FROM llistaProductes where id='" . $row['id'] . "'";
$sql = "SELECT id, nom, descripcio, preu from producte";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['id'] == $id) {
            echo "<div><img width='300px' height='300px' src='img/" . $row["id"] . ".jpeg'> <br>· Id: " . $row["id"] . "<br>· Nom: " . $row["nom"] . "<br>· Descripcio:  " . $row["descripcio"] . "<br>· Preu: " . $row["preu"] . "<br></div>";
        }
    }
} else {
    echo "<br>0 results";
}

$conn->close();

?>
