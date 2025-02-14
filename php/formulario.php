<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y limpiar los datos
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['numTel'];
    $identidad = $_POST['identidad'];
    $tipoAbono = $_POST['tipoAbono'];
    $info = $_POST['info'];
    $ofertas = $_POST['ofertas'];
    $comentarios = $_POST['comentarios'];
    
    
    echo "<h1>Formulario recibido</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellidos:</strong> $apellidos</p>";
    echo "<p><strong>Correo electrónico:</strong> $correo</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
    echo "<p><strong>Documento de identidad:</strong> $identidad</p>";
    echo "<p><strong>Tipo de abono:</strong> $tipoAbono</p>";
    echo "<p><strong>Información del club:</strong> $info</p>";
    echo "<p><strong>Ofertas y promociones:</strong> $ofertas</p>";
    echo "<p><strong>Comentarios:</strong> $comentarios</p>";
}
?>
