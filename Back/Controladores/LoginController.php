<?php
//Referencia de directorios
/*
require_once '../Configuracion/DataSourceB.php';
require_once '../DAO/UsuarioDAO.php';
*/
//Clase <Controlador>
class LoginController{
  //Atributos.
  static private $instancia = null;
  private $usuarioDAO;
  var $rowset;
  //Constructor privado invocado por "getInstancia" de <DatasourceB>.
  private function __construct(){
    $this->usuarioDAO = UsuarioDAO::getInstancia();
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
    require_once RAIZ.'Front/Login/vista-sesion.php';
  }

  public function validar() {      
    // Obtiene el tipo de usuario autenticado
//    if ($_SERVER['REQUEST_METHOD'] === "POST") {
      $dni = $_REQUEST['dni']; // Obtener el valor del campo DNI del formulario
      $password = $_REQUEST['password']; // Obtener el valor del campo password del formulario
      echo " validar dni: ".$dni." password: ".$password."<br>";
      // Obtiene el tipo de usuario autenticado
      $rol = $this->usuarioDAO->validacion($dni,$password);
      return $rol;
    }
//  }
}