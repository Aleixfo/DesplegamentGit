<?php
include '../detectarIdioma.php';
include '../canviarIdioma.php';
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/llista.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Llista Productes</title>
</head>
<body>

        <div class="contenedor">

                <header>
                        <?php
                        include 'classes/header.php';
                        ?>
                </header>

                <div id="main">

                        <?php
                        include 'config/fctAgregarCarrito.php';
                        include 'config/printearProductesLlista.php';
                        ?>

                </div>

                <footer>

                        <?php
                        include 'classes/footer.php';
                        ?>

                </footer>

        </div><!-- FI CONTAINER GENERAL -->

</body>
</html>