
<style type="text/css">

</style>
<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=Listadoequipos.xls');

	include "conn.php";

	//require_once('Conexion.php');
	//$conn=new Conexion();
	//$link = $conn->conectarse();

	$query="SELECT * FROM equipos order by estatus";
	$result=mysqli_query($conexion, $query);
?>
<h2>Listado de Equipos</h2>
<table border="1">
	<tr style="background-color:#E8F8F5; height: 50px; color:black;">
		<th><b>Id</b></th>
		<th><b>Unidad</b></th>
		<th><b><?php echo utf8_decode ("N° Parte"); ?></b></th>
		<th><b>Serial</b></th>
		<th><b><?php echo utf8_decode ("Descripción"); ?></b></th>
		<th><b>Fecha</b></th>
		<th><b>Mes</b></th>
		<th><b>Estatus</b></th>
		<th><b><?php echo utf8_decode ("N° Orden"); ?></b></th>
		<th><b>Fecha Orden</b></th>
		<th><b><?php echo utf8_decode ("Técnico"); ?></b></th>
		<th><b><?php echo utf8_decode ("Revisión"); ?></b></th>
		<th><b>Falla</b></th>
		<th><b><?php echo utf8_decode ("Reparación"); ?></b></th>

	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
	<tr style="height: 50px;">
					<td><?php echo utf8_decode ($row['id']); ?></td>
					<td><?php echo utf8_decode ($row['unidad']); ?></td>
					<td><?php echo utf8_decode ($row['n_parte']); ?></td>
					<td><?php echo utf8_decode ($row['seriale']); ?></td>
					<td><?php echo utf8_decode ($row['descripcion']); ?></td>
					<td><?php echo utf8_decode ($row['fecha']); ?></td>
					<td><?php echo utf8_decode ($row['mes']); ?></td>
					<td><?php echo utf8_decode ($row['estatus']); ?></td>
					<td><?php echo utf8_decode ($row['n_orden']); ?></td>
					<td><?php echo utf8_decode ($row['fecha_orden']); ?></td>
					<td><?php echo utf8_decode ($row['tecnico']); ?></td>
					<td><?php echo utf8_decode ($row['revicion']); ?></td>
					<td><?php echo  utf8_decode ($row['falla']); ?></td>
					<td><?php echo utf8_decode ($row['reparacion']); ?></td>

				</tr>	

			<?php
		}

	?>
</table>