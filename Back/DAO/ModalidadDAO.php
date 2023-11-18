<?php
/*
require_once '../Interface/IModalidadDAO.php';
require_once '../Tablas/Modalidad.php';
require_once '../Configuracion/DataSourceB.php';
*/
class ModalidadDAO implements IModalidadDAO{
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
        $rs = $ds->recuperar("SELECT * FROM Modalidad");
        $modalidad = null;
        $modalidades = array();
        foreach ($rs as $clave => $valor){
            $modalidad = new Modalidad();
            $modalidad->setIdmodalidad($rs[$clave]["idmodalidad"]);
            $modalidad->setNombre($rs[$clave]["nombre"]);
            array_push($modalidades,$modalidad);
        }
        return $modalidades;
    }
    public function selectById($id){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Modalidad WHERE idmodalidad=:idmodalidad",array(":idmodalidad"=>$id));
        $modalidad = null;
        if(count($rs)==1){
            foreach ($rs as $clave => $valor){
                $modalidad->setIdmodalidad($rs[$clave]["idmodalidad"]);
                $modalidad->setNombre($rs[$clave]["nombre"]);
            }
            return $modalidad;
        }else{
            return null;
        }
    }
    public function search($campo,$valor){
        $ds = DatasourceB::getInstancia();
        $sql = "SELECT * FROM Modalidad WHERE :campo=:valor";
        $aVal = array(":campo"=>$campo,":valor"=>$valor);
        $rs = $ds->recuperar($sql,$aVal);
        $modalidad = null;
        $modalidades = array();
        foreach ($rs as $clave =>$valor){
            $modalidad = new Modalidad();
            $modalidad->setIdmodalidad($rs[$clave]["idmodalidad"]);
            $modalidad->setNombre($rs[$clave]["nombre"]);
            array_push($modalidades,$modalidad);
        }
        return $modalidades;
    }

    public function insert(Modalidad $modalidad){
        $ds = DatasourceB::getInstancia();
        $sql = "INSERT INTO Modalidad(nombre)
                VALUES (:nombre)";
        $values = array(
                    ':nombre'=>$modalidad->getNombre()
                );
        $resultado = $ds->actualizar($sql,$values);
                return $resultado;
    }

    public function update(Modalidad $modalidad){
        $ds = DatasourceB::getInstancia();
        $sql = "UPDATE Modalidad SET
                    nombre=:nombre
                    WHERE idmodalidad=:idmodalidad";
            
        $values = array(
                ':nombre'=>$modalidad->getNombre()
                );
        $resultado = $ds->actualizar($sql,$values);
            return $resultado;
    }

    public function delete($id){
        $ds = DatasourceB::getInstancia();
        $sql="DELETE FROM Modalidad WHERE idmodalidad=:id";
        $values = array(":id"=>$id);
        $resultado = $ds->actualizar($sql,$values);
        return $resultado;
    }

    public function listar($lista){
        if (isset($lista)){
            echo "<table>";
            echo " <th> <h1>Listado de Modalidades</h1> </th>";
            foreach ($lista as $row):
            echo " <tr>";
            echo "    <td>".$row->getIdmodalidad()."</td>";
            echo "    <td>".$row->getNombre()."</td>";
            echo "  </tr>";
            endforeach; 
            echo "</table>";
        }
    }
}