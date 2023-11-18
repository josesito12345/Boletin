<?php
/*
require_once '../Interface/IUsuarioDAO.php';
require_once '../Configuracion/DataSourceB.php';
require_once '../Tablas/Usuario.php';
*/
class UsuarioDAO implements IUsuarioDAO{
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

    public function validacion($dni, $password) {    
        $ds = DatasourceB::getInstancia();
        $sql = "SELECT permiso FROM usuario WHERE dni=:dni AND password=:password";
        $values = array(":dni"=>$dni,":password"=>$password);
        echo "Parametros dni ".$dni." Password ".$password."<br>";
        //$aVal=array(":campo"=>$campo,":valor"=>$valor);
        try {
            // Ejecuta la consulta.
            echo"Pre recuperar <br>".$sql."<br>";
            $resultado = $ds->recuperar($sql,$values);
            //die(" Post Recuperar permisoo: ");
            
            if ($resultado[0]['permiso']>=0) {
                // La consulta se realizó correctamente
                $fila = $resultado[0];
                $permiso = $fila['permiso'];
                //die("permisoo: ".$permiso);
                return $permiso;
            } else {
                // Las credenciales son incorrectas
                //die("retornando -1 ");
                return -1;
            }
        } catch (Exception $e) {
            return "Errorzito ".$e->getMessage()."<br>";
        }
    }

    public function select(){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Usuario");
        $usuario = null;
        $usuarios = array();
        foreach ($rs as $clave => $valor){
            $usuario = new Usuario();
            $usuario->setDni($rs[$clave]["dni"]);
            $usuario->setContraseña($rs[$clave]["password"]);
            $usuario->setNombre($rs[$clave]["nombre"]);
            $usuario->setEmail($rs[$clave]["email"]);
            $usuario->setTelefono($rs[$clave]["telefono"]);
            $usuario->setPermiso($rs[$clave]["permiso"]);
            array_push($usuarios,$usuario);
        }
        return $usuarios;
    }
    public function selectById($id){
        $ds = DatasourceB::getInstancia();
        $rs = $ds->recuperar("SELECT * FROM Usuario WHERE dni=:dni",array(":dni"=>$id));
        $usuario = null;
        if(count($rs)==1){
            foreach ($rs as $clave => $valor){
                $usuario->setDni($rs[$clave]["dni"]);
                $usuario->setContraseña($rs[$clave]["password"]);
                $usuario->setNombre($rs[$clave]["nombre"]);
                $usuario->setEmail($rs[$clave]["email"]);
                $usuario->setTelefono($rs[$clave]["telefono"]);
                $usuario->setPermiso($rs[$clave]["permiso"]);
            }
            return $usuario;
        }else{
            return null;
        }
    }
    public function search($campo,$valor){
        $ds = DatasourceB::getInstancia();
        $sql = "SELECT * FROM Usuario WHERE :campo=:valor";
        $aVal = array(":campo"=>$campo,":valor"=>$valor);
        $rs = $ds->recuperar($sql,$aVal);
        $usuario = null;
        $usuario = array();
        foreach ($rs as $clave =>$valor){
            $usuario = new Usuario();
            $usuario->setDni($rs[$clave]["dni"]);
            $usuario->setContraseña($rs[$clave]["password"]);
            $usuario->setNombre($rs[$clave]["nombre"]);
            $usuario->setEmail($rs[$clave]["email"]);
            $usuario->setTelefono($rs[$clave]["telefono"]);
            $usuario->setPermiso($rs[$clave]["permiso"]);
            array_push($usuarios,$usuario);
        }
        return $usuarios;
    }

    public function insert(Usuario $usuario){
        $ds = DatasourceB::getInstancia();
        $sql = "INSERT INTO Usuario(dni,password,nombre,email,telefono,permiso)
                VALUES (:dni,:password,:nombre,:email,:telefono,:permiso)";
        $values = array(
                ':dni'=>$usuario->getDni(),
                ':password'=>$usuario->getContraseña(),
                ':nombre'=>$usuario->getNombre(),
                ':email'=>$usuario->getEmail(),
                ':telefono'=>$usuario->getTelefono(),
                ':permiso'=>$usuario->getPermiso()
                );
                $resultado = $ds->actualizar($sql, $values);

                if ($resultado) {
                    // Mostrar el mensaje de alerta
                    echo "<script>
                        alert('Usuario creado correctamente');
                        window.history.back();
                    </script>";
                } else {
                    // Mostrar el mensaje de error
                    echo "Error al crear el usuario: " . $ds->getError();
                }
                return $resultado;
    }

    public function update(Usuario $usuario){
        $ds = DatasourceB::getInstancia();
        $sql = "UPDATE Usuario SET
                    dni=:dni,
                    password=:password,
                    nombre=:nombre,
                    email=:email,
                    telefono=:telefono,
                    permiso=:permiso
                    WHERE dni=:dni";
            
        $values = array(
                ':dni'=>$usuario->getDni(),
                ':password'=>$usuario->getPassword(),
                ':nombre'=>$usuario->getNombre(),
                ':email'=>$usuario->getEmail(),
                ':telefono'=>$usuario->getTelefono(),
                ':permiso'=>$usuario->getPermiso()
                );
        $resultado = $ds->actualizar($sql,$values);
            return $resultado;
    }

    public function delete($id){
        $ds = DatasourceB::getInstancia();
        $sql="DELETE FROM Usuario WHERE dni=:id";
        $values = array(":id"=>$id);
        $resultado = $ds->actualizar($sql,$values);
        return $resultado;
    }

    public function listar($lista){
        if (isset($lista)){
            echo "<table>";
            echo " <th> <h1>Listado de Usuarios</h1> </th>";
            foreach ($lista as $row):
            echo " <tr>";
            echo "   <td>".$row->getDni()."</td>";
            echo "   <td>".$row->getPassword()."</td>";
            echo "   <td>".$row->getNombre()."</td>";
            echo "   <td>".$row->getEmail()."</td>";
            echo "   <td>".$row->getTelefono()."</td>";
            echo "   <td>".$row->getPermiso()."</td>";
            echo " </tr>";
            endforeach; 
            echo "</table>";
        }
    }
}