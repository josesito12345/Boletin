<?php
class DatasourceB{
  private $dsn;
  private $user;
  private $pass;
  private $PDO;
  private static $instancia;

  private function __construct(){
    try{
      $this->dsn="mysql:host=localhost:3306;dbname=bv";
      $this->user="root";
      $this->pass="";
      $this->PDO=new PDO( $this->dsn,
                          $this->user,
                          $this->pass);
    }
    catch (PDOException $e){
      echo "PDOException ". $e->getMessage();
    }
  }
  //Singleton>>
  public static function getInstancia(){
    if (!isset(self::$instancia)){
      self::$instancia = new self();
    }
    return self::$instancia;
  }
  //Metodo para recuperar registros de la tabla
  public function recuperar($sql="",$values=array()){
    if ($sql!=""){
      $consulta=$this->PDO->prepare($sql);
      $consulta->execute($values) or die($consulta->debugDumpParams());
      $tabla=$consulta->fetchAll(PDO::FETCH_ASSOC);
      return $tabla;
    }
    else{
      return 0;
    }
  }
  //Metodo para actualizar la base de datos
  public function actualizar($sql="",$values=array()){
    if ($sql!=""){
      $consulta=$this->PDO->prepare($sql);
      $consulta->execute($values) or die($consulta->debugDumpParams());
      $nroRegis=$consulta->rowCount();
      return $nroRegis;
    }
    else{
      return 0;
    }
  }
}