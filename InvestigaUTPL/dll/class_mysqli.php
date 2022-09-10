<?php

class ClaseMysqli {
  var $BaseDatos;
  var $Servidor;
  var $Usuario;
  var $Clave;
  var $Errno = 0;
  var $Error = "";
  var $Conexion_ID = 0;
  var $Consulta_ID = 0;

  function ClaseMysqli($host = "", $user = "", $pass = "", $db = "") {
    $this->BaseDatos = $db;
    $this->Servidor = $host;
    $this->Usuario = $user;
    $this->Clave = $pass;
  }

  function conectar($host, $user, $pass, $db) {
    if ($db != "") $this->BaseDatos = $db;
    if ($host != "") $this->Servidor = $host;
    if ($user != "") $this->Usuario = $user;
    if ($pass != "") $this->Clave = $pass;
    $this->Conexion_ID = new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
    if (!$this->Conexion_ID) {
      $this->Error = "Ha fallado la conexion";
      return 0;
    }
    return $this->Conexion_ID;
  }

  function consulta($sql = "") {
    if ($sql == "") {
      $this->Error = "NO hay ninguna sentencia sql";
      return 0;
    }
    $this->Consulta_ID = mysqli_query($this->Conexion_ID, $sql);

    if (!$this->Consulta_ID) {
      print $this->Conexion_ID->error;
    }
    return $this->Consulta_ID;
  }

  function numcampos() {
    return mysqli_num_fields($this->Consulta_ID);
  }

  function numregistros() {
    return mysqli_num_rows($this->Consulta_ID);
  }

  function verconsulta() {
    echo "<table class='tablecud'>";
    echo "<tr>";
    for ($i = 0; $i < $this->numcampos(); $i++) {
      echo "<td>" . mysqli_fetch_field_direct($this->Consulta_ID, $i)->name . "</td>";
    }
    echo "</tr>";
    while ($row = mysqli_fetch_array($this->Consulta_ID)) {
      echo "<tr>";
      for ($i = 0; $i < $this->numcampos(); $i++) {
        echo "<td>" . $row[$i] . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }

  function verconsultacrud() {
    echo "<table class='tablecud'>";
    echo "<tr>";
    for ($i = 0; $i < $this->numcampos(); $i++) {
      echo "<td>" . mysqli_fetch_field_direct($this->Consulta_ID, $i)->name . "</td>";
    }
    echo "<td>Borrar</td>";
    echo "<td>Actualizar</td>";
    echo "</tr>";
    while ($row = mysqli_fetch_array($this->Consulta_ID)) {
      echo "<tr>";
      for ($i = 0; $i < $this->numcampos(); $i++) {
        echo "<td>" . $row[$i] . "</td>";
      }
      echo "<td><a href='#'>Borrar</a></td>";
      echo "<td><a href='#'>Actualizar</a></td>";
      echo "</tr>";
    }
    echo "</table>";
  }

  function consulta_lista() {
    while ($row = mysqli_fetch_array($this->Consulta_ID)) {
      for ($i = 0; $i < $this->numcampos(); $i++) {
        $row[$i];
      }
      return $row;
    }
  }

  function consulta_json() {
    while ($row = mysqli_fetch_array($this->Consulta_ID)) {
      $data[] = $row;
    }
    echo json_encode(["sensores" => $data]);
  }

  function consulta_busqueda_json() {
    if ($this->numcampos() > 0) {
      while ($row = mysqli_fetch_array($this->Consulta_ID)) {
        $data[] = $row;
      }
      $resultData = ['status' => true, 'postData' => $data];
    } else {
      $resultData = ['status' => false, 'message' => 'No Post(s) Found...'];
    }

    echo json_encode($resultData);
  }

}

?>