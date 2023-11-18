<?php
class Ciclo{
    private $idciclo;
    private $ciclo;
    private $fecha_ini;
    private $fecha_fin;

 public function __construct(
                        $idciclo=0,
                        $ciclo=0,
                        $fecha_ini="",
                        $fecha_fin=""){

$this->idciclo = $idciclo;
$this->ciclo = $ciclo;
$this->fecha_ini = $fecha_ini;
$this->fecha_fin = $fecha_fin;}

public function getIdciclo(){
    return $this->idciclo;
}
public function setIdciclo($idciclo): void{
    $this->idciclo = $idciclo;
}
/////////////////////////////////////////////////
public function getCiclo(){
    return $this->ciclo;
}
public function setCiclo($ciclo): void{
    $this->ciclo = $ciclo;
}
/////////////////////////////////////////
public function getFecha_ini(){
    return $this->fecha_ini;
}
public function setFecha_ini($fecha_ini): void{
    $this->fecha_ini = $fecha_ini;
}
//////////////////////////////////////////////
public function getFecha_fin(){
    return $this->fecha_fin;
}
public function setFecha_fin($fecha_fin): void{
    $this->fecha_fin = $fecha_fin;
}}