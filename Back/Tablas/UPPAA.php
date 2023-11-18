<?php
class UPPAA{
    private $idUPPAA;
    private $dni;
    private $idprofesor;
    private $idpreceptor;
    private $idalumno;
    private $idadministrador;


public function __construct(
                    $idUPPAA=0,
                    $dni=0,
                    $idprofesor=0,
                    $idpreceptor=0,
                    $idalumno=0,
                    $idadministrador=0){
    $this->idUPPAA = $idUPPAA;
    $this->dni = $dni;
    $this->idprofesor = $idprofesor;
    $this->idpreceptor = $idpreceptor;
    $this->idalumno = $idalumno;
    $this->idadministrador = $idadministrador;
}
public function getIdUPPAA(){
    return $this->idUPPAA;
}
public function setIdUPPAA($idUPPAA): void{
    $this->idUPPAA = $idUPPAA;
}
///////////////////////////////////////////
public function getDni(){
    return $this->dni;
}
public function setDni($dni): void{
    $this->dni = $dni;
}
///////////////////////////////////////////
public function getIdprofesor(){
    return $this->idprofesor;
}
public function setIdprofesor($idprofesor): void{
    $this->idprofesor = $idprofesor;
}
//////////////////////////////////////////
public function getIdpreceptor(){
    return $this->idpreceptor;
}
public function setIdpreceptor($idpreceptor): void{
    $this->idpreceptor = $idpreceptor;
}
//////////////////////////////////////////
public function getIdalumno(){
    return $this->idalumno;
}
public function setIdalumno($idalumno): void{
    $this->idalumno = $idalumno;
}
////////////////////////////////////////////////
public function getIdadministrador(){
    return $this->idadministrador;
}
public function setIdadministrador($idadministrador): void{
    $this->idadministrador = $idadministrador;
}
}