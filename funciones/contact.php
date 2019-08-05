<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$tipo_consulta = $_POST['tipo_consulta'];
header('Content-Type: application/json');
if ($name === ''){
print json_encode(array('message' => 'Tu nombre no puede estar vacio', 'code' => 0));
exit();
}
if ($email === ''){
print json_encode(array('message' => 'Tu direccion de mail no puede estar vacio', 'code' => 0));
exit();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
print json_encode(array('message' => 'Formato de Email invalido.', 'code' => 0));
exit();
}
}
if ($tipo_consulta === ''){
print json_encode(array('message' => 'El tipo de consulta no puede estar vacio', 'code' => 0));
exit();
}
if ($message === ''){
print json_encode(array('message' => 'El mensaje no puede estar vacio', 'code' => 0));
exit();
}
$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "mek1994@hotmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $tipo_consulta, $content, $mailheader) or die("Error!");
exit();

header("Location: ../contacto.php");

?>