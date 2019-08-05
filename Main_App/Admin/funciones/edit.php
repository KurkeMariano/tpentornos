<?php

include '../../../funciones/conexion.php';

header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);


if ($input['action'] == 'edit') {
    $query="UPDATE usuario SET nombre='" . $input['nombre'] . "', apellido='" . $input['apellido'] . "', mail='" . $input['mail'] . "', fecha_nacimiento='" . $input['fecha_nacimiento'] . "', telefono='" . $input['telefono'] . "', instrumento='" . $input['instrumento'] . "' WHERE dni='" . $input['dni'] . "'";
    $consulta = mysqli_query($conn, $query);
    echo $query;
} else if ($input['action'] == 'delete') {
    $query="DELETE from usuario WHERE dni='" . $input['dni'] . "'";
    $consulta = mysqli_query($conn, $query);

}

mysqli_close($conn);

echo json_encode($input);


?>