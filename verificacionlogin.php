<?php
include 'conexion.php';
session_start();

$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

$stmt = $conexion->prepare("SELECT contraseña FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($password_hash_db);


if ($stmt->fetch()) {
    if (password_verify($contraseña, $password_hash_db)) {
        header("Location: index.php");
        $_SESSION["email"] = $email;
        exit; 
    } else {
        echo "<script type='text/javascript'>alert('Contraseña incorrecta');
        window.location.href = 'login.php';</script>";
    }
} else {
    echo "<script type='text/javascript'>alert('Email incorrecto');
        window.location.href = 'login.php';</script>";
}

$stmt->close();
$conexion->close();
?>