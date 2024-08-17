<?php 
include "../config.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="css/app.css" rel="stylesheet">
	<link rel="icon" href="img/favicon.png" type="image/x-icon" />
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-icons.css">
	
	<title>Tutorial Python</title>

</head>
<?php


?>
<body>
	<div class="wrapper">
	
			<?php
				include("menu.php");
				date_default_timezone_set("America/Caracas");
				$fecha_y_hora = date("d-m-Y"); //echo $fecha_y_hora;
				$fechaSegundos = strtotime($fecha_y_hora);
				$xmes = date("n", $fechaSegundos);
				
				switch ($xmes) {
					case 1:
						$mes='Enero';
						break;
					case 2:
						$mes='Febrero';
						break;
					case 3:
						$mes='Marzo';
						break;
					case 4:
						$mes='Abril';
						break;
					case 5:
						$mes='Mayo';
						break;
					case 6:
						$mes='Junio';
						break;
					case 7:
						$mes='Julio';
						break;
					case 8:
						$mes='Agosto';
						break;
					case 9:
						$mes='Septiembre';
						break;
					case 10:
						$mes='Octubre';
						break;
					case 11:
						$mes='Noviembre';
						break;
					case 12:
						$mes='Diciembre';
						break;
				}



				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$stmt = $conn->prepare("SELECT * FROM usuarios WHERE username<>'Admin'");
				$stmt->execute();
				$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$registros = count($result);

				$stmt1 = $conn->prepare("SELECT * FROM usuarios WHERE username<>'Admin' AND on_line='on-line'");
				$stmt1->execute();
				$result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
				$registros1 = count($result1);

				$stmt2 = $conn->prepare("SELECT * FROM usuarios WHERE username<>'Admin' AND on_line='off-line'");
				$stmt2->execute();
				$result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
				$registros2 = count($result2);

				$stmt3 = $conn->prepare("SELECT * FROM entradas WHERE username<>'Admin' AND mes='$mes'");
				$stmt3->execute();
				$result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
				$registros3 = count($result3);

			?>

		<main class="content" >
		<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-dark panel-colorful">
                <div class="panel-body text-center">
                	<p class="text-uppercase mar-btm text-sm"><b>Registrados</b></p>
                	<i class="bi bi-people text-primary"  style="font-size: 40px;"></i>
                	<hr>
                	<p class="h2 text-thin"><?php echo $registros ?></p>
                	 
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-danger panel-colorful">
        		<div class="panel-body text-center">
        			<p class="text-uppercase mar-btm text-sm"><b>On-line</b></p>
                	<i class="bi bi-person-check text-success"  style="font-size: 40px;"></i>
        			<hr>
					<p class="h2 text-thin"><?php echo $registros1 ?></p>
        			
        		</div>
        	</div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-primary panel-colorful">
        		<div class="panel-body text-center">
					<p class="text-uppercase mar-btm text-sm"><b>Off-Line</b></p>
                	<i class="bi bi-person-dash text-danger"  style="font-size: 40px;"></i>
        			<hr>
					<p class="h2 text-thin"><?php echo $registros2 ?></p>
        			
        		</div>
        	</div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
        	<div class="panel panel-info panel-colorful">
        		<div class="panel-body text-center">
					<p class="text-uppercase mar-btm text-sm"><b>Entradas Hoy</b></p>
                	<i class="bi bi-person-plus text-warning"  style="font-size: 40px;"></i>
        			<hr>
        			<p class="h2 text-thin"><?php echo $registros3 ?></p>
        			
        		</div>
        	</div>
        </div>        
	</div>
</div>
			 
		</main>

		<footer>

				
			<?php
				//include("footer.php");
			?>
		</footer>


		
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/app.js"></script>
	

</body>
<script>
	//var d = new Date(); var strDate = d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear();
    //$(".fecha").text(strDate);
</script>
</html>