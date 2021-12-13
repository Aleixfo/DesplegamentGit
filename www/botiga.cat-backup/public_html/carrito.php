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

		<div>
			<?php

				include '../config-db.php';

				session_start();
				//session_destroy();

				$total = 0;

				echo "<h3>Carrito de compres:</h3>";
				if (isset($_SESSION["carrito"])){

					foreach($_SESSION["carrito"] as $indice =>$array){
						echo "<hr>Producto: " . $indice . "<br>";
						$total += $array["precio"];
						foreach($array as $key =>$value){

							echo $key . ": " . $value . "<br>";

						}
					}

					echo "<h3><strong>Total: " . $total;


				}else{
					echo "<script>alert('Es carro esta buit');</script>";
				}

				echo "<br><br><br><hr><a href='carrito.php?vaciar=true'>Pagar</a>";

				if(isset($_REQUEST["vaciar"])){
					session_destroy();
					header("Location:carrito.php");
				}

				$conn -> close();

			?>
		</div>

       </main>

       <footer></footer>

    </div>

</body>
</html>
