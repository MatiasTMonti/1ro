<?php


class actor{
  private $id;
  private $nombre;
  private $apellido;
  private $edad;

  public function __construct($id ,$nombre, $apellido, $peliculas)
  {
    $this->id= $id;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->peliculas = $peliculas;
  }

 public function setNombre($nombre)
 {
   $this->nombre = $nombre;
 }
 public function getNombre()
 {
   return $this->nombre;
 }
 public function setApellido($apellido)
 {
   $this->apellido = $apellido;
 }
 public function getApellido()
 {
   return $this->apellido;
 }
 public function setPeliculas($peliculas)
 {
   $this->peliculas = $peliculas;
 }
 public function getPeliculas()
 {
   return $this->peliculas;
 }
 public function setId($id)
 {
   $this->id = $id;
 }
 public function getEdad()
 {
   return $this->id;
 }
}
