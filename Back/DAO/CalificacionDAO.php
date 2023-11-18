<?php
/*
require_once '../Interface/ICalificacionDAO.php';
require_once '../Tablas/Calificacion.php';
require_once '../Configuracion/DataSourceB.php';
*/
class CalificacionDAO implements ICalificacionDAO{
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
        $rs = $ds->recuperar("SELECT * FROM Calificacion");
        $calificacion = null;
        $calificaciones = array();
        foreach ($rs as $clave => $valor){
            $calificacion = new Calificacion();
            $calificacion->setIdcalificaion($rs[$clave]["idcalificacion"]);
            $calificacion->setFecha($rs[$clave]["fecha"]);
            $calificacion->setObservacion($rs[$clave]["observacion"]);
            $calificacion->setCalificacion($rs[$clave]["calificaion"]);
            $calificacion->setTrimestre($rs[$clave]["trimestre"]);
            array_push($calificaciones,$calificacion);
        }
        return $calificaciones;
    }
    public function selectById($id){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Calificaion WHERE idcalificacion=:idcalificacion",array(":idcalificaion"=>$id));
        $calificacion = null;
        if(count($rs)==1){
            foreach ($rs as $clave => $valor){
                $calificacion->setIdcalificaion($rs[$clave]["idcalificacion"]);
                $calificacion->setFecha($rs[$clave]["fecha"]);
                $calificacion->setObservacion($rs[$clave]["observacion"]);
                $calificacion->setCalificacion($rs[$clave]["calificacion"]);
                $calificacion->setTrimestre($rs[$clave]["trimestre"]);
            }
            return $calificacion;
        }else{
            return null;
        }
    }
    public function search($campo,$valor){
        $ds = DatasourceB::getInstancia();
        $sql = "SELECT * FROM Calificacion WHERE :campo=:valor";
        $aVal = array(":campo"=>$campo,":valor"=>$valor);
        $rs = $ds->recuperar($sql,$aVal);
        $calificacion = null;
        $calificaciones = array();
        foreach ($rs as $clave =>$valor){
            $calificacion = new Calificacion();
                $calificacion->setIdcalificaion($rs[$clave]["idcalificacion"]);
                $calificacion->setFecha($rs[$clave]["fecha"]);
                $calificacion->setObservacion($rs[$clave]["observacion"]);
                $calificacion->setCalificacion($rs[$clave]["calificacion"]);
                $calificacion->setTrimestre($rs[$clave]["trimestre"]);
            array_push($calificaciones,$calificacion);
        }
        return $calificaciones;
    }

    public function insert(Calificacion $calificacion){
        $ds = DatasourceB::getInstancia();
        $sql = "INSERT INTO Calificacion(fecha,observacion,,calificacion,trimestre)
                VALUES (:fecha,:observacion,:calificacion,:trimestre)";
        $values = array(
                    ':fecha'=>$calificacion->getFecha(),
                    ':observacion'=>$calificacion->getObservacion(),
                    ':calificacion'=>$calificacion->getCalificacion(),
                    ':trimestre'=>$calificacion->getTrimestre()
                );
        $resultado = $ds->actualizar($sql,$values);
                return $resultado;
    }

    public function update(Calificacion $calificacion){
        $ds = DatasourceB::getInstancia();
        $sql = "UPDATE Calificacion SET
                    fecha=:fecha,
                    observacion=:observacion,
                    calificacion=:calificacion,
                    trimestre=:trimestre 
                    WHERE idcalificacion=:idcalificacion";
            
        $values = array(
                    ':fecha'=>$calificacion->getFecha(),
                    ':observacion'=>$calificacion->getObservacion(),
                    ':calificacion'=>$calificacion->getCalificacion(),
                    ':trimestre'=>$calificacion->getTrimestre()
            );
        $resultado = $ds->actualizar($sql,$values);
            return $resultado;
    }

    public function delete($id){
        $ds = DatasourceB::getInstancia();
        $sql="DELETE FROM Calificacion WHERE idcalificacion=:id";
        $values = array(":id"=>$id);
        $resultado = $ds->actualizar($sql,$values);
        return $resultado;
    }

    public function listar($lista){
        if (isset($lista)){
            echo "<table>";
            echo " <th> <h1>Listado de Calificaciones</h1> </th>";
            foreach ($lista as $row):
            echo " <tr>";
            echo "    <td>".$row->getIdcalificacion()."</td>";
            echo "    <td>".$row->getFecha()."</td>";
            echo "    <td>".$row->getObservacion()."</td>";
            echo "    <td>".$row->getCalificacion()."</td>";
            echo "    <td>".$row->getTrimestre()."</td>";
            echo "  </tr>";
            endforeach;
            echo "</table>";
        }
    }
}