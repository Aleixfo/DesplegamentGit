<?php 

        include '../config-db.php';

        if (!mysqli_select_db($conn, 'productes')){
            echo "Database not selected";
        }

        $nom = $_POST['nom'];
        $descripcio = $_POST['descripcio'];
        $preu = $_POST['preu'];


        $sql = "INSERT INTO producte (nom, descripcio, preu) values ('$nom', '$descripcio', '$preu')";

        if (!mysqli_query($conn, $sql)){
              echo "No insert";
        }else{
          echo "Insert amb exit";
        }

        header("refresh:2; url=formInsert.html");

        $conn->close();
?>
