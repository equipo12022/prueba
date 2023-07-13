<?php
	$mysqli = new mysqli("localhost","root","","curso");

	$sql="SELECT * FROM alumno";
	$query=mysqli_query($mysqli, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Data</title>
	<link rel="stylesheet" href="../css/index.css" media="all">
</head>
<body>
	<div class="container">
		<div class="container-form">
			<h1 class="title">Formulario</h1>
	
			<form action="../controllers/insert.php" method="POST">
				<div class="container-input">
					<label>Nombre</label>	
					<input type="text" name="nombre" required>
				</div>
	
				<div class="container-input">
					<label>Correo Electronico</label>
					<input type="email" name="email" required>
				</div>
	
				<div class="container-input">
					<label>Edad</label>
					<input type="number" name="año" required>
				</div>
	
				<div class="container-input">
					<label>Numero de Telefono</label>
					<input type="number" name="telefono" required>
				</div>
				<div class="button">
					<input class="btn-form" type="submit">
				</div>	
			</form>
		</div>
	
		<div class="container-table">
			<table>
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Edad</th>
						<th>Telefono</th>
						<th colspan="2">Operacion</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<?php $id=$row['id']?>
						<td><?php echo $row['nombre']?></td>
						<td><?php echo $row['email']?></td>
						<td><?php echo $row['año']?></td>
						<td><?php echo $row['telefono']?></td>
						<td><button class="button-edit"><a class="redirect" href="">Editar</a></button></td>
						<td><button class="button-delete"><a class="redirect" href="../controllers/delete.php?id=<?php echo $row['id']?>">Eliminar</a></button></td>
						
					</tr>
					<?php 
						}
					?>
				</tbody>
			</table>
		</div>
	</div>


</body>
</html>
