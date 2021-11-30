<?php
include '../detectarIdioma.php';
include '../canviarIdioma.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/llista.css">
    <title>Document</title>
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
            include 'config/logincodiPHP.php';
            ?>

            <form action="login.php" method="POST">

                <input type="text" name="user" placeholder="Digite Usuario">
                <br><br>
                <input type="password" name="pass" placeholder="Digite Contraseña">
                <br><br>
                <button type="submit">ENTRAR</button>

            </form>

        </div>

        <footer>
            <?php
            include 'classes/footer.php';
            ?>
        </footer>

    </div>

</body>
</html>