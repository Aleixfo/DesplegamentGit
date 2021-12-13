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

        <?php 

		include '../config-db.php';

		$id = $_GET['id'];

		//$sql = "SELECT * FROM llistaProductes where id='" . $row['id'] . "'";
		$sql = "SELECT id, nom, descripcio, preu from producte";


		$result = $conn-> query($sql);

		if ($result -> num_rows > 0)
		{
			while ($row = $result->fetch_assoc()){
				if($row['id'] == $id){
					echo "<div><img width='300px' height='300px' src='img/" . $row["id"] . ".jpeg'> <br>· Id: " . $row["id"] . "<br>· Nom: " . $row["nom"] . "<br>· Descripcio:  " . $row["descripcio"] . "<br>· Preu: " . $row["preu"] . "<br></div>";
				}
			}
		}else{
			echo "<br>0 results";
		}

		$conn->close();

		?>

       </main>

       <footer>



       </footer>


    </div>




    
</body>
</html>
