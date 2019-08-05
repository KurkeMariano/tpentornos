<?php
    include '../../funciones/conexion.php';

    $sql = "select id_materia, materia, dias, horario from materias";
    $consulta = mysqli_query($conn, $sql);
    mysqli_close($conn);

?>