<?php
/*
require_once '../Interface/IAcpmcDAO.php';
require_once '../Tablas/Acpmc.php';
require_once '../Configuracion/DataSourceB.php';
*/
class AcpmcDAO implements IAcpmcDAO{
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
    //Metodo encargado de la asignación del alumno a sus C.P.M.C.
    public function asignar(ACPMC $ACPMC){
        $ds = DatasourceB::getinstancia();
        $sql = "INSERT INTO ACPMC(idalumno,idcurso,idpreceptor,idmodalidad,idciclo)
                VALUES (:idalumno,:idcurso,:idpreceptor,:idmodalidad,:idciclo)";
        $values = array(
            ':idalumno'=>$ACPMC->getIdalumno(),
            ':idcurso'=>$ACPMC->getIdcurso(),
            ':idpreceptor'=>$ACPMC->getIdpreceptor(),
            ':idmodalidad'=>$ACPMC->getIdmodalidad(),
            ':idciclo'=>$ACPMC->getIdciclo()
        );
        try {
            $ds->ejecutar($sql, $values);
            // La inserción se realizó con éxito.
        } catch (Exception $e) {
            // Manejo de errores, por ejemplo, registro de errores, lanzar una excepción personalizada, etc.
            echo "Error: " . $e->getMessage();
        }
    }


   public function getlistacurso($idcurso, $idpreceptor, $idmodalidad, $idciclo){
    $ds = DataSourceB::getInstancia();
    $sql = "SELECT a.idalumno, a.nombre, a.apellido, a.dni, a.cuil
            FROM ACPMC ac
            INNER JOIN Alumno a ON ac.idalumno = a.idalumno
            WHERE ac.idcurso = :idcurso
            AND ac.idpreceptor = :idpreceptor
            AND ac.idmodalidad = :idmodalidad
            AND ac.idciclo = :idciclo
            ORDER BY a.idalumno, a.nombre, a.apellido, a.dni, a.cuil";

    $values = array(
        ':idcurso' => $idcurso,
        ':idpreceptor' => $idpreceptor,
        ':idmodalidad' => $idmodalidad,
        ':idciclo' => $idciclo
    );

    try {
        $rs = $ds->recuperar($sql, $values);
        return $rs; // Retorna los resultados recuperados.
    } catch (Exception $e) {
        // Manejo de errores, por ejemplo, registro de errores, lanzar una excepción personalizada, etc.
        echo "Error: " . $e->getMessage();
        return array(); // Retorna un array vacío en caso de error.
    }
}
}