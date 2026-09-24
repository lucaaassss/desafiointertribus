<?php
    include 'conexion.php';

    $id_usuario = $_SESSION['id_usuario'];
    $id_votacion = intval($_POST['id_votacion']);
    $id_candidato = intval($_POST['id_candidato']);

    $stmt = $conexion->prepare("SELECT id FROM usuarios_votaron WHERE id_votacion = ? AND id_usuario = ?");
    $stmt->bind_param("ii", $id_votacion, $id_usuario);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        die("Ya emitiste tu voto en esta votación.");
    }
    $stmt->close();

    $stmt = $conexion->prepare("INSERT INTO votos (id_votacion, id_candidato) VALUES (?, ?)");
    $stmt->bind_param("ii", $id_votacion, $id_candidato);
    $stmt->execute();
    $stmt->close();

    $stmt = $conexion->prepare("INSERT INTO usuarios_votaron (id_votacion, id_usuario) VALUES (?, ?)");
    $stmt->bind_param("ii", $id_votacion, $id_usuario);
    $stmt->execute();
    $stmt->close();

    echo "¡Gracias por votar!";
?>