<?php 
	$host = 'localhost';
	$user = 'root';
	$password = '300900';
	$db = 'joyeria-db';
	$conection = new mysqli($host,$user,$password,$db);
	if ($conection->connect_error) {
	die("Ocurrió un error conectandose en la base de datos, verifique e intente nuevamente: " . $conection->connect_error);
	 }
?>