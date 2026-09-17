<?php

    require_once(../config/conexion.php)

    requiere_once(../model/Productos.php)

    $producto = new Productos();

    switch($_GET("op")){

        case "listar"

        $datos = $producto->get_producto();

        $data = Array();

        foreach($datos as $row){

            $sub_array[] = $row["prod_nom"];
            $sub_array[] = $row["prod_id"];
            $sub_array[] = $row["prod_id"];

            $data[] = $sub_array;

        }

        $results = array(
            "sEcho" =>1,
            "iTotalRecords" => cout ($data),
            "iTotalDisplayRecords" => count ($data),
            "aaData" => $data
        )

        echo json_encode($data[]);

        break;
    }

?>