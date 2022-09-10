<?php

class User
{
  private int $id;
  private string $nombres;
  private string $apellidos;
  private string $cedula;
  private string $correo;
  private string $direccion;
  private string $telefono;
  private string $pais;
  private string $ciudad;
  private string $institucion;
  private string $tipo;
  private int $pago;


  public function __construct(int $id = 0, string $nombres = "", string $apellidos = "", string $cedula = "",string $correo = "",string $direccion = "",string $telefono = "",string $pais = "",string $ciudad = "",string $institucion = "",string $tipo = "",int $pago = 0)
  {
    $this->id = $id;
    $this->nombres = $nombres;
    $this->apellidos = $apellidos;
    $this->cedula = $cedula;
    $this->correo = $correo;
    $this->direccion = $direccion;
    $this->telefono = $telefono;
    $this->pais = $pais;
    $this->ciudad = $ciudad;
    $this->institucion = $institucion;
    $this->tipo = $tipo;
    $this->pago = $pago;
  }

  #region Set y Get

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @param int $id
   */
  public function setId(int $id): void
  {
    $this->id = $id;
  }

  /**
   * @return string
   */
  public function getNombres(): string
  {
    return $this->nombres;
  }

  /**
   * @param string $nombres
   */
  public function setNombres(string $nombres): void
  {
    $this->nombres = $nombres;
  }

  /**
   * @return string
   */
  public function getApellidos(): string
  {
    return $this->apellidos;
  }

  /**
   * @param string $apellidos
   */
  public function setApellidos(string $apellidos): void
  {
    $this->apellidos = $apellidos;
  }

  /**
   * @return string
   */
  public function getCedula(): string
  {
    return $this->cedula;
  }

  /**
   * @param string $cedula
   */
  public function setCedula(string $cedula): void
  {
    $this->cedula = $cedula;
  }

  /**
   * @return string
   */
  public function getCorreo(): string
  {
    return $this->correo;
  }

  /**
   * @param string $correo
   */
  public function setCorreo(string $correo): void
  {
    $this->correo = $correo;
  }

  /**
   * @return string
   */
  public function getDireccion(): string
  {
    return $this->direccion;
  }

  /**
   * @param string $direccion
   */
  public function setDireccion(string $direccion): void
  {
    $this->direccion = $direccion;
  }

  /**
   * @return string
   */
  public function getTelefono(): string
  {
    return $this->telefono;
  }

  /**
   * @param string $telefono
   */
  public function setTelefono(string $telefono): void
  {
    $this->telefono = $telefono;
  }

  /**
   * @return string
   */
  public function getPais(): string
  {
    return $this->pais;
  }

  /**
   * @param string $pais
   */
  public function setPais(string $pais): void
  {
    $this->pais = $pais;
  }

  /**
   * @return string
   */
  public function getCiudad(): string
  {
    return $this->ciudad;
  }

  /**
   * @param string $ciudad
   */
  public function setCiudad(string $ciudad): void
  {
    $this->ciudad = $ciudad;
  }

  /**
   * @return string
   */
  public function getInstitucion(): string
  {
    return $this->institucion;
  }

  /**
   * @param string $institucion
   */
  public function setInstitucion(string $institucion): void
  {
    $this->institucion = $institucion;
  }

  /**
   * @return string
   */
  public function getTipo(): string
  {
    return $this->tipo;
  }

  /**
   * @param string $tipo
   */
  public function setTipo(string $tipo): void
  {
    $this->tipo = $tipo;
  }

  /**
   * @return int
   */
  public function getPago(): int
  {
    return $this->pago;
  }

  /**
   * @param int $pago
   */
  public function setPago(int $pago): void
  {
    $this->pago = $pago;
  }

}
