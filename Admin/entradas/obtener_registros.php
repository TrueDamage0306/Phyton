<?php

    include("conexion.php");
    include("funciones.php");

    $query = "";
    $salida = array();
    $query = "SELECT * FROM entradas ";

    if (isset($_POST["search"]["value"])) {
       $query .= 'WHERE username LIKE "%' . $_POST["search"]["value"] . '%" ';
       $query .= 'OR fecha LIKE "%' . $_POST["search"]["value"] . '%" ';
       $query .= 'OR mes LIKE "%' . $_POST["search"]["value"] . '%" ';
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
        $sub_array[] = $fila["username"];
        $sub_array[] = $fila["fecha"];
        $sub_array[] = $fila["hora"];
        $sub_array[] = $fila["mes"];
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
