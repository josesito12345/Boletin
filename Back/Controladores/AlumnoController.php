<?php
//Referencia de directorios
require_once '../Configuracion/DataSourceB.php';
require_once '../DAO/AlumnoDAO.php';
//Clase <Controlador>
class AlumnoControler{
    //Atributos.
    static private $instancia = null;
    private $alumnoDAO;
    var $rowset;
    //Constructor privado invocado por "getInstancia" de <DatasourceB>.
    private function __construct(){
        $this->alumnoDAO = AlumnoDAO::getInstancia();
    }
    
    //Metodo para instanciar por Singleton.
    public static function getInstancia(){
        if (!isset(self::$instancia)){
            self::$instancia = new self();
        }
        return self::$instancia;
    }
    //Se encarga de mostrar la ficha de inisio de sesion, y segun el tipo de usuario se muestra una ficha u otra.
    public function index() {      
        require_once '../../Front/Alumno/boletin.php';
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $dni = $_POST['dni']; // Obtener el valor del campo DNI del formulario
            $contraseña = $_POST['contraseña']; // Obtener el valor del campo contraseña del formulario
    
            // Obtiene el tipo de usuario autenticado
            //$tipoUsuario = $this->usuarioDAO->validacion($dni, $contraseña);
    }
}
}