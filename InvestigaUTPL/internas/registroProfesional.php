<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Investiga UTPL 2022</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>

<body>
	<div class="headerContainer">
		<header class="cabprinci">
			<h1>Investiga UTPL 2022</h1>
		</header>
		<nav class="menuprinci">
			<a href="../">Inicio</a>
			<a href="registro.php">Registro</a>
			<a href="login.php">Login</a>
		</nav>
	</div>
	<hr>
	
	<main>
		<div class="boxCentrado">
		<h2 class="h2Login">Profesionales</h2>
		<form method="post" action="procesarProfesional.php">
			<div class="grupoInput">
				<label for="nombres">Nombres</label>
				<input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres">
			</div>
			<div class="grupoInput">
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos">
			</div>
			<div class="grupoInput">
				<label for="cedula">Cédula</label>
				<input type="text" name="cedula" id="cedula" placeholder="Ingrese su cédula">
			</div>
			<div class="grupoInput">
				<label for="correo">Correo</label>
				<input type="email" name="correo" id="correo" placeholder="Ingrese su correo">
			</div>
			<div class="grupoInput">
				<label for="direccion">Dirección</label>
				<input type="text" name="direccion" id="direccion" placeholder="Ingrese su Direccion">
			</div>
			<div class="grupoInput">
				<label for="telefono">Télefono</label>
				<input type="text" name="telefono" id="telefono" placeholder="Ingrese su télefono">
			</div>
			<div class="grupoInput">
				<label for="pais">País</label>
				<input type="text" name="pais" id="pais" placeholder="Ingrese su país">
			</div>
			<div class="grupoInput">
				<label for="ciudad">Ciudad</label>
				<input type="text" name="ciudad" id="ciudad" placeholder="Ingrese su ciudad">
			</div>
			<div class="grupoInput">
			 <button type="submit" value="Procesar" class="btn-submit">Registrar</button>
			</div>
		</form>
		</div>
	</main>
	<footer class="piepag"><h6>Derechos Reservados 2022</h6></footer>
</body>
</html>