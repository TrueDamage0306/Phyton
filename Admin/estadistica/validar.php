<?php 
include "conn.php";

$b = $_POST["bus"];

$sql = "SELECT * FROM cadetes
    WHERE cedula = '$b' ";



/*$consulta=mysqli_query($conexion,$sql);
  $row=mysqli_fetch_array($consulta); 
    
  $rowcount=mysqli_num_rows($consulta);
  //printf("Result set has %d rows.\n",$rowcount); mostrar resultado
 if($rowcount > 0){ 
           $salida=$rowcount;
          $salida2=$row["nombre"];
}  
    else{
      $salida=$b;
    }
    
echo "$salida";*/

$consulta=mysqli_query($conexion,$sql);
	$row=mysqli_fetch_array($consulta); 
		$salida=$row["cedula"];
		$salida2=$row["nombre"];
		$salida3=$row["apellido"];
		$salida4=$row["genero"];
		$salida5=$row["ingreso"];
		$salida6=$row["egreso"];
		$salida7=$row["componente"];
		$salida8=$row["academia"];
		$salida9=$row["imagen"];
		$salida10=$row["gerarquia"];

		$salida11=$row["baja_motivo"];
		$salida12=$row["descripcion_baja"];

		//$salida11=$row["estado"];
		//$salida7=$row["direccion"];
		


echo "$salida,$salida2,$salida3,$salida4,$salida5,$salida6,$salida7,$salida8,$salida9,
$salida10,$salida11,$salida12";

?>
