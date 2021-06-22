<?php
//Vamos a crear la lógica de que si el usuario es administrador nos permita entrar a la página
//Es decir, otorgar los permisos según el rol que tenga el usuario. 
   session_start();

   //Hacemos la condicional
   if($_SESSION['us_tipo']==1){  

      //Aquí incluimos la parte del header que acortamos
      include_once('layouts/header.php')
   
?>

  <title>Farmacia</title>
 
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
            <h1>Bienvenido</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Título del contenido</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          El sitio web de la farmacia está quedando chévere.
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php
//Incluiremos el footer 
include_once('layouts/footer.php');

   }else{
        //Si no  el usuario no es administrador lo redericcionamos nuevamente al login. 
        header('Location:../vista/login.php');
   }

?>