//1. Usamo JQuery
$(document).ready(function(){
    var funcion='';
  //1.1. Capturamos nuestro id usuario
  var id_usuario= $('#id_usuario').val();

  //Colocamos la función
    buscar_usuario(id_usuario);
  // Creamos una función
   function buscar_usuario(dato){
            
           funcion='buscar_usuario';

         $.post('../controlador/UsuarioController.php', {dato, funcion},(response)=>{
            //Pasamos template para que cambié de datos
            let nombre='';
            let apellidos='';
            let edad= '';
            let dni='';   
            let tipo=''; 
            let telefono=''; 
            let residencia='';
            let correo=''; 
            let sexo=''; 
            let adicional='';  
            const usuario = JSON.parse(response);
     
            //Recorremos el Json
            nombre+=`${usuario.nombre}`; 
            apellidos+=`${usuario.apellidos}`; 
            edad+=`${usuario.edad}`;
            dni+=`${usuario.dni}`;
            tipo+=`${usuario.tipo}`;
            telefono+=`${usuario.telefono}`;
            residencia+=`${usuario.residencia}`;
            correo+=`${usuario.correo}`;
            sexo+=`${usuario.sexo}`;
            adicional+=`${usuario.adicional}`;

            //
            $('#nombre_us').html(nombre);
            $('#apellido_us').html(apellidos);
            $('#edad').html(edad);
            $('#dni_us').html(dni);
            $('#us_tipo').html(us_tipo);
            $('#telefono_us').html(telefono);
            $('#residencia_us').html(residencia);
            $('#correo_us').html(corro);
            $('#sexo_us').html(sexo);
            $('#adicional_us').html(adicional);

         } )
   }
})//final