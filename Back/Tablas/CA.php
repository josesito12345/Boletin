<?php
class CA{
    private $idCA;
    private $idcurso;
    private $idasignatura;


public function __construct(
                    $idCA=0,
                    $idcurso=0,
                    $idasignatura=0){
    $this->idCA = $idCA;
    $this->idcurso = $idcurso;
    $this->idasignatura = $idasignatura;
}
public function getIdCA(){
    return $this->idCA;
}
public function setIdCA($idCA): void{
    $this->idCA = $idCA;
}
////////////////////////////////
public function getIdcurso(){
    return $this->idcurso;
}
public function setIdcurso($idcurso): void{
    $this->idcurso = $idcurso;
}
//////////////////////////////////////////
public function getIdasignatura(){
    return $this->idasignatura;
}
public function setIdasignatura($idasignatura): void{
    $this->idasignatura = $idasignatura;
}
}