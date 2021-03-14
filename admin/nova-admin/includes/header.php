<?php 

	if(empty($_SESSION['active']))
	{
		header('location: ../');
	}
 ?>
	<header>
		<div class="header">
			
			<h1>Nova Joyeria</h1>
			<div class="optionsBar">
				<p>Venezuela, <?php echo fechaC(); ?></p>
				<span>|</span>
				<span class="user"><?php echo $_SESSION['user'].' -'.$_SESSION['rol']; ?></span>
				<a href="salir.php" class="salir">Salir</a>
			</div>
		</div>
		<?php include "nav.php"; ?>
	</header>