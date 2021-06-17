<?php
//Incluimos el Usuario
require_once ('../modelo/Usuario.php');

//1. Iniciamos sesión
session_start(); 

//2. Declaramos variables para jalarlo con el método POST
$user= $_POST['user'];
$pass= $_POST['pass'];

//echo $user . ' '. $pass;

//2.1. Vemos si el dato ya perteneces algún usuario de la base de datos
$usuario = new Usuario();
$usuario->Loguearse($user,$pass);

//forEach
foreach($usuario->objetos as $objeto){
    print_r($objeto);
}



?>