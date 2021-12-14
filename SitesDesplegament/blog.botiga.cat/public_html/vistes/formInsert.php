<?php
include '../detectarIdioma.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/llista.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Document</title>
</head>

<body>

	<div class="contenedor">

		<header>

			<?php

			include 'header.php';

			?>


		</header>

		<main>

			<div>
				<h2>Introdueix un nou producte.</h2>
				<hr><br><br>
				<form action="insert.php" method="post">
					<label for="nom">Nom</label>
					<input type="text" name="nom">
					<br><br>
					<hr><br>
					<label for="descripcio">Descripcio</label>
					<input type="text" name="descripcio">
					<br><br>
					<hr><br>
					<label for="preu">Preu</label>
					<input type="number" name="preu">
					<br><br>
					<hr><br>
					<label for="foto">Foto</label>
					<input type="file" name="foto">
					<br><br>
					<input type="submit" value="Insertar" style="width: 150px;margin-top: 30px;">

				</form>

			</div>

		</main>

		<footer>

			<?php

			include 'footer.php';

			?>


		</footer>


	</div>





</body>

</html>