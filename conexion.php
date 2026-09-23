<?php
session_start();
$servidor = "localhost";   
$usuario = "root";         
$password = "";            
$base_datos = "desafio intertribus"; 
$conexion = new mysqli($servidor, $usuario, $password, $base_datos);
?>