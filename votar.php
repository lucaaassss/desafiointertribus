<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>
         <a href=''><img src='logo' alt=''></a>
        <a href=''>inicio</a>
        <a href='datos.html'>Inter</a>
    </header>
    
    <?php
        session_start();

        $servidor = "localhost";   
    $usuario = "root";         
    $password = "";            
    $base_datos = "desafiointers"; 
    $conexion = new mysqli($servidor, $usuario, $password, $base_datos);

    $tribu = $_POST('id_tribu');

    $stmt = $conexion->prepare("SELECT id_tribu FROM candidatos WHERE tribu = ?");
    $stmt->bind_param("s", $_SESSION["tribu"]);/*no se */
    $stmt->execute();
    $stmt->bind_result($candidatos_tribu);
    

     if($tribu == 1)
        {
            foreach($candidatos_tribu as $a1)
                {
                   if ($a1 == 1)
                    {
                        echo"<img src='' alt='' >";/*PONER FOTO*/ 
                        echo"Nombre:" . $candidato['nombre'] ." ". $candidato['apellido'] "<br>";
                        echo"Violeta-2027";
                         <a href="">
                          <BUtton>Votaciones</BUtton>
                         </a>;
                    }
                }
        }

    ?>
</body>
</html>