<?php
//Vamos a crear la lógica de que si el usuario es administrador nos permita entrar a la página
//Es decir, otorgar los permisos según el rol que tenga el usuario. 
   session_start();

   //Hacemos la condicional
   if($_SESSION['us_tipo']==2){

   
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amdministrador</title>
</head>
<body>
   <h1>Bienvenido, técnico</h1>
   <a href="../controlador/Logout.php">Cerrar sesión</a>
    
</body>
</html>

<?php
   }else{
        //Si no  el usuario no es administrador lo redericcionamos nuevamente al login. 
        header('Location:../index.php');
   }

?>