<?php
include '../../funciones/conexion.php';
    $id_provincia = $_POST['id_provincia'];
    $queryM = "SELECT distinct ciudad_nombre FROM ciudad WHERE provincia_id = '$id_provincia' ORDER BY ciudad_nombre";
    $resultadoM = mysqli_query($conn,$queryM);
    
    $html= "<option value='0'>Ciudad...</option>";
    
    while($rowM = $resultadoM->fetch_assoc())
    {
       $html.= "<option value='".$rowM['ciudad_nombre']."\'>".$rowM['ciudad_nombre']."</option>";
    }
    
    echo $html;
    mysqli_close($conn);
 ?>