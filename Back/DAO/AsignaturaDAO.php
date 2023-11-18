<?php
/*
require_once '../Interface/IAsignaturaDAO.php';
require_once '../Tablas/Asignatura.php';
require_once '../Configuracion/DataSourceB.php';
*/
class AsignaturaDAO implements IAsignaturaDAO{
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
        $rs = $ds->recuperar("SELECT * FROM Asignatura");
        $asignatura = null;
        $asignaturas = array();
        foreach ($rs as $clave => $valor){
            $asignatura = new Asignatura();
            $asignatura->setIdasignatura($rs[$clave]["idasignatura"]);
            $asignatura->setNombre($rs[$clave]["nombre"]);
            array_push($asignaturas,$asignatura);
        }
        return $asignaturas;
    }
    public function selectById($id){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Asignatura WHERE idasignatura=:idasignatura",array(":idasiginatura"=>$id));
        $asignatura = null;
        if(count($rs)==1){
            foreach ($rs as $clave => $valor){
                $asignatura->setIdasignatura($rs[$clave]["idasignatura"]);
                $asignatura->setNombre($rs[$clave]["nombre"]);
            }
            return $asignatura;
        }else{
            return null;
        }
    }
    public function search($campo,$valor){
        $ds = DatasourceB::getInstancia();
        $sql = "SELECT * FROM Asignatura WHERE :campo=:valor";
        $aVal = array(":campo"=>$campo,":valor"=>$valor);
        $rs = $ds->recuperar($sql,$aVal);
        $asignatura = null;
        $asignaturas = array();
        foreach ($rs as $clave =>$valor){
            $asignatura = new Asignatura();
            $asignatura->setIdasignatura($rs[$clave]["idasignatura"]);
            $asignatura->setNombre($rs[$clave]["nombre"]);
            array_push($asignaturas,$asignatura);
        }
        return $asignaturas;
    }

    public function insert(Asignatura $asignatura){
        $ds = DatasourceB::getInstancia();
        $sql = "INSERT INTO Asignatura(nombre)
                VALUES (:nombre)";
        $values = array(
                    ':nombre'=>$asignatura->getNombre()
                );
        $resultado = $ds->actualizar($sql,$values);
                return $resultado;
    }

    public function update(Asignatura $asignatura){
        $ds = DatasourceB::getInstancia();
        $sql = "UPDATE Asignatura SET
                    nombre=:nombre
                    WHERE idasignatura=:idasignatura";
            
        $values = array(
                ':nombre'=>$asignatura->getNombre()
                );
        $resultado = $ds->actualizar($sql,$values);
            return $resultado;
    }

    public function delete($id){
        $ds = DatasourceB::getInstancia();
        $sql="DELETE FROM Asignatura WHERE idasignatura=:id";
        $values = array(":id"=>$id);
        $resultado = $ds->actualizar($sql,$values);
        return $resultado;
    }

    public function listar($lista){
        if (isset($lista)){
            echo "<table>";
            echo " <th> <h1>Listado de Asignaturas</h1> </th>";
            foreach ($lista as $row):
            echo " <tr>";
            echo "    <td>".$row->getIdasignatura()."</td>";
            echo "    <td>".$row->getNombre()."</td>";
            echo "  </tr>";
            endforeach; 
            echo "</table>";
        }
    }
}