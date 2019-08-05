<?php
include 'conexion.php';
    session_start();
    $dni = $_SESSION['dni'];
    $sql2 = "select * from usuario where dni = '$dni'";
    $consulta2 = mysqli_query($conn, $sql2);
    
    mysqli_close($conn);

?>