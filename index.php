<?php 
/* AGREGAR CONECTAR CON BASE DE DATOS*/
$datos = [];
$alumno = $datos['alumno'];

echo"<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Inter</title>
</head>";

if($alumno == null)
    {
        $alumno = null;
        echo"no hay usuario registrado";
        $_SESSION['usuario']=null;
        $_SESSION['año']=null;
    }
if($_SESSION['usuario'] == null)
{
    echo"

        <head>
            <a href=''><img src='logo' alt=''></a>
            <a href='login.php'>registrarse</a>
            <a href='datos.html'>Inter</a>
    </head>";
}
else if($_SESSION['usuario'] == 'admin')
{
    echo"
    <body>
        <head>
            <a href=''><img src='logo' alt=''></a>
            <a href='usuario.html'>Usuario</a>
            <a href='datos.html'>Inter</a>
            <a href='postularse.html'>agregar usuarios
            </a>
        </head>
        <div class='info'>
            <h1>Inter</h1>
            <div>
            <a href='admin/agregarusuario.php'>usuarios</a>
            <a href=''>editar</a>
            </div>
            <div>
            <a href=''>iniciar votacion</a>
            </div>
        </div>
    </body>
    </html>";
}
else if ($_SESSION['año'] == '6to')
    {
    echo"
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Inter</title>
</head>

<body>

    <head>
        <a href=''><img src='logo' alt=''></a>
        <a href='usuario.html'>Usuario</a>
        <a href='datos.html'>Inter</a>
        <a href='votacion.html'>Votar</a>
        <a href='postularse.html'>Postularse</a>
    </head>

</body>
";
}
else
{


echo "<body>

    <head>
        <a href=''><img src='logo' alt=''></a>
        <a href='usuario.html'>Usuario</a>
        <a href='datos.html'>Inter</a>
        <a href='votacion.html'>Votar</a>
    </head>

</body>

</html>";
}
   echo "<div class='info'>
        <h1>Inter</h1>
        <p>informacion-</p>
    </div>";