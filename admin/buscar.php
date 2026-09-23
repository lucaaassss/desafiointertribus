<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../formularios.css" />
    <title>Busqueda</title>
</head>
<body>
    <form action="buscar/busqueda.php" method="POST">
       
        <h1>Ingresa el ID del usuario</h1>
        <input
          type="text"
          class="input"
          name="id"
          required
        />
        <input type="submit" value="Buscar usuario" class="button" />
      </form>
</body>
</html>
