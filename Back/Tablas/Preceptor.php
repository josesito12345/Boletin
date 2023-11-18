<?php
class Preceptor{
    private $idpreceptor;
    private $nombre;
    private $apellido;
    private $dni;
    private $cuil;
    


public function __construct(
                $idpreceptor=0,
                $nombre="",
                $apellido="",
                $dni=0,
                $cuil=0){
$this->idpreceptor = $idpreceptor;
$this->nombre = $nombre;
$this->apellido = $apellido;
$this->dni = $dni;
$this->cuil = $cuil;
}

public function getIdpreceptor(){
    return $this->idpreceptor;
}
public function setIdpreceptor($idpreceptor): void{
    $this->idpreceptor = $idpreceptor;
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
}
}