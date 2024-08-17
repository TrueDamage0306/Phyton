<?php

include("conexion.php");
include("funciones.php");

if (isset($_POST["id_usuario"])) {
    $salida = array();
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE id = '".$_POST["id_usuario"]."' LIMIT 1");
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    foreach($resultado as $fila){
        $salida["cedula"] = $fila["cedula"];
        $salida["nombre"] = $fila["nombre"];
        $salida["apellido"] = $fila["apellido"];
        $salida["usuario"] = $fila["usuario"];
        $salida["clave"] = $fila["clave"];
        $salida["nivel"] = $fila["nivel"];
     
    }

    echo json_encode($salida);
}