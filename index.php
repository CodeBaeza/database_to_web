<?php

	$conexion = mysqli_connect('localhost','root',"",'pruebazalcu')

?>

<!DOCTYPE html>
<html>
<head>
	<title>Mostramos datos</title>
</head>
<body>
	<h1>Mostramos los datos de la base de datos de prueba</h1>
<br>

	<table border = '3'>
		<tr>
			<td>id</td>	
			<td>Canción</td>
			<td>Artista</td>
			<td>Precio</td>
		</tr>

		<?php
		$sql = "SELECT * FROM catalogo";
		$result=mysqli_query($conexion,$sql);

		while($mostrar = mysqli_fetch_array($result)){	
		?>
		<tr>
			<td><?php echo $mostrar['id'] ?></td>	
			<td><?php echo $mostrar['cancion'] ?></td>
			<td><?php echo $mostrar['artista'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
		</tr>
	<?php
	}
	?>
	</table>	

</body>
</html>
