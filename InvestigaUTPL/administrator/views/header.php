<?php
include("../seguridad/seguridad.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Innova 2022</title>
  <link rel="stylesheet" type="text/css" href="../css/estilosAdmin.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />
  <link rel="icon" href="../images/fastfood.jpg" sizes="192x192" />
  <link rel="apple-touch-icon" href="../images/icnbl.png" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

<body>
  <header class="cabeceraPrincipal">
    <section class="logoCabecera">
      <img src="../images/logo.png" alt="Logo" width="80" height="80"> 
      <h1>Innova 2022</h1> 
    </section>
    <section class="widgetsCabecera">
      <h5><a href="../seguridad/exit.php?salir=true">Cerrar sesion</a></h5><BR>
      <h5>Bienvenido:  <?php echo $_SESSION['username']; ?></h5>
    </section>
  </header>
  <section class="contenedorPrincipal">
    <nav class="menuAdmin">
      <a href="dashboard.php">Dahsboard</a>
      <a href="user.php">Usuarios</a>
      <div class="espacioMenu">&nbsp;</div>
      <a href="">Perfil</a>
      <a href="../seguridad/exit.php?salir=true">Cerrar session</a>
    </nav>
    <section class="contenidoPrinipal">