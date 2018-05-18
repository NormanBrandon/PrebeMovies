<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Lobster|Pacifico|Skranji" rel="stylesheet">
	<meta charset="UTF-8">
	<title>PrebeMovies</title>
</head>
<body class="cuerpo">

	<section>
		<div class="grid-nav">
			<div class="negro"></div>
			<div class="negro"><a href="index.html"><h3 align="center">Inicio</h3></a></div>
			<!-- <div class="negro"><a href="estrenos.html "><h3 align="center">Proximos Estrenos</h3></a></div> -->
			<div class="negro"><a href="sucursales.html"><h3 align="center">Sucursales</h3></a></div>
			<div class="negro" align="center"></div>
			<div class="especial fuente4"><h1 align="center">Culto<span>Cinema</span></h1></div>
			<div class="negro"></div>
			<div class="negro"><a href="trailers.php"><h3 align="center">Trailers</h3></a></div>
			<div class="negro"><a href="cartelera.php"><h3 align="center">Cartelera</h3></a></div>
			<div class="negro"><a href="login.html"><h3 align="center">Iniciar Sesión</h3></a></div>
			<div class="negro"></div>
		</div>
	</section>
	<section>

		<div class="separa"></div>
		<?php  if (isset($_SESSION['username'])) : ?>
			<p><h1 style="color: white; text-align: center; font-size: 35px">Bienvenido <strong><?php echo $_SESSION['username']; ?></strong></h1></p>
			<p> <a href="logout.php" style="color: white;">Cerrar Sesion</a> </p>
			<?php  
			$host_db = "localhost";
			$user_db = "root";
			$pass_db = "Conan@1234";
			$db_name = "registration";
			$tbl_name = "cartelera";
			$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
			if ($conexion->connect_error) {
				die("La conexion falló: " . $conexion->connect_error);
			}
			

			?>
			<?php
			for ($i = 0; $i <10; $i++) :
				$sql="SELECT * FROM $tbl_name WHERE id =100$i";
			$result = $conexion->query($sql);
			$row = $result->fetch_array(MYSQLI_ASSOC);
			?>
			<div class="pelicula" >
				<div></div>
				<div class="item2"><img width="100%" src="<?php echo $row['foto'] ?>"></div>
				<div></div>
				<div class="item3 fuente5"><h4><?php echo $row['nombre'] ?></h4> <h4><?php echo $row['hora'] ?><h4><?php echo $row['descripcion'] ?></h4></h4></div>
				
				<div class="item5 fuente5"></div>		
			</div>

		<div class="separa"></div>
		<?php endfor;?>


	<?php else :?>
<br>
<br>
<br>
	<h1 class="fuente1" style="color: white;" align="center">Registrate e Ingresa Antes de Ver nuestro contenido</h1>
	<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

	<?php endif ?>
	


</section>






<footer class="negro pie">
	<div>© Copyright,RJ45 Comunicación Entertainment/Movies</div>
	<div>Siguenos en Twiter</div>	
	<div>Contacto</div>
	<div></div>
	<div>@CultoCinema</div>
	<div>+5520129071</div>

</footer>
</body>

</html>