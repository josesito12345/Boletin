<?php
/*
require_once '../Interface/ICicloDAO.php';
require_once '../Tablas/Ciclo.php';
require_once '../Configuracion/DataSourceB.php';
*/
class CicloDAO implements ICicloDAO{
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
        $rs = $ds->recuperar("SELECT * FROM Ciclo");
        $ciclo = null;
        $ciclos = array();
        foreach ($rs as $clave => $valor){
            $ciclo = new Curso();
            $ciclo->setIdciclo($rs[$clave]["idciclo"]);
            $ciclo->setCiclo($rs[$clave]["ciclo"]);
            $ciclo->setFecha_ini($rs[$clave]["fecha_ini"]);
            $ciclo->setFecha_fin($rs[$clave]["fecha_fin"]);
            array_push($ciclos,$ciclo);
        }
        return $ciclos;
    }
    public function selectById($id){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Ciclo WHERE idciclo=:idciclo",array(":idciclo"=>$id));
        $ciclo = null;
        if(count($rs)==1){
            foreach ($rs as $clave => $valor){
                $ciclo->setIdciclo($rs[$clave]["idciclo"]);
                $ciclo->setCilo($rs[$clave]["ciclo"]);
                $ciclo->setFecha_ini($rs[$clave]["fecha_ini"]);
                $ciclo->setFecha_fin($rs[$clave]["fecha_fin"]);
            }
            return $ciclo;
        }else{
            return null;
        }
    }
    public function search($campo,$valor){
        $ds = DatasourceB::getInstancia();
        $sql = "SELECT * FROM Ciclo WHERE :campo=:valor";
        $aVal = array(":campo"=>$campo,":valor"=>$valor);
        $rs = $ds->recuperar($sql,$aVal);
        $ciclo = null;
        $ciclos = array();
        foreach ($rs as $clave =>$valor){
            $ciclo = new Ciclo();
            $ciclo->setIdciclo($rs[$clave]["idciclo"]);
            $ciclo->setCilo($rs[$clave]["ciclo"]);
            $ciclo->setFecha_ini($rs[$clave]["fecha_ini"]);
            $ciclo->setFecha_fin($rs[$clave]["fecha_fin"]);
            array_push($ciclos,$ciclo);
        }
        return $ciclos;
    }

    public function insert(Ciclo $ciclo){
        $ds = DatasourceB::getInstancia();
        $sql = "INSERT INTO Ciclo(ciclo,fecha_ini,fecha_fin)
                VALUES (:ciclo,:fecha_ini,:fecha_fin)";
        $values = array(
            ':ciclo'=>$ciclo->getCiclo(),
            ':fecha_ini'=>$ciclo->getFecha_ini(),
            ':fecha_fin'=>$ciclo->getFecha_fin()
        );
        $resultado = $ds->actualizar($sql,$values);
            return $resultado;
    }

    public function update(Ciclo $ciclo){
        $ds = DatasourceB::getInstancia();
        $sql = "UPDATE Ciclo SET
                    ciclo=:ciclo,
                    fecha_ini=:fecha_ini,
                    fecha_fin=:fecha_fin WHERE idciclo=:idciclo";
        $values = array(
            ':ciclo'=>$ciclo->getCiclo(),
            ':fecha_ini'=>$ciclo->getFecha_ini(),
            ':fecha_fin'=>$ciclo->getFecha_fin()
        );
        $resultado = $ds->actualizar($sql,$values);
        return $resultado;
    }

    public function delete($id){
        $ds = DatasourceB::getInstancia();
        $sql="DELETE FROM Ciclo WHERE idciclo=:id";
        $values = array(
            ":id"=>$id
        );
        $resultado= $ds->actualizar($sql,$values);
        return $resultado;
    }

    public function listar($lista){
        if (isset($lista)){
            echo "<table>";
            echo " <th> <h1>Listado de Ciclos</h1> </th>";
            foreach ($lista as $row):
            echo " <tr>";
            echo "    <td>".$row->getIdciclo()."</td>";
            echo "    <td>".$row->getCiclo()."</td>";
            echo "    <td>".$row->getFecha_ini()."</td>";
            echo "    <td>".$row->getFecha_fin()."</td>";
            echo "  </tr>";
            endforeach;
            echo "</table>";
        }
    }
}