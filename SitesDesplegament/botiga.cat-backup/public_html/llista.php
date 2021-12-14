<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/llista.css">
    <title>Document</title>
</head>
<body>


    <div class="contenedor">

       <header>

       <?php

        include '../header.php';

        ?>

       </header>

       <main>

         <?php

                include '../config-db.php';

                $sql = "SELECT id, nom, descripcio, preu FROM producte";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                        while($row = $result->fetch_assoc()) {

                                 echo '<div><a href="producte.php?id=' . $row["id"] . '" ><img src="img/' . $row["id"] . '.jpeg" style="height: 100px; width: 100%; "/></a>' .
                                 "<br> · Id Product: " . $row["id"] .
                                 "<br> · Nom: " . $row["nom"] .
                                 "<br> · Descripcio: " . $row["descripcio"].
                                 "<br> · Preu:  " . $row["preu"] .
                                 "<br>" . 
                                 "<form action='llista.php' method='POST'><br>" . 
                                 "<input type='hidden' name='txtproducto' value='" . $row["nom"] . "'><br> " . 
                                 "<input type='hidden' name='txtpreu' value='" . $row["preu"] . "'><br> " .
                                 "<input type='submit' name='botonAgregar' value='Agregar Carrito' style='width:90px;'></form><br><br><br></div>";

                        }
                }else{
                        echo "0 results";
                }


        ?>

       </main>

       <footer>

       <!-- CODE FOOTER... -->

       <?php 

                session_start();

                if(isset($_REQUEST["botonAgregar"])){

                        $producto = $_REQUEST["txtproducto"];
                        $preu = $_REQUEST["txtpreu"];


                        $_SESSION["carrito"][$producto]["precio"] = $preu;

                        echo "<script>alert('Producte $producto agregado con exito al carrito de compras');</script>";

                }

		echo "<a href='llista.php?cat'>Catalan</a><br>";
                echo "<a href='llista.php?es'>Castellano</a><br>";
                echo "<a href='llista.php?en'>Ingles</a>";

                $conn->close();
	//header ('Location: http://www.botiga.cat');

       ?>

       </footer>

    </div><!-- FI CONTAINER GENERAL -->

</body>
</html>
