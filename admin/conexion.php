<?php 
	$host = 'localhost';
	$user = 'root';
	$password = '300900';
	$db = 'joyeria-db';
	$conection = @mysqli_connect($host,$user,$password,$db);
	if(!$conection){
		echo "Error en la conexión";
	}

?>