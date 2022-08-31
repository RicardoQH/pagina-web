<?php
include 'conexion.php';

$email=$_POST['email'];
$pass=$_POST['pass'];

$sentencia="SELECT * FROM users WHERE email=? AND pass=?";
$resultado=$conexion -> query($sentencia);

while($fila=$resultado->fetch_array()){
    $usuario[]=array_map('utf8_encode',$fila);
}

echo json_encode($usuario);
$resultado->close();

?>