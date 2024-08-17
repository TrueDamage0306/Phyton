<?php
// Incluimos el archivo conexión
require_once('../db/conexion.php');
require_once('../db/clase.php');
// Instancia del objeto classe Login
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dataTables.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
	<link rel="icon" href="img/favicon.png" type="image/x-icon" />
	
	<title>Tutorial Python</title>
  </head>
  <body>
  <div class="wrapper">
			<?php
				include("menu.php");
			?>

		<main class="content">
            <div class="container fondo">

    <h1 class="text-center">ENTRADAS DE USUARIOS</h1>

    <br />
    <br />
    <div class="table-responsive">
        <table id="datos_usuario" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Mes</th>
                    <th>Opciones</th>
                </tr>
            </thead>
        </table>
    </div>
    </div>


		</main>
		
	</div>


    
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mask.js"></script>
	<script src="js/app.js"></script>
    <script src="js/dataTables.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->


    <script type="text/javascript">
        $(document).ready(function(){
            $("#botonCrear").click(function(){
                $("#formulario")[0].reset();
                $(".modal-title").text("Crear Usuario");
                $("#action").val("Crear");
                $("#operacion").val("Crear");
               
            });
            
            var dataTable = $('#datos_usuario').DataTable({
                 'rowCallback': function (row, data, index) {
                    if (data[1]== 'Administrador') {
                    $(row).hide(); 
                }

 
                },
                "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, "Todos"]],
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    url: "obtener_registros.php",
                    type: "POST"
                },
                "columnsDefs": [
                    {
                        "targets": [0, 3, 4],
                        "orderable": false,
                    },
                ],
                "language": {
                    "decimal": "",
                    "emptyTable": "No hay registros",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar Desripción:",
                    "zeroRecords": "Sin resultados encontrados",

                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
            //Aquí código inserción
         

            //Funcionalida de borrar
            $(document).on('click', '.borrar', function(){
                var id_usuario = $(this).attr("id");

                $("#eliminar").fadeIn();
                $("#iden").text(id_usuario);
                        $(document).on('click', '#eli', function(){
                            var opcion=1;
                                if(opcion=="1"){
                                      $.ajax({
                                        url:"borrar.php",
                                        method:"POST",
                                        data:{id_usuario:id_usuario},
                                        success:function(data)
                                        {
                                           // alert(data);
                                            dataTable.ajax.reload();
                                            $("#eliminar").fadeOut();
                                        }
                                    });
                    
                                }
                    
                        
                        });
                  
                
             
                
            });
           
            $(document).on('click', '#cerrar', function(){

                $("#eliminar").fadeOut();
                
                  
                
             
                
            });



          /*  $(document).on('click', '.borrar', function(){
                var id_usuario = $(this).attr("id");
                if(confirm("Esta seguro de borrar este registro:" + id_usuario))
                {
                    $.ajax({
                        url:"borrar.php",
                        method:"POST",
                        data:{id_usuario:id_usuario},
                        success:function(data)
                        {
                            alert(data);
                            dataTable.ajax.reload();
                        }
                    });
                }
                else
                {
                    return false;	
                }
            });*/

        });         
    </script>
    <!-- Modal -->
<div class="modal " id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content bg-dark modal-dialog modal-md">
      <div class="modal-header">
        <h2 class="modal-title text-white" id="exampleModalLabel">Eliminar Usuario</h2>
      
      </div>
     

            <div class="modal-content bg-dark">
                <div class="modal-body">
                     <h3 class="text-white">Confirma que Desea Elimmnar el Registro ?</h3> 
                </div>

                <div class="modal-footer bg-dark">
      
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal" aria-label="Close" id="cerrar">Cerrar</button>          
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close" id="eli">Borrar</button>   
            </div>
        
      </div>     
  </div>
</div>


  </body>
</html>



