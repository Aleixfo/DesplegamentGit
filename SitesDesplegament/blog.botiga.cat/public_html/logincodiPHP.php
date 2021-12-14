<?php
session_start();
$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
if ($user == "admin") {

    if ($pass == "admin") {
        $_SESSION["login"]["user"] = $_POST['user'];
        $_SESSION["login"]["pass"] = $_POST['pass'];
        header("location:formInsert.php");
    } else {

        echo "DATOS INCORRECTOS";
    }
}
?>