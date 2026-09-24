<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssprincipal.css" />
    <title>Document</title>
</head>
<body>
    
    <?php 
        include 'conexion.php';
        
        // $alumno = $datos['alumno'];


        if($_SESSION['user']!=true){
            
            echo "<script type='text/javascript'>window.location.href = 'login.php';</script>";
            }
            if($_SESSION['user']==true && $_SESSION['rol'] == 'admin'){?>
                    
                <h1>Sistema de votacion de caciques intertribus ITLF</h1>
                <div class="botones">
                    <a href="usuarios.php">
                        <BUtton>Usuarios</BUtton>
                    </a>
                    <a href="votacion.php">
                        <BUtton>Votaciones</BUtton>
                    </a>
                    <a href="login.php">
                        <BUtton>Cerrar sesion</BUtton>
                    </a>
                </div>
                <?php
                }
            if($_SESSION['user']==true && $_SESSION['rol'] == 'alumno'){
                $stmt = $conexion->prepare("SELECT id_tribu FROM usuarios WHERE email = ?");
                $stmt->bind_param("s", $_SESSION["email"]);
                $stmt->execute();
                $stmt->bind_result($tribu);

                ?>
                <h1>Sistema de votacion de caciques intertribus ITLF</h1>
                <?php
                
                
            }
                
?>
</body>
</html>