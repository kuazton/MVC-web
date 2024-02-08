<?php
include 'datos.php';
    try {

        $conn = new PDO($db, $us, $pas);
        // Establecer el modo de error de PDO a excepciones
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $mensaje = "Conexión exitosa";
    } catch (PDOException $e) {
        $mensaje = "Error de conexión: " . $e->getMessage();
    }

?>