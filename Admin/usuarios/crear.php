<?php

include("conexion.php");
include("funciones.php");

if ($_POST["operacion"] == "Crear") {

    $stmt = $conexion->prepare("INSERT INTO usuarios(cedula, nombre, apellido, usuario, clave,nivel)VALUES(:cedula, :nombre, :apellido, :usuario, :clave, :nivel)");

    $resultado = $stmt->execute(
        array(
            ':cedula'    => $_POST["cedula"],
            ':nombre'    => $_POST["nombre"],
            ':apellido'    => $_POST["apellido"],
            ':usuario'    => $_POST["usuario"],
            ':clave'    => $_POST["clave"],
            ':nivel'    => $_POST["nivel"]
        )
    );

    if (!empty($resultado)) {
       // echo 'Registro creado';
    }
}


if ($_POST["operacion"] == "Editar") {
   


    $stmt = $conexion->prepare("UPDATE usuarios SET  clave=:clave, nivel=:nivel WHERE id = :id");

    $resultado = $stmt->execute(
        array(
           // ':nombre'    => $_POST["nombre"],
            //':apellidos'    => $_POST["apellido"],
           // ':usuario'    => $_POST["usuario"],
            ':clave'    => $_POST["clave"],
            ':nivel'    => $_POST["nivel"],
            ':id'    => $_POST["id_usuario"]
        )
    );

    if (!empty($resultado)) {
        echo 'Registro actualizado';
    }
}