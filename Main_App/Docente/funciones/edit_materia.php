<?php


include '../../../funciones/conexion.php';

header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);


if ($input['action'] == 'edit') {
    $query="UPDATE materias SET horario='" . $input['horario'] . "' WHERE id_materia='" . $input['id_materia'] . "'";
    $consulta = mysqli_query($conn, $query);
} 

mysqli_close($conn);

echo json_encode($input);



?>