<?php
// Recibir el formulario, validar datos, guardarlos en la base de datos y mostrar un mensaje de confirmación o error.

require_once 'connection_db.php'; 

// Inicializamos el mensaje de estado
$estado_mensaje = '';
$tipo_alerta = ''; 

// Asegurar de que el formulario fue enviado por método POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enviar_mensaje'])) {
    // Extracción y Saneamiento de Datos
    $nombre = trim(htmlspecialchars($_POST['nombre_usuario'] ?? ''));
    $correo = trim(htmlspecialchars($_POST['correo_usuario'] ?? ''));
    $mensaje = trim(htmlspecialchars($_POST['mensaje_usuario'] ?? ''));

    // Validación de Servidor 
    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        $estado_mensaje = 'Error: Todos los campos del formulario son obligatorios. Por favor, revísalos.';
        $tipo_alerta = 'error';
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $estado_mensaje = 'Error: El formato del correo electrónico ingresado no es válido.';
        $tipo_alerta = 'error';
    } else {

        $sql_query = "INSERT INTO contact_form (sender_name, sender_email, message_content) VALUES (?, ?, ?)";
        
        if ($stmt = $datos_conex->prepare($sql_query)) {
            $stmt->bind_param("sss", $nombre, $correo, $mensaje);

            if ($stmt->execute()) {
                $estado_mensaje = '¡Su mensaje ha sido enviado con éxito!. Gracias por contactarme.';
                $tipo_alerta = 'exito';
            } else {
                $estado_mensaje = "Error al intentar enviar su mensaje. " . $stmt->error;
                $tipo_alerta = 'error';
            }

            $stmt->close();
        } else {
            $estado_mensaje = "Error interno: Falló la preparación de la consulta SQL: " . $datos_conex->error;
            $tipo_alerta = 'error';
        }
    }
} else {

    $estado_mensaje = 'Acceso inválido. Por favor, usa el formulario de contacto para enviar un mensaje.';
    $tipo_alerta = 'error';
}

$datos_conex->close();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado de Contacto | Jenniffer Zhigue</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <!-- CABECERA Y NAVEGACIÓN -->
    <header class="cabecera-principal">
        <div class="nav-contenedor">
            <a href="index.html" class="logo-nombre">J.M.Z.A. Desarrollo Web</a>
            <nav>
                <ul class="nav-menu">
                    <li><a href="index.html" class="nav-link">Inicio</a></li>
                    <li><a href="contact.html" class="nav-link">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- CONTENIDO PRINCIPAL: MENSAJE DE ESTADO -->
    <main class="contenedor-principal">
        <section class="seccion-card">
            <h1 class="titulo-seccion" style="text-align: center;">Resultado del Envío</h1>
            
            <!-- Bloque para mostrar la notificación de éxito o error -->
            <div class="formulario-contacto">
                <div class="mensaje-notificacion <?php echo $tipo_alerta; ?>">
                    <?php echo $estado_mensaje; ?>
                </div>
                
                <!-- Botón para regresar al formulario -->
                <p style="text-align: center; margin-top: 20px;">
                    <a href="contact.html" class="btn-enviar" style="display: inline-block; text-decoration: none;">Volver al Formulario</a>
                </p>
            </div>
        </section>
    </main>

    <!-- PIE DE PÁGINA -->
    <footer class="pie-pagina">
        <p>&copy; 2025 Jenniffer Zhigue Armijos. Sitio Web Personal. Desarrollado con 💙.</p>
    </footer>

</body>
</html>
