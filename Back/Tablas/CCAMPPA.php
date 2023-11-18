<?php
class UPPA{
    private $idCCAMPPA;
    private $idcalificacion;
    private $idcurso;
    private $idalumno;
    private $idmodalidad;
    private $idpreceptor;
    private $idprofesor;
    private $idasignatura;


public function __construct(
                    $idCCAMPPA=0,
                    $idcalificacion=0,
                    $idcurso=0,
                    $idalumno=0,
                    $idmodalidad=0,
                    $idpreceptor=0,
                    $idprofesor=0,
                    $idasignatura=0){
    $this->idCCAMPPA = $idCCAMPPA;
    $this->idcalificacion = $idcalificacion;
    $this->idcurso = $idcurso;
    $this->idalumno = $idalumno;
    $this->idmodalidad = $idmodalidad;
    $this->idpreceptor = $idpreceptor;
    $this->idprofesor = $idprofesor;
    $this->idasignatura = $idasignatura;
}
public function getIdCCAMPPA(){
    return $this->idCCAMPPA;
}
public function setIdCCAMPPA($idCCAMPPA): void{
    $this->idCCAMPPA = $idCCAMPPA;
}
///////////////////////////////////////////
public function getIdcalificacion(){
    return $this->idcalificacion;
}
public function setIdcalificacion($idcalificacion): void{
    $this->idcalificacion = $idcalificacion;
}
//////////////////////////////////////////
public function getIdcurso(){
    return $this->idcurso;
}
public function setIdcurso($idcurso): void{
    $this->idcurso = $idcurso;
}
//////////////////////////////////////////
public function getIdalumno(){
    return $this->idalumno;
}
public function setIdalumno($idalumno): void{
    $this->idalumno = $idalumno;
}
//////////////////////////////////////////
public function getIdmodalidad(){
    return $this->idmodalidad;
}
public function setIdmodalidad($idmodalidad): void{
    $this->idmodalidad = $idmodalidad;
}
//////////////////////////////////////////
public function getIdpreceptor(){
    return $this->idpreceptor;
}
public function setIdpreceptor($idpreceptor): void{
    $this->idpreceptor = $idpreceptor;
}

///////////////////////////////////////////
public function getIdprofesor(){
    return $this->idprofesor;
}
public function setIdprofesor($idprofesor): void{
    $this->idprofesor = $idprofesor;
}
//////////////////////////////////////////
public function getIdasignatura(){
    return $this->idasignatura;
}
public function setIdasignatura($idasignatura): void{
    $this->idasignatura = $idasignatura;
}
}