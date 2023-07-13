<?php
	$mysqli = new mysqli("localhost","root","","curso");

	//include("config.php");
	//$con=conectar();

	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$edad=$_POST['año'];
	$telefono=$_POST['telefono'];

	//$nombre=$_GET['nombre'];
	//$email=$_GET['email'];
	//$edad=$_GET['año'];
	//$telefono=$_GET['telefono'];



	$sql="INSERT INTO alumno (id, nombre, email, año, telefono, fecha_registro) VALUE (0, '$nombre','$email','$edad','$telefono', now())";
	$query=mysqli_query($mysqli, $sql);

	//echo $sql;
	
	if($query){
		header("Location:../views/index.php");
	}else{

	}	
?>
