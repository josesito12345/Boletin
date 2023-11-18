<?php
/*
require_once '../Interface/IPreceptorDAO.php';
require_once '../Tablas/Preceptor.php';
require_once '../Configuracion/DataSourceB.php';
*/
class PreceptorDAO implements IPreceptorDAO{
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
        $rs = $ds->recuperar("SELECT * FROM Preceptor");
        $preceptor = null;
        $preceptores = array();
        foreach ($rs as $clave => $valor){
            $preceptor = new Preceptor();
            $preceptor->setIdpreceptor($rs[$clave]["idpreceptor"]);
            $preceptor->setNombre($rs[$clave]["nombre"]);
            $preceptor->setApellido($rs[$clave]["apellido"]);
            $preceptor->setDni($rs[$clave]["dni"]);
            $preceptor->setCuil($rs[$clave]["cuil"]);
            array_push($preceptores,$preceptor);
        }
        return $preceptores;
    }
    public function selectById($id){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Preceptor WHERE idpreceptor=:idpreceptor",array(":idpreceptor"=>$id));
        $preceptor = null;
        if(count($rs)==1){
            foreach ($rs as $clave => $valor){
                $preceptor->setIdpreceptor($rs[$clave]["idpreceptor"]);
                $preceptor->setNombre($rs[$clave]["nombre"]);
                $preceptor->setApellido($rs[$clave]["apellido"]);
                $preceptor->setDni($rs[$clave]["dni"]);
                $preceptor->setCuil($rs[$clave]["cuil"]);
            }
            return $preceptor;
        }else{
            return null;
        }
    }
    public function search($campo,$valor){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Preceptor WHERE :campo=:valor",array(":campo"=>$campo,":valor"=>$valor));
        $preceptor = null;
        $preceptores = array();
        foreach ($rs as $clave =>$valor){
            $preceptor = new Preceptor();
            $preceptor->setIdpreceptor($rs[$clave]["idpreceptor"]);
            $preceptor->setNombre($rs[$clave]["nombre"]);
            $preceptor->setApellido($rs[$clave]["apellido"]);
            $preceptor->setDni($rs[$clave]["dni"]);
            $preceptor->setCuil($rs[$clave]["cuil"]);
            array_push($preceptores,$preceptor);
        }
        return $preceptores;
    }

    public function insert(Preceptor $preceptor){
        $ds = DatasourceB::getInstancia();
        $sql = "INSERT INTO Preceptor(nombre,apellido,dni,cuil)
                VALUES (:nombre,:apellido,:dni,:cuil)";
                $values = array(
                    ':nombre'=>$preceptor->getNombre(),
                    ':apellido'=>$preceptor->getApellido(),
                    ':dni'=>$preceptor->getDni(),
                    ':cuil'=>$preceptor->getCuil()
                );
                $resultado = $ds->actualizar($sql,$values);
                return $resultado;
    }

    public function update(Preceptor $preceptor){
        $ds = DatasourceB::getInstancia();
        $sql = "UPDATE Preceptor SET
                    nombre=:nombre,
                    apellido=:apellido,
                    dni=:dni,
                    cuil=:cuil
                    WHERE idpreceptor=:idpreceptor";
            
        $values = array(
                ':nombre'=>$preceptor->getNombre(),
                ':apellido'=>$preceptor->getApellido(),
                ':dni'=>$preceptor->getDni(),
                ':cuil'=>$preceptor->getCuil()
            );
        $resultado = $ds->actualizar($sql,$values);
            return $resultado;
    }

    public function delete($id){
        $ds = DatasourceB::getInstancia();
        $sql="DELETE FROM Preceptor WHERE idpreceptor=:id";
        $values = array(":id"=>$id);
        $resultado = $ds->actualizar($sql,$values);
        return $resultado;
    }

    public function listar($lista){
        if (isset($lista)){
            echo "<table>";
            echo " <th> <h1>Lista de Preceptores</> </th>";
            foreach ($lista as $row):
            echo " <tr>";
            echo "    <td>".$row->getIdpreceptor()."</td>";
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