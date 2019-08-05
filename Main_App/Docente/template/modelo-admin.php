<?php

    $accion = $_POST['accion'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];


if($accion === 'crear'){

    try{
        //realizar consulta a la db
        $stmt = $conn->prepare("SELECT * FROM USUARIO WHERE USUARIO =? AND PASSWORD =? ");
        $stmt->bind_param('ss', $usuario, $hash_password);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            $respuesta = array(
                'respuesta' => 'correcto',
                'id_insertado' => $stmt->insert_id,
                'tipo' => $accion
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $conn->close();
        
    } catch(Exception $e){
        $respuesta = array(
            'pass'=> $e->getMessage()
        );
    }

}

if($accion === 'login'){

    include '../funciones/conexion.php';

    $password = $_POST[''];
    $usuario = $_POST[''];

    $opciones = array(
        'cost' => 10
    );
    
    $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
    
    
    try{
        //realizar consulta a la db
        $stmt = $conn->prepare("SELECT USUARIO, PASSWORD FROM USUARIO WHERE USUARIO =?");
        $stmt->bind_param('s', $usuario);
        $stmt->execute();
        //LOGUEAR USUARIO
        $stmt->bind_result($db_usuario, $db_password);
        $stmt->fetch();
        
        if($usuario){
            if(password_verify($password,$db_password )){
                //Login correcto
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'nombre' => $db_usuario
                );
            } else{
                //Login incorrecto
                'respuesta' => 'Password incorrecto'
            };
            $respuesta = array(
                'usuario' => $db_usuario,
                'password' => $db_password
            );
        } else {
            $respuesta = array(
                'error' => 'EL usuario no existe'
            );
        }
        $stmt->close();
        $conn->close();
        
    } catch(Exception $e){
        $respuesta = array(
            'pass'=> $e->getMessage()
        );
    }
    
    
    }
    
   
}

?>