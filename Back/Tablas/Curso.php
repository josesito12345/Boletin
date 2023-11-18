<?php

class Curso{
    private $idcurso;
    private $año;
    private $division;


public function __construct(
                        $idcurso=0,
                        $año=0,
                        $division=""){

$this->idcurso = $idcurso;
$this->año = $año;
$this->division = $division;}

public function getIdcuro(){
    return $this->idcurso;
}
public function setIdcurso($idcurso): void{
    $this->idcurso = $idcurso;
}
/////////////////////////////////////////////////
public function getAño(){
    return $this->año;
}
public function setAño(): void{
    $this->año = $año;
}
/////////////////////////////////////////////////
public function getDivision(){
    return $this->division = $division;
}
public function setDivision(): void{
    $this->division = $division;
}}