<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre    = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $edad      = $_POST['edad'];
    $telefono  = $_POST['telefono'];
    $mensaje   = $_POST['mensaje'];
    
    echo "<h1>Inscripción recibida</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Categoría:</strong> $categoria</p>";
    echo "<p><strong>Edad:</strong> $edad</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
    echo "<p><strong>Mensaje adicional:</strong> $mensaje</p>";
}
?>