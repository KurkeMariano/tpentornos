<?php

$accion = $_POST['accion'];
$password = $_POST['passlg'];
$usuario = $_POST['usuariolg'];

if($accion === 'crear') {
    include '../funciones/conexion.php';
    // Código para crear los administradores
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $fecha_nac = $_POST['fecha_nac'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $provincia = $_POST['provincia'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $piso = $_POST['piso'];
    $dpto = $_POST['dpto'];
    $instrumento = $_POST['instrumento'];
    // hashear passwords
    $opciones = array(
        'cost' => 12
    );
    $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
    // importar la conexion
    include '../funciones/conexion.php';

    $vSql = "SELECT Count(dni) as canti FROM usuario WHERE dni= $dni ";
    $vSql2= "INSERT INTO usuario (tipo_usuario, desc_usuario, dni, usuario, password, nombre, apellido, fecha_nacimiento, mail, telefono, provincia, ciudad, direccion, piso, dpto, instrumento, fecha_ingreso, fecha_egreso, activo) VALUES (1,'Alumno',$dni, $apellido , $nombre , $hash_password, $nombre.$apellido, $fecha_nac, $mail, $telefono, $provincia, $ciudad, $direccion, $piso, $dpto, $instrumento, time() ,'',1) ";
       
    
    $vResultado = mysqli_query($conn, $vSql) or die (mysqli_error($conn));;
    $vCantUsuarios = mysqli_fetch_assoc($vResultado);
    //$vCantUsuarios = mysqli_result($vResultado, 0);
    if ($vCantUsuarios ['canti']!=0){
    echo ("El Usuario ya Existe<br>");
    echo ("<A href='formulario.php'>Reiniciar formulario</A>");
    }
    else {
     mysqli_query($conn, $vSql2) or die (mysqli_error($conn));
    echo("El Usuario fue Registrado, Pronto recibirás un email, confirmandote la actualizaciòn a
    nuestra pagina<br>");
    }
    // Cerrar la conexion
    mysqli_close($conn); 
}
if($accion === 'login') {
    // escribir codigo que loguee a los administradores
    
    include '../funciones/conexion.php';
    
    try {
        // Seleccionar el administrador de la base de datos
        $stmt = $conn->prepare("SELECT usuario, password FROM usuario WHERE usuario = ?");
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        // Loguear el usuario
        $stmt->bind_result($nombre_usuario, $pass_usuario);
        $stmt->fetch();
        if($nombre_usuario){
            // El usuario existe, verificar el password
            if(password_verify($password,$pass_usuario )){
                // Iniciar la sesion
                session_start();
                $_SESSION['nombre'] = $usuario;
                $_SESSION['login'] = true;
                // Login correcto
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'nombre' => $nombre_usuario,
                    'tipo' => $accion
                );
            } else {
                // Login incorrecto, enviar error
                $respuesta = array(
                        'resultado' => 'Password Incorrecto'
                );
            }

        } else {
            $respuesta = array(
                'error' => 'Usuario no existe'
            );
        }
        $stmt->close();
        $conn->close();
    } catch(Exception $e) {
        // En caso de un error, tomar la exepcion
        $respuesta = array(
            'pass' => $e->getMessage()
        );
    }
    
    echo json_encode($respuesta);
}







