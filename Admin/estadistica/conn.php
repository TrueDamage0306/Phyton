<?php
$conexion=mysqli_connect("localhost","root","","python");
if (!$conexion) {
	die("Ha fallado la conexión" . mysqli_connect_error());
} 
?>