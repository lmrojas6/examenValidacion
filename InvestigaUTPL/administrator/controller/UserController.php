<?php
require_once "../models/User.php";
require_once "../repositorios/UserRepository.php";

class UserController {

  public function createUser(): bool {
    if (isset($_POST['nombres']) && isset($_POST['apellidos'])) {
      $nombres = $_POST['nombres'];
      $apellidos = $_POST['apellidos'];
      $correo = $_POST['correo'];
      $clave = md5($_POST['clave']);
      $tipoUser = intval($_POST['tipoUser']);


      $user = new User(nombres: $nombres, apellidos: $apellidos, correo: $correo, clave: $clave, tipoUser: $tipoUser);
      $res = UserRepository::CreateUser($user);
      return $res == 1;
    }
  }

  public function getUser($id) {
    $user = UserRepository::ObtenerUser($id);
    if ($user != null) {
      return $user;
    } else {
      return null;
    }
  }

  public function listUser(): array {
    $users = UserRepository::ListUser();
    return $users;
  }

  public function updateUser() {
    if (isset($_POST['nombres']) && isset($_POST['apellidos'])) {
      $id = intval($_POST['id']);
      $nombres = $_POST['nombres'];
      $apellidos = $_POST['apellidos'];
      $correo = $_POST['correo'];
      $clave = md5($_POST['clave']);
      $tipoUser = intval($_POST['tipoUser']);

      $user = new User($id, $nombres, $apellidos, $correo, $clave, $tipoUser);

      $res = UserRepository::ActualizarUser($user);
      return $res == 1;
    }
  }

  public function deleteUser() {
    if (isset($_POST['id'])) {
      $id = intval($_POST['id']);
      $res = UserRepository::EliminarUser($id);
      return $res == 1;
    }
  }
}