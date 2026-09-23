<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formularios.css" />
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        include 'conexion.php';

    ?>

    <div class="form">
      <form action="agregarusuario.php" method="POST">
        <p>Nombre</p>
        <input
          type="text"
          class="input"
          placeholder="Nombre"
          name="nombre"
          required
        />
        <p>Apellido</p>
        <input
          type="text"
          class="input"
          placeholder="Apellido"
          name="apellido"
          required
        />
        <p>curso</p>
        <input
          type="text"
          class="input"
          placeholder="Curso"
          name="curso"
          required
        />
        <p>Rol</p>
        <input
          type="text"
          class="input"
          placeholder="Rol"
          name="rol"
          required
        />
        <p>Tribu</p>
        <input
          type="text"
          class="input"
          placeholder="Tribu"
          name="tribu"
          required
        />
        <p>Email</p>
        <input
          type="email"
          class="input"
          placeholder="Email"
          name="email"
          required
        />
        <p>Contraseña</p>
        <input
          type="text"
          class="input"
          placeholder="Contraseña"
          name="contraseña"
          required
        />
        <br /><br />
        <input type="submit" value="Aceptar" class="button" />
        
      </form>
    </div>

</body>
</html>
