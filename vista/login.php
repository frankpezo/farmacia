<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <title>Inicio de sesión</title>
</head>
<body>
    
<!---1. Colocamos la imagen ---->
<img class="wave" src="../img/wavee.png" alt="">
<div class="contenedor">
    <div class="img">
       <img src="../img/bgaa.svg" alt="">
    </div>
    <!--2. Aquí será el contenido del formulario --->
      <div class="contenido-login">
           <!---2.1. El formulario--->
           <form action="../controlador/LoginController.php" method="POST">
               <img src="../img/drogas.png" alt="">
               <!--- Titulo --->
               <h2>Farmacia</h2>
                <div class="input-div dni">
                  <!--Colocaremos un icono --->
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>DNI</h5>
                        <input type="text" name="user" class="input">
                    </div>
                </div>
                <!---Contraseña--->
                <div class="input-div pass">
                      <div class="i">
                         <i class="fas fa-lock"></i>
                      </div>
                     <div class="div">
                          <h5>CONTRASEÑA</h5>
                          <input type="password" name="pass" class="input">
                      </div>
                </div>

                <a href="#">Crear Warpiece</a>
                <input type="submit" name="btn" class="btn" value="Iniciar Sesión">
           </form>
      </div>
</div>

</body>


<script src="../js/login.js"></script>
</html>