<?php
include 'conexion.php';
session_start();

$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

$stmt = $conexion->prepare("SELECT contraseña,rol,id_tribu,id_curso FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($password, $rol, $id_tribu, $id_curso);

if ($stmt->fetch()) {
    if ($contraseña==$password) {
    $_SESSION["user"] = true;
    $_SESSION["rol"] = $rol;
    $_SESSION["id_tribu"] = $id_tribu;
    $_SESSION["id_curso"] = $id_curso;
    
    header("Location: index.php");
        exit; 
    } else {
        echo "<script type='text/javascript'>alert('Email y o contraseña incorrectos');
        window.location.href = 'login.php';</script>";
    }
} 

$stmt->close();
$conexion->close();
?>