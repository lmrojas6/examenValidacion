<?php
require_once "./header.php";
require_once "../controller/UserController.php";

$id = intval($_GET['id']);
$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
  $userController = new UserController();
  $res = $userController->deleteUser();
  if ($res) {
    echo '<script>alert("Usuario eliminado correctamente");</script>';
  } else {
    echo '<script>alert("Error al eliminar el usuario");</script>';
  }
  echo "<script>location.href='../views/user.php'</script>";
}
?>

<h1>Desea eliminar el usuario <?php echo $id ?></h1>
<form action="" method="post">
  <input type="hidden" name="id" value="<?php echo $id ?>">
  <button type="submit" value="Eliminar">Eliminar</button>
</form>

<a href="user.php"><button>Cancelar</button></a>

<?php require_once "./footer.php"; ?>