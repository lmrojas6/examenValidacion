<?php
include("header.php");
require_once "../controller/UserController.php"

?>

<main class="contenido-principal">
  <h1>Panel administrativo Innova UTPL 2022</h1>

  <?php
  $userCtrl = new UserController();
  $users = $userCtrl->listUser();
  $registrados = 0;
  $profesionales = 0;
  $estudiantes = 0;
  foreach ($users as $user) {
    $registrados = $registrados + 1;
    if (strcmp($user->getTipo(), 'Estudiante') === 0) {
      $estudiantes = $estudiantes  + 1;
    } else {
      $profesionales = $profesionales  + 1;
    }
  }
  ?>
  <hr style="height: 5px; background: #003f72">
  <h2>Participantes registrados: <?= $registrados ?></h2>
  <h2>Total de estudiantes registrados: <?= $estudiantes ?></h2>
  <h2>Total de profesionalesregistrados: <?= $profesionales ?></h2>
  <hr style="height: 5px; background: #003f72">
  <h1>Listado de participantes con pago pendiente</h1>

  <table>
    <thead>
      <tr>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cedula</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Tipo</th>
        <th>Pago</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $userCtrl = new UserController();
      $users = $userCtrl->listUser();
      foreach ($users as $user) {
        if ($user->getPago() == 0) {
          echo "<tr>";
          echo "<td>" . $user->getNombres() . "</td>";
          echo "<td>" . $user->getApellidos() . "</td>";
          echo "<td>" . $user->getCedula() . "</td>";
          echo "<td>" . $user->getCorreo() . "</td>";
          echo "<td>" . $user->getTelefono() . "</td>";
          echo "<td>" . $user->getTipo() . "</td>";
          if ($user->getPago() == 0) {
            echo "<td> Pendiente </td>";
          }
          echo "</tr>";
        }
      }
      ?>
    </tbody>
  </table>

</main>

<?php
include("footer.php");
?>