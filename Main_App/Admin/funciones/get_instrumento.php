<?php
include '../../funciones/conexion.php';
 
    $sql = "select distinct id_instrumento, instrumento, horario, profesor from instrumentos group by instrumento order by instrumento";
    $consultains = mysqli_query($conn, $sql);
    mysqli_close($conn);

?>