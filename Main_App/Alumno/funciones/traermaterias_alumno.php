<?php
	include '../../funciones/conexion.php';
    $alumno = $_SESSION['dni'];
    $sql = "select id_materia, materia, profesor, dias, horario from materias_alumno where id_alumno = '$alumno'";
    $consulta = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>