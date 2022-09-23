<?php
//Vamos a crear la lógica de que si el usuario es administrador nos permita entrar a la página
//Es decir, otorgar los permisos según el rol que tenga el usuario. 
   session_start();

   //Hacemos la condicional
   if($_SESSION['us_tipo']==1){  

      //Aquí incluimos la parte del header que acortamos
      include_once('layouts/header.php')
   
?>

  <title>Adm | Editar Datos</title>
 
 <!--- Inlcuimos el navegador al igual que lo hicimos con el header --->
 <?php
 
 include_once('layouts/nav.php')
?>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Datos personales</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../vista/adm_catalogo.php">Home</a></li>
              <li class="breadcrumb-item active">Datos personales</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>    

    <!---Creamos otro section ---->
    <section>
      <div class="content">
          <div class="container-fluid">
              <div class="row">
                   <!---1. Vamos a colocar cards--->
                      <div class="col-md-3">
                           <div class="card card-info card-outline">
                                  <div class="card-body box-profile">
                                      <div class="text-center">
                                           <img src="../img/perfil.jpg" class="profile-user-img img-fluid img-circle">
                                      </div>

                                      <!---Creamos un input --->
                                      <input type="hidden" id="id_usuario" value="<?php echo $_SESSION['usuario']; ?>">

                                      <h3 class="profile-username text-center text-info" id="nombre_us">Nombre</h3>
                                      <p class="tex-muted text-center" id="apellido_us">Apellidos</p>
                                         <ul class="list-group list-group-unbordered mb-3">
                                              <li class="list-group-item">
                                                  <b style="color:#4CC4B9" >Edad</b><a id="edad" class="float-right">20</a>
                                              </li>

                                              <li class="list-group-item">
                                                  <b style="color:#4CC4B9" >DNI</b><a  id="dni_us" class="float-right">20</a>
                                              </li>

                                              <li class="list-group-item">
                                                  <b style="color:#4CC4B9">Tipo de usuario</b>
                                                  <span class="float-right badge badge-primary" id="us_tipo">Administrador</span>
                                              </li>

                                          </ul>
                                  </div>
                           </div>

                           <!---Aquí colocaremos un nuevo card---->
                             <div class="card card-info">
                                   <!--Dividimos el card en tres partes --->
                                     <div class="card-header">
                                          <h3 class="card-title">Sobre mí</h3>
                                     </div>

                                     <div class="card-body">
                                          <strong style="color:#4CC4B9">
                                              <i class="fas fa-phone mr-1" ></i>Télefono
                                          </strong>
                                          <p class="text-muted" id="telefono_us">9787799</p>

                                          <strong style="color:#4CC4B9">
                                              <i class="fas fa-map-marker-alt mr-1" ></i>Residencia
                                          </strong>
                                          <p class="text-muted" id="residencia_us">9787799</p>

                                          <strong style="color:#4CC4B9">
                                              <i class="fas fa-at mr-1" ></i>Correo electrónico
                                          </strong>
                                          <p class="text-muted" id="correo_us">correoprueba@gmail.com</p>

                                          <strong style="color:#4CC4B9">
                                              <i class="fas fa-smile-wink mr-1" ></i>Sexo
                                          </strong>
                                          <p class="text-muted" id="sexo_us">Masculino</p>

                                          <strong style="color:#4CC4B9">
                                              <i class="fas fa-pencil-alt mr-1" ></i>Información adicional
                                          </strong>
                                          <p class="text-muted" id="adicional_us">Adicional</p>
                                       
                                        <!----Colocamos un botón ------------------>
                                          <button class="btn btn-block bg-gradient-danger">Editar</button>

                                     </div>

                                     <div class="card-footer">
                                           <p class="text-muted">Click para editar</p>
                                     </div>

                             </div>
                      </div>

                      <!---2. Vamos agregar otro card que ocupará el espacio restante --->
                      <div class="col-md-9">
                            <div class="card-info">
                                 <div class="card-header">
                                     <h3 class="card-title">Editar datos personales</h3>
                                 </div>

                                 <div class="card-body">
                                      <form class="form-horizontal">
                                           <div class="form-group row">
                                               <label for="telefono" class="col-sm-2 col-form-label">Télefono</label>
                                                <div class="col-sm-10">
                                                   <input type="number" id="telefono" class="form-control">
                                                </div>
                                           </div>

                                           <div class="form-group row">
                                               <label for="residencia" class="col-sm-2 col-form-label">Residencia</label>
                                                <div class="col-sm-10">
                                                   <input type="text" id="residencia" class="form-control">
                                                </div>
                                           </div>

                                           <div class="form-group row">
                                               <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                                                <div class="col-sm-10">
                                                   <input type="text" id="correo" class="form-control">
                                                </div>
                                           </div>

                                           <div class="form-group row">
                                               <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
                                                <div class="col-sm-10">
                                                   <input type="text" id="sexo" class="form-control">
                                                </div>
                                           </div>

                                           <div class="form-group row">
                                               <label for="adicional" class="col-sm-2 col-form-label">Información adicional</label>
                                                <div class="col-sm-10">
                                                   <textarea class="form-control" id="adicional" cols="30" rows="10"></textarea>
                                                </div>
                                           </div>
                                           
                                           <!---pal botón-->
                                             <div class="form-group row">
                                                 <div class="offset-sm-2 col-sm-10 float-right">
                                                      <button class="btn btn-block btn-outline-success">Guardar</button>
                                                 </div>
                                             </div>

                                      </form>
                                 </div>

                                 <div class="card-footer">
                                   <p class="text-muted">Ingrese los datos correctamente</p>
                                 </div>
                            </div>
                      </div>
              </div>
          </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->


<?php
//Incluiremos el footer 
include_once('layouts/footer.php');

   }else{
        //Si no  el usuario no es administrador lo redericcionamos nuevamente al login. 
        header('Location:../index.php');
   }

?>
<script src="../js/Usuario.js"></script>