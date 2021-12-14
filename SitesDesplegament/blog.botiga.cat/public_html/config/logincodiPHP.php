
<?php

session_start();
$admin = "admin";
$passw = "admin";
$_SESSION["login"]["user"] = $_POST['user'];
$_SESSION["login"]["pass"] = $_POST['pass'];

if ($_SESSION["login"]["user"] == $admin) {

    if ($_SESSION['login']["pass"] == $passw) {

        header("location:formInsert.php");
    } else {

        echo "DATOS INCORRECTOS";
    }
}
?>