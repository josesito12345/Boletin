<?php
class Profesor{
    private $idprofesor;
    private $nombre;
    private $apellido;
    private $dni;
    private $cuil;


public function __construct(
                            $idprofesor=0,
                            $nombre="",
                            $apellido="",
                            $dni=0,
                            $cuil=0,){
$this->idprofesor = $idprofesor;
$this->nombre = $nombre;
$this->apellido = $apellido;
$this->dni = $dni;
$this->cuil = $cuil;}

public function getIdprofesor(){
    return $this->idprofesor;
}
public function setIdprofesor($idprofesor): void{
    $this->idprofesor = $idprofesor;
}
////////////////////////////////////////////////////
public function getNombre(){
    return $this->nombre;
}
public function setNombre($nombre): void{
    $this->nombre = $nombre;
}
///////////////////////////////////////////////////
public function getApellido(){
    return $this->apellido;
}
public function setApellido($apellido): void{
    $this->apellido = $apellido;
}
//////////////////////////////////////////////////
public function getDni(){
    return $this->dni;
}
public function setDni($dni): void{
    $this->dni = $dni;
}
//////////////////////////////////////////////
public function getCuil(){
    return $this->cuil;
}
public function setCuil($cuil): void{
    $this->cuil = $cuil;
}}