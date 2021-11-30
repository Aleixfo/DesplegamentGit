<?php

    include 'config/config-db.php';

    $sql = "SELECT id, nom, descripcio, preu FROM producte";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            if ($_COOKIE['idioma'] == 'es') {

                echo '<div><a href="producte.php?id=' . $row["id"] . '" ><img src="img/' . $row["id"] . '.jpeg" style="height: 100px; width: 100%; border-radius:10px; "/></a>' .
                    "<br> · Id Producto: " . $row["id"] .
                    "<br> · Nombre: " . $row["nom"] .
                    "<br> · Descripcion: " . $row["descripcio"] .
                    "<br> · Precio:  " . $row["preu"] .
                    "<form action='llista.php' method='POST'><br>" .
                    "<input type='hidden' name='txtproducto' value='" . $row["nom"] . "'><br> " .
                    "<input type='hidden' name='txtpreu' value='" . $row["preu"] . "'><br> " .
                    "<input type='submit' name='botonAgregar' value='Agregar Carrito' style='width:90px;'></form><br><br><br></div>";
            }

            if ($_COOKIE['idioma'] == 'en') {

                echo '<div><a href="producte.php?id=' . $row["id"] . '"><img src="img/' . $row["id"] . '.jpeg" style="height: 100px; width: 100%; border-radius:10px; "/></a>' .
                    "<br> . Id Product: " . $row["id"] .
                    "<br> . Name: " . $row["nom"] .
                    "<br> . Description: " . $row["descripcio"] .
                    "<br> . Price: " . $row["preu"] .
                    "<form action='llista.php' method='POST'><br>" .
                    "<input type='hidden' name='txtproducto' value'" . $row["nom"] . "'><br>" .
                    "<input type='hidden' name='txtpreu' value'" . $row["preu"] . "'><br> " .
                    "<input type='submit' name='botonAgregar' value='Agregar Carrito' style='width:90px;'></form><br><br><br></div>";
            }
        }
    } else {
        echo "0 results";
    }

?>