<?php

//1. Creamos la clase conexión para poder hacer la conexión a la 
// base de datos usando el PDO
class Conexion{
  //2. Declaramos atributos
   private $servidor='localhost';
   private $usuario='root';
   private $contrasena='';
   private $db='farmacia';
   private $puerto=3306;
   private $charset='utf8';
   public $pdo=null;//La hacemos pública porque esto retornará algo
   private $atributos=[PDO::ATTR_CASE=>PDO::CASE_LOWER, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_ORACLE_NULLS=>PDO::NULL_EMPTY_STRING, PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_OBJ];

   //3. Creamos nuestro método constructor
   public function __construct(){
       $this->pdo= new PDO("mysql:dbname={$this->db}; host={$this->servidor}; port={$this->puerto}; charset={$this->charset}", $this->usuario, $this->contrasena, $this->atributos);
   }

}//finClase










?>