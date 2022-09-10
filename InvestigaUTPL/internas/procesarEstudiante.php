<?php
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$tipo = 'Estudiante';
$pago = 0;

$miconexion = new ClaseMysqli;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql = "insert into participantes (nombres, apellidos, cedula, correo, direccion, telefono, pais, ciudad, institucion, tipo, pago) values ('$nombres', '$apellidos', '$cedula', '$correo', '$direccion', '$telefono', '$pais', '$ciudad', '$institucion', '$tipo', '$pago')";
$resSql = $miconexion->consulta($sql);
if (!$resSql) {
  echo '<script>alert("SQL Incorrectos...");</script>';
  echo "<script>location.href='registro.php'</script>";
} else {
  echo '<script>alert("SQL correctos :)...");</script>';
  echo "<script>location.href='registro.php'</script>";
}
?>