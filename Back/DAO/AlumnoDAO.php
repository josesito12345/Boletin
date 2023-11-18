<?php
/*
require_once '../Interface/IAlumnoDAO.php';
require_once '../Tablas/Alumno.php';
require_once '../Configuracion/DataSourceB.php';
*/
class AlumnoDAO implements IAlumnoDAO{
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
        $rs = $ds->recuperar("SELECT * FROM Alumno");
        $alumno = null;
        $alumnos = array();
        foreach ($rs as $clave => $valor){
            $alumno = new Alumno();
            $alumno->setIdalumno($rs[$clave]["idalumno"]);
            $alumno->setNombre($rs[$clave]["nombre"]);
            $alumno->setApellido($rs[$clave]["apellido"]);
            $alumno->setDni($rs[$clave]["dni"]);
            $alumno->setCuil($rs[$clave]["cuil"]);
            array_push($alumnos,$alumno);
        }
        return $alumnos;
    }
    public function selectById($id){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Alumno WHERE idalumno=:idalumno",array(":idalumno"=>$id));
        $alumno = null;
        if(count($rs)==1){
            foreach ($rs as $clave => $valor){
                $alumno->setIdalumno($rs[$clave]["idalumno"]);
                $alumno->setNombre($rs[$clave]["nombre"]);
                $alumno->setApellido($rs[$clave]["apellido"]);
                $alumno->setDni($rs[$clave]["dni"]);
                $alumno->setCuil($rs[$clave]["cuil"]);
            }
            return $alumno;
        }else{
            return null;
        }
    }
    public function search($campo,$valor){
        $ds = DatasourceB::getInstancia();
        $sql = "SELECT * FROM Alumno WHERE :campo=:valor";
        $aVal = array(":campo"=>$campo,":valor"=>$valor);
        $rs = $ds->recuperar($sql,$aVal);
        $alumno = null;
        $alumnos = array();
        foreach ($rs as $clave =>$valor){
            $alumno = new Alumno();
            $alumno->setIdalumno($rs[$clave]["idalumno"]);
            $alumno->setNombre($rs[$clave]["nombre"]);
            $alumno->setApellido($rs[$clave]["apellido"]);
            $alumno->setDni($rs[$clave]["dni"]);
            $alumno->setCuil($rs[$clave]["cuil"]);
            array_push($alumnos,$alumno);
        }
        return $alumnos;
    }

    public function insert(Alumno $alumno){
        $ds = DatasourceB::getInstancia();
        $sql = "INSERT INTO Alumno(nombre,apellido,dni,cuil)
                VALUES (:nombre,:apellido,:dni,:cuil)";
        $values = array(
                    ':nombre'=>$alumno->getNombre(),
                    ':apellido'=>$alumno->getApellido(),
                    ':dni'=>$alumno->getDni(),
                    ':cuil'=>$alumno->getCuil()
                );
        $resultado = $ds->actualizar($sql,$values);
                return $resultado;
    }

    public function update(Alumno $alumno){
        $ds = DatasourceB::getInstancia();
        $sql = "UPDATE Alumno SET
                    nombre=:nombre,
                    apellido=:apellido,
                    dni=:dni,
                    cuil=:cuil
                    WHERE idalumno=:idalumno";
            
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
        $sql="DELETE FROM Alumno WHERE idalumno=:id";
        $values = array(":id"=>$id);
        $resultado = $ds->actualizar($sql,$values);
        return $resultado;
    }

    public function listar($lista){
        if (isset($lista)){
            echo "<table>";
            echo " <th> <h1>Listado de Alumnos</h1> </th>";
            foreach ($lista as $row):
            echo " <tr>";
            echo "    <td>".$row->getIdalumno()."</td>";
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