<?php
// procesar_contacto.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $comentario = $_POST["comentario"];

    // Conectar a la base de datos
    $host = 'localhost';
    $dbname = 'libreria';
    $user = 'root';  
    $pass = '';      

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Error de conexión: ' . $e->getMessage();
        die();
    }

    // Insertar datos en la tabla de contacto
    $stmt = $pdo->prepare("INSERT INTO contacto (nombre, correo, asunto, comentario) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nombre, $correo, $asunto, $comentario]);

    // Redirigir a la página de contacto con un mensaje de éxito
    header("Location: contacto.php?mensaje=success");
    exit();
} else {
    // Redirigir a la página de contacto con un mensaje de error
    header("Location: contacto.php?mensaje=error");
    exit();
}
?>
