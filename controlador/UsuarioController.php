<?php

   //1. Incluimos el modelo
   include_once '../modelo/Usuario.php';

   //1.1. Treamos los datos
   $usuario= new Usuario();//Instanciamos
   
   //2. Comparamos mediante un if sobre qué función está realizando. 
   if($_POST['funcion']=='buscar_usuario'){
  
          $json=array();

        //2.1. Invocamos los datos
        $usuario-> obtener_datos($_POST['dato']);

        foreach($usuario->objetos as $objeto){
                $json[]=array(
                    'nombre'=> $objeto -> nombre_us, 
                    'apellidos'=>$objeto->apellido_us,
                    'edad'=> $objeto->edad,
                    'dni'=> $objeto->dni_us, 
                    'tipo'=>$objeto->nombre_tipo,
                    'tipo'=> $objeto->nombre_tipo, 
                    'telefono'=>$objeto->telefono_us,
                    'residencia'=>$objeto->residencia_us, 
                    'correo'=>$objeto->sexo_us,
                    'adicional'=> $objeto->adicional_us
                    
                );
        }

      $jsonstring= json_encode($json[0]);
      echo $jsonstring;

   }//finalCondicional



















?>