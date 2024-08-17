<?php

    include("conexion.php");
    include("funciones.php");

    $query = "";
    $salida = array();
    $query = "SELECT * FROM usuarios ";

    if (isset($_POST["search"]["value"])) {
       $query .= 'WHERE nombre_apellido LIKE "%' . $_POST["search"]["value"] . '%" ';
       $query .= 'OR username LIKE "%' . $_POST["search"]["value"] . '%" ';
       $query .= 'OR on_line LIKE "%' . $_POST["search"]["value"] . '%" ';
    }

    if (isset($_POST["order"])) {
        $query .= 'ORDER BY' . $_POST['order']['0']['column'] .' '.$_POST["order"][0]['dir'] . ' ';        
    }else{
        $query .= 'ORDER BY id ASC ';
    }

    if($_POST["length"] != -1){
        $query .= 'LIMIT ' . $_POST["start"] . ','. $_POST["length"];
    }

    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    $datos = array();
    $filtered_rows = $stmt->rowCount();
    foreach($resultado as $fila){
 
        $sub_array = array();
        $sub_array[] = $fila["id"];
        $sub_array[] = $fila["nombre_apellido"];
        $sub_array[] = $fila["username"];
        $sub_array[] = $fila["on_line"];
        //$sub_array[] = $fila["clave"];
       // $sub_array[] = $fila["nivel"];

        $sub_array[] = '<center><button type="button" name="borrar" id="'.$fila["id"].'" class="btn btn-danger btn-xs borrar"><i class="bi bi-trash-fill"></i></button></center>';
       // $sub_array[] = '<button type="button" name="borrar" id="'.$fila["id"].'" class="btn btn-danger btn-xs borrar"><i class="bi bi-trash-fill"></i> Borrar</button>';
        $datos[] = $sub_array;
    }

    $salida = array(
        "draw"               => intval($_POST["draw"]),
        "recordsTotal"       => $filtered_rows,
        "recordsFiltered"    => obtener_todos_registros(),
        "data"               => $datos
    );

    echo json_encode($salida);
