<?php
include '../detectarIdioma.php';
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/llista.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Producto</title>
</head>

<body>

    <div class="contenedor">

        <header>

            <?php
            include 'header.php';
            ?>

        </header>

        <div id="main">

            <?php
            include '../printearPaginaProducte.php';
            ?>

        </div>

        <footer>

            <?php
            include 'footer.php';
            ?>

        </footer>

    </div>

</body>

</html>