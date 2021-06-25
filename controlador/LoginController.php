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



if(!empty($_SESSION['us_tipo'])){
    
        //Hacemos un switch para verificar qué tipo de usuario inicio sesión
        switch($_SESSION['us_tipo']){
            case 1: 
                 header('Location:../vista/adm_catalogo.php');
                 break;
    
            case 2:
                header('Location:../vista/tec_catalogo.php');
                break;  
        }

}else{
    $usuario->Loguearse($user,$pass);
    //Hacemos un if para saber qué rol tiene el usuario(si es administrador o tiene otro rol )
if(!empty($usuario->objetos)){
           
    //forEach
    foreach($usuario->objetos as $objeto){
         $_SESSION['usuario']=$objeto->id_usuario;
         $_SESSION['us_tipo']=$objeto->us_tipo;
         $_SESSION['nombre_us']= $objeto-> nombre_us;
    }
    //Hacemos un switch para verificar qué tipo de usuario inicio sesión
        switch($_SESSION['us_tipo']){
            case 1: 
                 header('Location:../vista/adm_catalogo.php');
                 break;
    
            case 2:
                header('Location:../vista/tec_catalogo.php');
                break;  
        }
    
    }else{
        header('Location:../index.php');//Para que nos retorno al mismo login si en caso no existe el usuario
    }
}











?>