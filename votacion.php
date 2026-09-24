<?php
    include 'conexion.php';

    // Traemos la votación más reciente para mostrar sus resultados
    $votacion = $conexion->query("SELECT id_votacion, nombre FROM votaciones ORDER BY id_votacion DESC LIMIT 1")->fetch_assoc();

    $resultado = null;

    if ($votacion) {
        $id_votacion = $votacion['id_votacion'];

        $sql = "SELECT u.nombre, u.apellido, t.tribu, COUNT(v.id_voto) AS cantidad_votos
                FROM candidatos c
                JOIN usuarios u ON c.id_usuario = u.id_usuario
                JOIN tribus t ON u.id_tribu = t.id_tribu
                LEFT JOIN votos v ON v.id_candidato = c.id_candidato
                WHERE c.id_votacion = ?
                GROUP BY c.id_candidato
                ORDER BY t.tribu, cantidad_votos DESC";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("i", $id_votacion);
        $stmt->execute();
        $resultado = $stmt->get_result();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear votación</title>
    <link rel="stylesheet" href="formularios.css" />
    <link rel="stylesheet" href="cssprincipal.css" />
</head>
<body>
<<<<<<< HEAD
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
=======
    <h1>Crear nueva votación</h1>
    <form action="guardar_votacion.php" method="POST">
        <p>Nombre de la votación</p>
        <input type="text" name="nombre" class="input" placeholder="Nombre de la votacion" required />
        <br><br>
        <input type="submit" value="Crear votación" class="button" />
    </form>

    <?php if ($votacion) { ?>
        <h2>Resultados: <?php echo htmlspecialchars($votacion['nombre']); ?></h2>

        <div class="listausuarios">
            <?php while ($fila = $resultado->fetch_assoc()) { ?>
                <div class="usuario">
                    <p><strong>Candidato:</strong> <?php echo htmlspecialchars($fila['nombre'] . ' ' . $fila['apellido']); ?></p>
                    <p><strong>Tribu:</strong> <?php echo htmlspecialchars($fila['tribu']); ?></p>
                    <p><strong>Votos:</strong> <?php echo $fila['cantidad_votos']; ?></p>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <p>Todavía no hay ninguna votación creada.</p>
    <?php } ?>
>>>>>>> 96b9a0e4ac34b8c8e3ecad6ce2479bf279ae07c5

</body>
</html>