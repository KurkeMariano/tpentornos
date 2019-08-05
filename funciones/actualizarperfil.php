<?php
include 'conexion.php';
    session_start();
    $dni = $_SESSION['dni'];
    $mail = $_POST['mail']; 
    $tel = $_POST['telefono'];
    $provincia = $_POST['cbx_provincia'];
    $ciudad =$_POST['cbx_ciudad'];
    $direccion =$_POST['direccion'];
    $piso=$_POST['piso'];
    $dpto =$_POST['dpto'];
    $sql2 = "update usuario set mail = '$mail', telefono = '$tel' ,  provincia = '$provincia', ciudad = '$ciudad', direccion='$direccion', piso = '$piso', dpto ='$dpto' where dni = '$dni'";
    $consulta2 = mysqli_query($conn, $sql2);
    
    mysqli_close($conn);

    header("Location: ../Main_App/Alumno/perfil.php");

?>