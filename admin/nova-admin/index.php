<?php 
	session_start();
	include "../conexion.php";	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include "includes/scripts.php"; ?>
	<title>Nova Joyeria</title>
</head>
<body>
	<?php include "includes/header.php"; ?>
	<section id="container">
		
		<table>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Mensaje</th>
			</tr>
		<?php 
		echo '<p class="alerta">Mensajes de contacto en Nova Joyeria:</p>';
			 $sql = mysqli_query($conection,"SELECT * from contacto");
			$resultado = mysqli_num_rows($sql);
			
    		if($resultado >0){
				while ($contacto =  mysqli_fetch_array($sql)){
				
		?>
					<tr>
					<td><?php echo $contacto["id"]; ?></td>
					<td><?php echo $contacto["nombre"]; ?></td>
					<td><?php echo $contacto["email"]; ?></td>
					<td><?php echo $contacto["mensaje"]; ?></td>
					<td>
					</td>
				</tr>

	<?php
      }
    }else{
		echo '<p class="alerta">No hay mensajes de contacto</p>';
    }
    ?>
	</section>
</body>
</html>