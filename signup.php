<?php  

$conexion = new Mongo();
$db = $conexion->proyecto->usuarios;

$usuario = $_POST["inputName"];
$email = $_POST["inputEmail"];
$pass = $_POST["inputPassword"];

$registrar = array( "usuario" => $usuario, "email" => $email, "password"=>$pass );

$db->insert( $registrar );   
echo "Registrado!!";

?>