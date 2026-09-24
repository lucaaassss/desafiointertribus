<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
session_start();
echo"<!DOCTYPE html>
<html lang='en'>
<body>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    
    <link rel='stylesheet' href='cssprincipal.css' />
    <title>Inter</title>
</head>
<body>
    <header>
         <a href=''><img src='logo' alt=''></a>
        <a href=''>inicio</a>
        <a href='datos.html'>Inter</a>
    </header>";
if($_SESSION('votacion') == false)
{
    echo"<body>
            <div class= votacion;>
                <a href='votacion.php'>Iniciar votacion</a>
            </div>
        </body>";
        $votacion=true;
}
else
    {
        echo"<body>
            <div class= votacion;>
                <a href='votacion.php'>Cerrar votacion</a>
            </div>
        </body>";
        $votacion=false;
}

?>
</body>
</html>

