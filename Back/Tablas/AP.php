<?php
class AP{
    private $idAP;
    private $idalumno;
    private $idpreceptor;


public function __construct(
                    $idAP=0,
                    $idalumno=0,
                    $idpreceptor=0){
    $this->idAP = $idAP;
    $this->idalumno = $idalumno;
    $this->idpreceptor = $idpreceptor;
}
public function getIdAP(){
    return $this->idAP;
}
public function setIdAP($idAP): void{
    $this->idAP = $idAP;
}
////////////////////////////////
public function getIdalumno(){
    return $this->idalumno;
}
public function setIdalumno($idalumno): void{
    $this->idalumno = $idalumno;
}
//////////////////////////////////////////
public function getIdpreceptor(){
    return $this->idpreceptor;
}
public function setIdpreceptor($idpreceptor): void{
    $this->idpreceptor = $idpreceptor;
}
}