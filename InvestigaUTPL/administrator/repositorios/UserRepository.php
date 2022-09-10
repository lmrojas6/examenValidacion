<?php
include_once "../../dll/class_mysqli.php";
include_once "../models/User.php";

class UserRepository {

  public static function ObtenerUser(int $id): ?User {
    $miconexion = new ClaseMysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("SELECT * FROM participantes WHERE id = '$id'");
    $row = $resSQL->fetch_assoc();

    if ($row) {
      return new User(intval($row['id']), $row['nombres'], $row['apellidos'], $row['correo'], $row['clave'], intval($row['tipoUsuario']));
    } else {
      return null;
    }
  }

  
  public static function ListUser(): array {
    $miconexion = new ClaseMysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("SELECT id, nombres, apellidos, cedula, correo, direccion, telefono, pais, ciudad, institucion, tipo, pago FROM participantes");
    $rows = $resSQL->fetch_all(MYSQLI_ASSOC);
    $users = [];

      foreach ($rows as $row) {
      $users[] = new User(intval($row['id']), nombres: $row['nombres'], apellidos: $row['apellidos'], cedula: $row['cedula'], correo: $row['correo'], direccion: $row['direccion'], telefono: $row['telefono'], pais: $row['pais'], ciudad: $row['ciudad'], institucion: $row['institucion'], tipo: $row['tipo'], pago: intval($row['pago']));
    }
    return $users;
  }

  public static function CreateUser(User $usuario): int {
    $miconexion = new ClaseMysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("INSERT INTO participantes (nombres, apellidos, cedula, correo, direccion, telefono, pais, ciudad, institucion, tipo, pago) VALUES('{$usuario->getApellidos()}', '{$usuario->getCedula()}', '{$usuario->getCorreo()}', '{$usuario->getDireccion()}', '{$usuario->getTelefono()}', '{$usuario->getPais()}', '{$usuario->getCiudad()}', '{$usuario->getInstitucion()}', '{$usuario->getTipo()}', '{$usuario->getPago()}')");
    return $resSQL;
  }

  public static function ActualizarUser(User $usuario): int {
    $miconexion = new ClaseMysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("UPDATE participantes SET nombres='{$usuario->getNombres()}', apellidos='{$usuario->getApellidos()}', correo='{$usuario->getCorreo()}'");
    return $resSQL;
  }
  public static function EliminarUser(int $id): int {
    $miconexion = new ClaseMysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL = $miconexion->consulta("DELETE FROM participantes WHERE id='$id'");
    return $resSQL;
  }
}