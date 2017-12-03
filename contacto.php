<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Cupcakes JR</title>
	<meta name="descripcion" content="El mundo de los Cupcakes, es una experiencia única que no te arrepentirás">
	<meta name="keywords" content="cupcakes Jessy, Cupcakes, masa elástica, pasteles, pastelitos">
	<link rel="icon" type="image/png" href="img/J.png" />
	<!--fuente desde google fonts/PT Serif-->
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet">
	<link href="css/03-contenido.css" rel="stylesheet">
</head>
<body>
	<img src="img/foto-fondo.jpg" alt="Cupcakes con Jessy" id="fondoGeneral">
	<!-- bloqueGeneral -->
	<div id="bloqueGeneral">
		<!-- /////////////////
		     BLOQUE IZQUIERDO
		     ///////////////// -->
		<div id="bloqueIzq">
			<header>
				<hgroup>
					<!--<h1><a href="index.php">Cupcakes con Jessy</a></h1>
					<h2>Dulzura hecha manjar</h2>-->
					<h1><a href="index.php">Cupcakes</a></h1>
					<h2>con Jessy</h2>
				</hgroup><!-- hgroup -->

				<nav>
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="preparaciones.php">Preparaciones</a></li>
						<li><a href="eventos.php">Eventos</a></li>
						<li><a href="galeria.php">Galería</a></li>
						<li><a href="locales.php">Ubícanos</a></li>
						<li class="actual"><a href="contacto.php">Contacto</a></li>
					</ul>
				</nav><!-- nav -->
			</header><!-- header -->

				<aside>
					<div id="pedidos">
						Haga sus pedidos al <span>(+51-1)933-901-071</span>
					</div>
				</aside><!-- aside -->
			
		</div><!-- end#bloqueIzq-->

		<!-- /////////////////
		     BLOQUE DERECHO
		     ///////////////// -->
		<div id="bloqueDer">
			<div id="contenido" class="pagina-interna">
				<section id="contacto">
					<article>
						<header>
							<img src="img/contacto.jpg" alt="Contacto">
							<hgroup>
								<h1>Contacto</h1>
								<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
									incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
									exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
									 dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
									  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
									  mollit anim id est laborum.</h2>
							</hgroup>
						</header>
						<!--Formulario de contacto-->
						<form method="post" action="php/enviarmail.php">
							<div class="col3">
								<label for="nombre">Nombre:</label>
								<input type="text" name="nombre" id="nombre">
							</div>

							<div class="col3">
								<label for="email">E-mail:</label>
								<input type="text" name="email" id="email">
							</div>

							<div class="col3">
								<label for="telefono">Teléfono:</label>
								<input type="text" name="telefono" id="telefono">
							</div>

							<label for="mensaje">Mensaje:</label>
							<textarea id="mensaje" name="mensaje"></textarea>

							<input type="submit" id="btnSubmit" value="Enviar">

						</form>
						
				
			</div><!-- end#contenido -->

			<footer>
				<div class="logoFooter"><img src="img/logoFooter.png" alt="Cupcakes con Jessy"></div>
				<div class="copyRightFooter">
					<p>Sitio diseñado y desarrollado por <a href="https://www.facebook.com/ronald.ortegatrujillo">Ronald H. Ortega Trujillo</a></p>
					<p>&copy; 2017 Cupcakes con Jessy </p>
				</div>
			</footer><!-- footer -->
		</div><!-- end#bloqueDer-->

	</div><!-- end#bloqueGeneral -->


</body>
</html>