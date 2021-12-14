<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/producte.css">
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


       <form action ="login.php" method="POST">

        <input type="text" name="user" placeholder="Digite usuario">
        <br><br>
        <input type="password" name="pass" placeholder="Digite comtraseña">
        <br><br>
        <button type="submit">ENTRAR</button>

        </form>

        <?php 
        
            session_start();
            $admin = "admin";
            $passw = "admin";
            $_SESSION["login"]["user"] = $_POST['user'];
            $_SESSION["login"]["pass"] = $_POST['pass']; 
        
            if($_SESSION["login"]["user"] == $admin){

                if($_SESSION['login']["pass"] == $pass){

                    header("location:formInsert.php");



                }else {
                    echo "DATOS INCORRECTOS";
                }

            }

        ?>

       </main>

       <footer>



       </footer>


    </div>




    
</body>
</html>
