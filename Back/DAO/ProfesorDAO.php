<?php
/*
require_once '../Interface/IProfesorDAO.php';
require_once '../Tablas/Profesor.php';
require_once '../Configuracion/DataSourceB.php';
*/
class ProfesorDAO implements IProfesorDAO{
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
        $rs = $ds->recuperar("SELECT * FROM Profesor");
        $profesor = null;
        $profesores = array();
        foreach ($rs as $clave => $valor){
            $profesor = new Profesor();
            $profesor->setIdprofesor($rs[$clave]["idprofesor"]);
            $profesor->setNombre($rs[$clave]["nombre"]);
            $profesor->setApellido($rs[$clave]["apellido"]);
            $profesor->setDni($rs[$clave]["dni"]);
            $profesor->setCuil($rs[$clave]["cuil"]);
            array_push($profesores,$profesor);
        }
        return $profesores;
    }
    public function selectById($id){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Profesor WHERE idprofesor=:idprofesor",array(":idprofesor"=>$id));
        $profesor = null;
        if(count($rs)==1){
            foreach ($rs as $clave => $valor){
                $profesor->setIdprofesor($rs[$clave]["idprofesor"]);
                $profesor->setNombre($rs[$clave]["nombre"]);
                $profesor->setApellido($rs[$clave]["apellido"]);
                $profesor->setDni($rs[$clave]["dni"]);
                $profesor->setCuil($rs[$clave]["cuil"]);
            }
            return $profesor;
        }else{
            return null;
        }
    }
    public function search($campo,$valor){
        $ds = DatasourceB::getInstancia();
        $sql = "SELECT * FROM Profesor WHERE :campo=:valor";
        $aVal = array(":campo"=>$campo,":valor"=>$valor);
        $rs = $ds->recuperar($sql,$aVal);
        $profesor = null;
        $profesores= array();
        foreach ($rs as $clave =>$valor){
            $preceptor = new Preceptor();
            $profesor->setIdprofesor($rs[$clave]["idprofesor"]);
            $profesor->setNombre($rs[$clave]["nombre"]);
            $profesor->setApellido($rs[$clave]["apellido"]);
            $profesor->setDni($rs[$clave]["dni"]);
            $profesor->setCuil($rs[$clave]["cuil"]);
            array_push($profesores,$profesor);
        }
        return $profesores;
    }

    public function insert(Profesor $profesor){
        $ds = DatasourceB::getInstancia();
        $sql = "INSERT INTO Profesor(nombre,apellido,dni,cuil)
                VALUES (:nombre,:apellido,:dni,:cuil)";
        $values = array(
                    ':nombre'=>$profesor->getNombre(),
                    ':apellido'=>$profesor->getApellido(),
                    ':dni'=>$profesor->getDni(),
                    ':cuil'=>$profesor->getCuil()
                );
        $resultado = $ds->actualizar($sql,$values);
                return $resultado;
    }

    public function update(Profesor $profesor){
        $ds = DatasourceB::getInstancia();
        $sql = "UPDATE Profesor SET
                    nombre=:nombre,
                    apellido=:apellido,
                    dni=:dni,
                    cuil=:cuil
                    WHERE idprofesor=:idprofesor";
            
        $values = array(
                ':nombre'=>$profesor->getNombre(),
                ':apellido'=>$profesor->getApellido(),
                ':dni'=>$profesor->getDni(),
                ':cuil'=>$profesor->getCuil(),
                ':telefono'=>$profesor->getTelefono()
            );
            $resultado = $ds->actualizar($sql,$values);
            return $resultado;
    }

    public function delete($id){
        $ds = DatasourceB::getInstancia();
        $sql="DELETE FROM Profesor WHERE idprofesor=:id";
        $values = array(":id"=>$id);
        $resultado = $ds->actualizar($sql,$values);
        return $resultado;
    }

    public function listar($lista){
        if (isset($lista)){
            echo "<table>";
            echo " <th> <h1>Listado de Profesores</h1> </th>";
            foreach ($lista as $row):
            echo " <tr>";
            echo "    <td>".$row->getIdprofesor()."</td>";
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