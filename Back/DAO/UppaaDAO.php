<?php
/*
require_once '../Interface/IUppaaDAO.php';
require_once '../Tablas/Uppaa.php';
require_once '../Configuracion/DataSourceB.php';
*/
class UppaaDAO implements IUppaaDAO{
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
        $rs = $ds->recuperar("SELECT * FROM UPPAA");
        $UPPAA = null;
        $UPPAAs = array();
        foreach ($rs as $clave => $valor){
            $UPPAA = new UPPAA();
            $UPPAA->setIdUPPAA($rs[$clave]["idUPPAA"]);
            $UPPAA->setDni($rs[$clave]["dni"]);
            $UPPAA->setIdprofesor($rs[$clave]["idprofesor"]);
            $UPPAA->setIdpreceptor($rs[$clave]["idpreceptor"]);
            $UPPAA->setIdalumno($rs[$clave]["idalumno"]);
            $UPPAA->setIdadministrador($rs[$clave]["idadministrador"]);

            array_push($UPPAAs,$UPPAA);
        }
        return $UPPAAs;
    }
    public function selectById($id){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM UPPAA WHERE idUPPAA=:idUPPAA",array(":idUPPAA"=>$id));
        $UPPAA = null;
        if(count($rs)==1){
            foreach ($rs as $clave => $valor){
                $UPPAA->setIdUPPA($rs[$clave]["idUPPAA"]);
                $UPPAA->setDni($rs[$clave]["dni"]);
                $UPPAA->setIdprofesor($rs[$clave]["idprofesor"]);
                $UPPAA->setIdpreceptor($rs[$clave]["idpreceptor"]);
                $UPPAA->setIdalumno($rs[$clave]["idalumno"]);
                $UPPAA->setIdadministrador($rs[$clave]["idadministrador"]);
            }
            return $UPPAA;
        }else{
            return null;
        }
    }
    public function search($campo,$valor){
        $ds = DatasourceB::getInstancia();
        $sql = "SELECT * FROM UPPAA WHERE :campo=:valor";
        $aVal = array(":campo"=>$campo,":valor"=>$valor);
        $rs = $ds->recuperar($sql,$aVal);
        $UPPAA = null;
        $UPPAA = array();
        foreach ($rs as $clave =>$valor){
            $UPPAA = new UPPAA();
            $UPPAA->setIdUPPA($rs[$clave]["idUPPAA"]);
            $UPPAA->setDni($rs[$clave]["dni"]);
            $UPPAA->setIdprofesor($rs[$clave]["idprofesor"]);
            $UPPAA->setIdpreceptor($rs[$clave]["idpreceptor"]);
            $UPPAA->setIdalumno($rs[$clave]["idalumno"]);
            $UPPAA->setIdadministrador($rs[$clave]["idadministrador"]);
            array_push($UPPAAs,$UPPAA);
        }
        return $UPPAAs;
    }

    public function insert(UPPAA $UPPAA){
        $ds = DatasourceB::getInstancia();
        $sql = "INSERT INTO (dni,idprofesor,idpreceptor,idalumno,idadministrador)
                VALUES (:dni,:idprofesor,:idpreceptor,:idalumno,:idadministrador)";
        $values = array(
                ':dni'=>$UPPAA->getDni(),
                ':idprofesor'=>$UPPAA->getIdprofesor(),
                ':idpreceptor'=>$UPPAA->getIdpreceptor(),
                ':idalumno'=>$UPPAA->getIdalumno(),
                ':idadministrador'=>$UPPAA->getIdadministrador()
                );
        $resultado = $ds->actualizar($sql,$values);
                return $resultado;
    }

    public function update(UPPAA $UPPAA){
        $ds = DatasourceB::getInstancia();
        $sql = "UPDATE UPPAA SET
                    dni=:dni,
                    idprofesor=:idprofesor,
                    idpreceptor=:idpreceptor,
                    idalumno=:idalumno,
                    idadministrador=:idadministrador
                    WHERE idUPPAA=:idUPPAA";
            
        $values = array(
                ':dni'=>$UPPAA->getDni(),
                ':idprofesor'=>$UPPAA->getIdprofesor(),
                ':idpreceptor'=>$UPPAA->getIdpreceptor(),
                ':idalumno'=>$UPPAA->getIdalumno(),
                ':idadministrador'=>$UPPAA->getIdadministrador()
                );
        $resultado = $ds->actualizar($sql,$values);
            return $resultado;
    }

    public function delete($id){
        $ds = DatasourceB::getInstancia();
        $sql="DELETE FROM UPPAA WHERE idUPPAA=:id";
        $values = array(":id"=>$id);
        $resultado = $ds->actualizar($sql,$values);
        return $resultado;
    }
    /*public function listar($lista){
        if (isset($lista)){
            echo "<table>";
            echo " <th> <h1>Listado de Usuarios</h1> </th>";
            foreach ($lista as $row):
            echo " <tr>";
            echo "    <td>".$row->getDni()."</td>";
            echo "    <td>".$row->getContraseña()."</td>";
            echo "    <td>".$row->getNombre()."</td>";
            echo "    <td>".$row->getEmail()."</td>";
            echo "    <td>".$row->getTelefono()."</td>";
            echo "    <td>".$row->getPermiso()."</td>";
            echo "  </tr>";
            endforeach; 
            echo "</table>";
        }
    }*/    
}