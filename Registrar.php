<?php
    $nombre=$_GET["nameuser"];
    $email=$_GET["email"];
    $pass=$_GET["pass"];

    $cont=0;
    include("conexion.php");

    $q=mysqli_query($conexion,"INSERT INTO users(id,nameuser,email,pass)VALUES('NULL','$nombre','$email','$pass');");

    if($q){
        echo "Registro exitoso";
    }else{
        echo "Fallo";
    }
?>