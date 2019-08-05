<?php

include '../../../funciones/conexion.php';
session_start();
$alumno = $_SESSION['dni'];
header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);


if ($input['action'] == 'edit') {
    $query="UPDATE materias_alumno SET profesor='" . $input['profesor'] . "', dias='" . $input['dias'] . "', horario='" . $input['horario'] . "' WHERE id_materia='" . $input['id_materia'] . "'";
    $consulta = mysqli_query($conn, $query);
} else if ($input['action'] == 'delete') {
  
    $query="DELETE from materias_alumno WHERE id_alumno='$alumno' and id_materia='" . $input['id_materia'] . "'";
    $consulta = mysqli_query($conn, $query);
}



echo json_encode($input);

mysqli_close($conn);

?>