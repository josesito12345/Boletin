<?php

class Asignatura{
            private $idasignatura;
            private $nombre;


public function __construct(
                        $idasignatura=0,
                        $nombre=""){
$this->idasignatura = $idasignatura;
$this->nombre = $nombre;}

public function getIdasignatura(){
    return $this->idasignatura;
}
public function setIdasignatura($idasignatura): void{
    $this->idasignatura = $idasignatura;
}
///////////////////////////////////////////////////
public function getNombre(){
    return $this->nombre;
}
public function setNombre($nombre): void{
    $this->nombre = $nombre;
}}