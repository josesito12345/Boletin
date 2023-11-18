<?php

class Modalidad{
        private $idmodalidad;
        private $nombre;

 public function __construct(
                        $idmodalidad=0,
                        $nombre=""){
$this->idmodalidad = $idmodalidad;
$this->nombre = $nombre;}

public function getIdmodalidad(){
    return $this->idmodalidad = $idmodalidad;
}
public function setIdmodalidad($idmodalidad): void{
    $this->idmodalidad = $idmodalidad;
}
//////////////////////////////////////////////////////
public function getNombre(){
    return $this->nombre;
}
public function setNombre($nombre): void{
    $this->nombre = $nombre;
}}