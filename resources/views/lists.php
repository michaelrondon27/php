<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Listado</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>Listado de productos</h1>
					<?php
						foreach ($products as $product) {
							echo "<trong>{$product->name}</strong> - {$product->description} <br>";
						}
					?>
					<hr>
					<p>
						<a href="pdf.php">Exportar en PDF</a>
					</p>
				</div>
			</div>
		</div>
	</body>
</html>