<?php
class MC{
    private $idMC;
    private $idmodalidad;
    private $idcurso;


public function __construct(
                    $idMC=0,
                    $idmodalidad=0,
                    $idcurso=0){
    $this->idMC = $idMC;
    $this->idmodalidad = $idmodalidad;
    $this->idcurso = $idcurso;
}
public function getIdMC(){
    return $this->idMC;
}
public function setIdMC($idMC): void{
    $this->idMC = $idMC;
}
////////////////////////////////
public function getIdmodalidad(){
    return $this->idmodalidad;
}
public function setIdmodalidad($idmodalidad): void{
    $this->idmodalidad = $idmodalidad;
}
//////////////////////////////////////////
public function getIdcurso(){
    return $this->idcurso;
}
public function setIdcurso($idcurso): void{
    $this->idcurso = $idcurso;
}
}