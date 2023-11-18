<?php
class Calificacion{
        private $idcalificacion;
        private $fecha;
        private $observacion;
        private $calificacion;
        private $trimestre;

public function __construct(
                    $idcalificacion=0,
                    $fecha="",
                    $observacion="",
                    $calificacion=0,
                    $trimestre=""){

$this->idcalificacion = $idcalificacion;
$this->fecha = $fecha;
$this->observacion = $observacion;
$this->calificacion = $calificacion;
$this->trimestre = $trimestre;}

public function getIdcalificacion(){
    return $this->idcalificacion = $idcalificacion;
}
public function setIdcalificacion($idcalificacion): void{
    $this->idcalificacion = $idcalificacion;
}
//////////////////////////////////////////////////////////////
public function getFecha(){
    return $this->fecha = $fecha;
}
public function setFecha($fecha): void{
    $this->fecha = $fecha;
}
////////////////////////////////////////////
public function getObservacion(){
    return $this->observacion = $observacion;
}
public function setObservacion($observacion): void{
    $this->observacion = $observacion;
}
////////////////////////////////////////////////////////
public function getCalificacion(){
    return $this->calificacion = $calificacion;
}
public function setCalificacion($calificacion): void{
    $this->calificacion = $calificacion;
}
/////////////////////////////////////////////////////////
public function getTrimestre(){
    return $this->trimestre = $trimestre;
}
public function setTrimestre($trimestre): void{
    $this->trimestre = $trimestre;
}
}