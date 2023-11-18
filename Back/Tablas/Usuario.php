<?php
class Usuario{
    private $dni;
    private $password;
    private $nombre;
    private $email;
    private $telefono;
    private $permiso;


public function __construct(
                        $dni=0,
                        $password="",
                        $nombre="",
                        $email="",
                        $telefono=0,
                        $permiso=0){

$this->dni = $dni;
$this->password = $password;
$this->nombre = $nombre;
$this->email = $email;
$this->telefono = $telefono;
$this->permiso = $permiso;

                        }


public function getDni(){
    return $this->dni;
}
public function setDni($dni): void{
    $this->dni = $dni;
}
//////////////////////////////////////////////
/////////////////////////////////////////////////////
public function getPassword(){
    return $this->password;
}
public function setPassword($password): void{
    $this->password = $password;
}
/////////////////////////////////////////////////////
public function getNombre(){
    return $this->nombre;
}
public function setNombre($nombre): void{
    $this->nombre = $nombre;
}
////////////////////////////////////////////
////////////////////////////////////////////
public function getEmail(){
    return $this->email;
}
public function setEmail($email): void{
    $this->email = $email;
}
///////////////////////////////////////////
public function getTelefono(){
    return $this->telefono;
}
public function setTelefono($telefono): void{
    $this->telefono = $telefono;
}
/////////////////////////////////////////////
public function getPermiso(){
    return $this->permiso;
}
public function setPermiso($permiso): void{
    $this->permiso = $permiso;
}
}