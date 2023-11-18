<?php
/*
require_once '../Interface/IAdministradorDAO.php';
require_once '../Tablas/Administrador.php';
require_once '../Configuracion/DataSourceB.php';
*/
class AdministradorDAO implements IAdministradorDAO{
    private static $instancia;
    private $ds;
    private function __construct(){
    }
    public static function getInstancia(){
        if (is_null(self::$instancia)){
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function select(){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Administrador");
        $administrador = null;
        $administradores = array();
        foreach ($rs as $clave => $valor){
            $administrador = new Administrador();
            $administrador->setIdadministrador($rs[$clave]["idadministrador"]);
            $administrador->setNombre($rs[$clave]["nombre"]);
            $administrador->setApellido($rs[$clave]["apellido"]);
            $administrador->setDni($rs[$clave]["dni"]);
            $administrador->setCuil($rs[$clave]["cuil"]);
            array_push($administradores,$administrador);
        }
        return $administradores;
    }
    public function selectById($id){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Administrador WHERE idadministrador=:idadministrador",array(":idadministrador"=>$id));
        $administrador = null;
        if(count($rs)==1){
            foreach ($rs as $clave => $valor){
                $administrador->setIdadministrador($rs[$clave]["idadministrador"]);
                $administrador->setNombre($rs[$clave]["nombre"]);
                $administrador->setApellido($rs[$clave]["apellido"]);
                $administrador->setDni($rs[$clave]["dni"]);
                $administrador->setCuil($rs[$clave]["cuil"]);
            }
            return $administrador;
        }else{
            return null;
        }
    }
    public function search($campo,$valor){
        $ds = DatasourceB::getInstancia();
        $sql = "SELECT * FROM Administrador WHERE :campo=:valor";
        $aVal = array(":campo"=>$campo,":valor"=>$valor);
        $rs = $ds->recuperar($sql,$aVal);
        $administrador = null;
        $administradores = array();
        foreach ($rs as $clave =>$valor){
            $administrador = new Administrador();
            $administrador->setIdadministrador($rs[$clave]["idadministrador"]);
            $administrador->setNombre($rs[$clave]["nombre"]);
            $administrador->setApellido($rs[$clave]["apellido"]);
            $administrador->setDni($rs[$clave]["dni"]);
            $administrador->setCuil($rs[$clave]["cuil"]);
            array_push($administradores,$administrador);
        }
        return $administradores;
    }

    public function insert(Administrador $administrador){
        $ds = DatasourceB::getInstancia();
        $sql = "INSERT INTO Administrador(nombre,apellido,dni,cuil)
                VALUES (:nombre,:apellido,:dni,:cuil)";
        $values = array(
                    ':nombre'=>$administrador->getNombre(),
                    ':apellido'=>$administrador->getApellido(),
                    ':dni'=>$administrador->getDni(),
                    ':cuil'=>$administrador->getCuil()
                );
        $resultado = $ds->actualizar($sql,$values);
                return $resultado;
    }

    public function update(Administrador $administrador){
        $ds = DatasourceB::getInstancia();
        $sql = "UPDATE Administrador SET
                    nombre=:nombre,
                    apellido=:apellido,
                    dni=:dni,
                    cuil=:cuil
                    WHERE idadministrador=:idadministrador";
            
        $values = array(
                ':nombre'=>$alumno->getNombre(),
                ':apellido'=>$alumno->getApellido(),
                ':dni'=>$alumno->getDni(),
                ':cuil'=>$alumno->getCuil()
            );
        $resultado = $ds->actualizar($sql,$values);
            return $resultado;
    }

    public function delete($id){
        $ds = DatasourceB::getInstancia();
        $sql="DELETE FROM Administrador WHERE idadministrador=:id";
        $values = array(":id"=>$id);
        $resultado = $ds->actualizar($sql,$values);
        return $resultado;
    }

    public function listar($lista){
        if (isset($lista)){
            echo "<table>";
            echo " <th> <h1>Listado de Administradores</h1> </th>";
            foreach ($lista as $row):
            echo " <tr>";
            echo "    <td>".$row->getIdadministrador()."</td>";
            echo "    <td>".$row->getNombre()."</td>";
            echo "    <td>".$row->getApellido()."</td>";
            echo "    <td>".$row->getDni()."</td>";
            echo "    <td>".$row->getCuil()."</td>";
            echo "  </tr>";
            endforeach; 
            echo "</table>";
        }
    }
}