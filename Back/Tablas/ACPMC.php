<?php
class ACPMC{
    private $idACPMC;
    private $idalumno;
    private $idcurso;
    private $idpreceptor;
    private $idmodalidad;
    private $idciclo;


public function __construct(
                    $idACPMC=0,
                    $idalumno=0,
                    $idcurso=0,
                    $idpreceptor=0,
                    $idmodalidad=0,
                    $idciclo=0){
    $this->idACPMC = $idACPMC;
    $this->idalumno = $idalumno;
    $this->idusuario = $idcurso;
    $this->idpreceptor = $idpreceptor;
    $this->idprofesor = $idmodalidad;
    $this->idciclo = $idciclo;
}
public function getIdACPMC(){
    return $this->idACPMC;
}
public function setIdACPMC($idACPMC): void{
    $this->idACPMC = $idACPMC;
}
//////////////////////////////////////////
public function getIdalumno(){
    return $this->idalumno;
}
public function setIdalumno($idalumno): void{
    $this->idalumno = $idalumno;
}
//////////////////////////////////////////
public function getIdcurso(){
    return $this->idcurso;
}
public function setIdcurso($idcurso): void{
    $this->idcurso = $idcurso;
}
//////////////////////////////////////////
public function getIdpreceptor(){
    return $this->idpreceptor;
}
public function setIdpreceptor($idpreceptor): void{
    $this->idpreceptor = $idpreceptor;
}
///////////////////////////////////////////
public function getIdmodalidad(){
    return $this->idmodalidad;
}
public function setIdmodalidad($idmodalidad): void{
    $this->idmodalidad = $idmodalidad;
}
///////////////////////////////////////////
public function getIdciclo(){
    return $this->idciclo;
}
public function setIdciclo($idciclo): void{
    $this->idciclo = $idciclo;
}
}