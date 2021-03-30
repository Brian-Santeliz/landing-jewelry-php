<?php 
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'joyeria-db';
	$conection = @mysqli_connect($host,$user,$password,$db);
	if ($conexion->connect_error) {
	die("Ocurrió un error conectandose en la base de datos, intente más tarde: " . $conexion->connect_error);
	 }
?>