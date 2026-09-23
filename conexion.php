<?php
session_start();
$servidor = "localhost";   
$usuario = "root";         
$password = "";            
$base_datos = "desafio intertribus"; 
$conexion = new mysqli($servidor, $usuario, $password, $base_datos);


if ($conexion->connect_error) {
    die("Conexión a la base de datos fallida: " . $conexion->connect_error);
}
else{
    echo "Conexion exitosa a la base de datos";
}

$conexion->close();
?>