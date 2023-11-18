<?php
/*
require_once '../Interface/ICursoDAO.php';
require_once '../Tablas/Curso.php';
require_once '../Configuracion/DataSourceB.php';
*/
class CursoDAO implements ICursoDAO{
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
        $rs = $ds->recuperar("SELECT * FROM Curso");
        $curso = null;
        $cursos = array();
        foreach ($rs as $clave => $valor){
            $curso = new Curso();
            $curso->setIdcurso($rs[$clave]["idcurso"]);
            $curso->setAño($rs[$clave]["año"]);
            $curso->setDivision($rs[$clave]["division"]);
            array_push($cursos,$curso);
        }
        return $cursos;
    }
    public function selectById($id){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Curso WHERE idcurso=:idcurso",array(":idcurso"=>$id));
        $curso = null;
        if(count($rs)==1){
            foreach ($rs as $clave => $valor){
                $curso->setIdcurso($rs[$clave]["idcurso"]);
                $curso->setAño($rs[$clave]["año"]);
                $curso->setDivision($rs[$clave]["division"]);
            }
            return $curso;
        }else{
            return null;
        }
    }
    public function search($campo,$valor){
        $ds = DatasourceB::getInstancia();
        $sql = "SELECT * FROM Curso WHERE :campo=:valor";
        $aVal = array(":campo"=>$campo,":valor"=>$valor);
        $rs = $ds->recuperar($sql,$aVal);
        $curso = null;
        $cursos = array();
        foreach ($rs as $clave =>$valor){
            $curso = new Curso();
            $curso->setIdcurso($rs[$clave]["idcurso"]);
            $curso->setAño($rs[$clave]["año"]);
            $curso->setDivision($rs[$clave]["division"]);
            array_push($cursos,$curso);
        }
        return $cursos;
    }

    public function insert(Curso $curso){
        $ds = DatasourceB::getInstancia();
        $sql = "INSERT INTO Curso(año,division)
                VALUES (:año,:division)";
        $values = array(
            ':año'=>$curso->getAño(),
            ':division'=>$curso->getDivision()
        );
        $resultado = $ds->actualizar($sql,$values);
            return $resultado;
    }

    public function update(Curso $curso){
        $ds = DatasourceB::getInstancia();
        $sql = "UPDATE Curso SET
                    año=:año,
                    division=:division WHERE idcurso=:idcurso";
        $values = array(
            ':año'=>$curso->getAño(),
            ':division'=>$curso->getDivision()
        );
        $resultado = $ds->actualizar($sql,$values);
        return $resultado;
    }

    public function delete($id){
        $ds = DatasourceB::getInstancia();
        $sql="DELETE FROM Curso WHERE idcurso=:id";
        $values = array(
            ":id"=>$id
        );
        $resultado= $ds->actualizar($sql,$values);
        return $resultado;
    }

    public function listar($lista){
        if (isset($lista)){
            echo "<table>";
            echo " <th> <h1>Listado de Cursos</h1> </th>";
            foreach ($lista as $row):
            echo " <tr>";
            echo "    <td>".$row->getIdcurso()."</td>";
            echo "    <td>".$row->getAño()."</td>";
            echo "    <td>".$row->getDivision()."</td>";
            echo "  </tr>";
            endforeach;
            echo "</table>";
        }
    }
}