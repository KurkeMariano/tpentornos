<?php
    include '../../../funciones/conexion.php';
    if ($_REQUEST['delete']) {
        
        $pid = $_REQUEST['delete'];
        $query = "DELETE FROM usuario WHERE dni='$pid'";
        $stmt = $DBcon->prepare( $query );
        $stmt->execute(array(':dni'=>$pid));
        
        if ($stmt) {
        
    echo '<script> alert("Alumno Eliminado con exito");</script>';}
    header("Refresh:0; url=../sesion.php");

        }
        
    }
    mysqli_close($conn);
?>