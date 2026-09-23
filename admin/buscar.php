<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
</head>
<body>
    <form action="buscar/busqueda.php" method="POST">
       
        <p>Ingresa el ID del usuario</p>
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
