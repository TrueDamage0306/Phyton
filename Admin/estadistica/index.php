<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dataTables.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="icon" href="img/favicon.png" type="image/x-icon" />
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/plotly-latest.min.js"></script>
	<title>Tutorial Python</title>

<style>
    #config{
        text-align: center;
    }
</style>
  </head>
  <body>
  <div class="wrapper">
			<?php
				include("menu.php");
			?>
<main class="content">
    <div class="container fondo">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Estadisticas Entradas por Mes</h1>
            </div>
                            
        </div>     
              
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
							<div class="panel panel-body">
						<div class="row">

							<div class="col-sm-12"id="polo">
								<div id="cargaBarras" style="display: none;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>



		
	</div>

</div>
    
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script src="js/sweetalert2.js"></script>
	<script src="js/app.js"></script>
    <script src="js/dataTables.js"></script>
    
 <script>


$("document").ready(function(){
 
   

   $("#cargaBarras").fadeIn(2000);
             $('#cargaBarras').load("barras.php");
         	
  return false;

});

    </script>
  </body>
</html>
 


