<?php


include '../../../funciones/conexion.php';

header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);


if ($input['action'] == 'edit') {
    $query="UPDATE usuario SET nota_parcial='" . $input['nota_parcial'] . "', nota_final='" . $input['nota_final'] . "' WHERE dni='" . $input['dni'] . "'";
    $consulta = mysqli_query($conn, $query);
} else if ($input['action'] == 'delete') {
    $query="UPDATE usuario SET nota_parcial='', nota_final='' WHERE dni='" . $input['dni'] . "'";
    $consulta = mysqli_query($conn, $query);
}

mysqli_close($conn);

echo json_encode($input);



?>