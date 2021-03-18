<?php 
	
$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
	header('location: nova-admin/');
}else{
	if(!empty($_POST))
	{
		if(empty($_POST['usuario']) || empty($_POST['clave']))
		{
			$alert = 'Ingrese su usuario y su calve';
		}else{
			require_once "conexion.php";
			$user = mysqli_real_escape_string($conection,$_POST['usuario']);
			$pass = md5(mysqli_real_escape_string($conection,$_POST['clave']));

			$query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario= '$user' AND clave = '$pass'");
			mysqli_close($conection);
			$result = mysqli_num_rows($query);

			if($result > 0)
			{
				$data = mysqli_fetch_array($query);
				$_SESSION['active'] = true;
				$_SESSION['idUser'] = $data['idusuario'];
				$_SESSION['nombre'] = $data['nombre'];
				$_SESSION['email']  = $data['email'];
				$_SESSION['user']   = $data['usuario'];
				$_SESSION['rol']    = $data['rol'];
				header('location: nova-admin/');
			}else{
				$alert = 'El usuario o la clave son incorrectos';
				session_destroy();
			}
		}
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nova Joyeria | Login Administrativo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section id="container">
		<form action="" method="post">
			<h3>Iniciar Sesión</h3>
			<img src="img/login-nova.jpg" alt="Login" class="login">
			<input type="text" name="usuario" placeholder="Usuario">
			<input type="password" name="clave" placeholder="Contraseña">
			<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
			<input type="submit" value="INGRESAR">
			<div class="contenedor">
				<a href="../index.php" class="volver">Volver</a>
			</div>
		</form>
	</section>
</body>
</html>