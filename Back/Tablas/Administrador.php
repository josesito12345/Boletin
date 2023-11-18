<?php
class Administrador{
    private $idadministrador;
    private $nombre;
    private $apellido;
    private $dni;
    private $cuil;


public function __construct($idadministrador=0,
                            $nombre="",
                            $apellido="",
                            $dni=0,
                            $cuil=0){
    $this->idadministrador = $idadministrador;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->dni = $dni;
    $this->cuil = $cuil;}

    public function getIdadministrador(){
        return $this->idadministrador;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getDni(){
        return $this->dni;
    }
    public function getCuil(){
        return $this->cuil;
    }

    public function setIdadmin($idadministrador): void{
        $this->idadministrador = $idadministrador;
    }

    public function setNombre($nombre): void{
        $this->nombre = $nombre;
    }
    public function setApellido($apellido): void{
        $this->apellido = $apelldio;
    }
    public function setDni($dni): void{
        $this->dni = $dni;
    }
    public function setCuil($cuil): void{
        $this->cuil = $cuil;
    }}