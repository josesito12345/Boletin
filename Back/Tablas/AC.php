<?php
class AC{
    private $idAC;
    private $idalumno;
    private $idcurso;


public function __construct(
                    $idAC=0,
                    $idalumno=0,
                    $idcurso=0){
    $this->idAC = $idAC;
    $this->idalumno = $idalumno;
    $this->idcurso = $idcurso;
}
public function getIdAC(){
    return $this->idAC;
}
public function setIdAC($idAC): void{
    $this->idAC = $idAC;
}
//////////////////////////////////////////
public function getIdalumno(){
    return $this->idalumno;
}
public function setIdalumno($idalumno): void{
    $this->idalumno = $idalumno;
}
////////////////////////////////////////////
public function getIdcurso(){
    return $this->idcurso;
}
public function setIdcurso($idcurso): void{
    $this->idcurso = $idcurso;
}
}