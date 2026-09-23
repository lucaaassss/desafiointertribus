<?php
session_start();
$id=$_POST['id'];
$conexion = new mysqli($servidor, $usuario, $password, $base_datos);
$ids = $conexion[$usuario($id)];
if ($conexion->connect_error) {
    die("Conexión a la base de datos fallida: " . $conexion->connect_error);
    
}
if($id == null)
    {
        $id== 0;
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
            /*agregar la url del usuario no me acuerdo como mandar a pestañas lol*/ 
        }
        else
            {
            echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                
                <title>Busqueda fallida</title>
            </head>
            <body>
                <head>
                    <a href='index.php'><img src='../../logo.jpg' alt=''></a>
                    <a href='agregarusuarios.php'>Usuarios</a>
                    <a href='index.php'>Inicio</a>
                    <a href='votacion.php'>Votacion</a>
                </head>
                
                <h1>no se encontro la ID</h1>
                <div class='boton'>
                <a href='../buscar.php'>Volver a buscar</a>
                </div>
            </body>
            </html>";
            }


