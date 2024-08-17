$("#registro").click(function () {

    var cedulav = $("#cedula").val();
    var nombre_apellidov = $("#nombre_apellido").val();
    var telefonov = $("#telefono").val();
    var emailv = $("#email").val();
    var usuariov = $("#usuario").val();
    var clavev = $("#clave").val();


  
  
    if (cedulav == "") {
      Swal.fire('El Campo Cedula es Obligatorio!')
    } else if (nombre_apellidov == "") {
      Swal.fire('El campo Nombre y Apellido es Obligatorio!')
    }else if (telefonov == "") {
      Swal.fire('El Campo Telefono es Obligatorio')
    }else if (emailv == "") {
      Swal.fire('El Campo Email es Obligatorio')
    } else if (usuariov == "") {
      Swal.fire('El Campo Usuario es Obligatorio!')
    }else if (clavev == "") {
        Swal.fire('La Contraseña es  Obligatorio')
   

    } else {
  
 
        var formData = new FormData();
        var cedula = $("#cedula").val();
        var nombre_apellido = $("#nombre_apellido").val();
        var usuario = $("#usuario").val();
        var clave = $("#clave").val();
        var telefono = $("#telefono").val();
        var email = $("#email").val();
  

        formData.append('cedula', cedula);
        formData.append('nombre_apellido', nombre_apellido);
        formData.append('usuario', usuario);
        formData.append('clave', clave);
        formData.append('telefono', telefono);
        formData.append('email', email);
  
        $.ajax({
          url: 'ajax/registrar.php',
          type: 'post',
          data: formData,
          contentType: false,
          processData: false,
          success: function (response) {

            if (response == "1") {
              Swal.fire({
                title: 'La cedula ya Esta Registrada',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                allowOutsideClick: false,
              }).then((result) => {
                if (result.isConfirmed) {
  
                }
              })
  
            }
            if (response == "2") {
  
              Swal.fire({
                title: 'Usuario Creado con Exito',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                allowOutsideClick: false,
              }).then((result) => {
                if (result.isConfirmed) {
                  $(location).attr('href', "index.php");
                }
              })
  
            }

  
          }
        });
        return false;
      }
  
   
  
  });
