<?php

//0. Incluimos el archivo Conexión para poder hacer uso en la herencia
require_once ('Conexion.php');


//1. Crearemos la clase Usuario que heredará la conexión a la base de datos de la clase Conexión
class Usuario extends Conexion{
    //2. Declaramos variable y atributos
    var $objetos;
    
    //3. Creamos el constructor
    public function __construct(){
        $db=new Conexion();
        $this->acceso= $db->pdo;
    }//constructor

    //3.1. Creamos funciones donde estará nuestra consulta para poder loguearse(ingresar)
    function Loguearse($dni, $pass){
         $sql= "SELECT * FROM usuario INNER JOIN tipo_us ON  us_tipo= id_tipo_us WHERE dni_us=:dni AND contrasena_us=:pass ";
         $query= $this->acceso->prepare($sql);
         $query->execute(array(':dni'=>$dni, ':pass' =>$pass));
         $this->objetos=  $query->fetchall();

         return $this->objetos;
    }

    //3.2. Creamos otro método
    function obtener_datos($id){
        $sql= "SELECT * FROM usuario JOIN tipo_us ON us_tipo=id_tipo_us AND id_usuario=:id";
        $query= $this->acceso->prepare($sql);
        $query->execute(array(':id'=>$id));
        $this->objetos=  $query->fetchall();

        return $this->objetos;
   }









}//finalClase








?>