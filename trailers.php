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
	<?php  if (isset($_SESSION['username'])) : ?>
		<div class="separa"></div>
		<p><h1 style="color: white; text-align: center; font-size: 35px">Bienvenido <strong><?php echo $_SESSION['username']; ?></strong></h1></p>
		<div><p> <a href="logout.php" style="color: white;">Cerrar Sesion</a> </p>
		<p><h1 style="color: white; text-align: center; font-size: 35px">Verano 1993<strong></strong></h1></p>
		
		<div class="trailer">
			<div></div>
			<div >
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/bLcK0H3YR_Y" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			<div></div>
		</div>

		<p><h1 style="color: white; text-align: center; font-size: 35px">Hogar<strong></strong></h1></p>
		
		<div class="trailer">
			<div></div>
			<div >
			<iframe width="100%" height="315" src="https://www.youtube.com/embed/_c8TG4s4_tQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>
			<div></div>
		</div>

		
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
		<br>
		<br>
		<br>
	<?php endif ?>
	

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