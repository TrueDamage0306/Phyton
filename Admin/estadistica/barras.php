<?php
	require_once "conexion2.php";
	$conexion=conexion();
	//$sql="SELECT fechaVenta,montoVenta 
	//		from ventas order by fechaVenta";
	//include("conn.php");
    //$b1=$_GET["mes"];
    

$sql="SELECT mes, count(username) as tmes  FROM entradas group by mes";
	$result=mysqli_query($conexion,$sql);
	
	$valoresY=array();//montos
	$valoresX=array();//fechas

	while ($ver=mysqli_fetch_row($result)) {
		$valoresY[]=$ver[1];
		$valoresX[]=$ver[0];
	}

	$datosX=json_encode($valoresX);
	$datosY=json_encode($valoresY);
 ?>

<div id="graficaBarras"></div>

<script type="text/javascript">
	function crearCadenaBarras(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x]);
		}
		return arr;
	}
</script>

<script type="text/javascript">

	datosX=crearCadenaBarras('<?php echo $datosX ?>');
	datosY=crearCadenaBarras('<?php echo $datosY ?>');

	var data = [
		{
			x: datosX,
			y: datosY,
			marker:{
				color: ['rgba(77,152,56,1)', 'rgba(53,52,213,0.8)', 'rgba(188, 53, 27,1)', 'rgba(204,204,204,1)', 'rgba(204,204,204,1)']
			},
			type: 'bar'
		}
	];
	
	Plotly.newPlot('graficaBarras', data);
</script>