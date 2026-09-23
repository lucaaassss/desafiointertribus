<?php
session_start();
$servidor = "localhost";   
$usuario = "root";         
$password = "";            
$base_datos = "desafio intertribus"; 
$conexion = new mysqli($servidor, $usuario, $password, $base_datos);
$id=$_POST['id'];
$stmt = $conexion->prepare("SELECT id_usuario FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $_SESSION["email"]);
$stmt->execute();
$stmt->bind_result($ids);
if ($conexion->connect_error) {
    die("Conexión a la base de datos fallida: " . $conexion->connect_error);
    
}
if($ids == null)
    {
        $ids= 0;
    }

foreach($ids as $a)
    {
        if($ids == 0)
            {
                break;
            }
        else if($id==$ids)
            {
                break;
            }
    }
    if($id == $a)
        {
            header('location:../../idex.php');
            /*agregar la url del usuario no me acuerdo como mandar a pestañas lol*/ 
        }
        else
            {
            echo "header('location:../../buscar.php');";
            }


