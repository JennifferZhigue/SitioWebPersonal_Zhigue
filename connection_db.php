<?php
// Establecer la conexión con la base de datos MySQL usando MySQLi.
// Definición de credenciales de la base de datos

define('DB_SERVIDOR', 'sql210.infinityfree.com'); 
define('DB_USUARIO', 'if0_40493778'); 
define('DB_CONTRASENA','XPiA4k3zO69'); 
define('DB_NOMBRE', 'if0_40493778_information'); 

// Intentar establecer la conexión
$datos_conex = new mysqli(DB_SERVIDOR, DB_USUARIO, DB_CONTRASENA, DB_NOMBRE);

// Verificar si la conexión falló
if ($datos_conex->connect_error) {
    die("Error crítico de conexión a la Base de Datos: " . $datos_conex->connect_error);
}

// Establecer el conjunto de caracteres a UTF-8 para evitar problemas de acentos y eñes
$datos_conex->set_charset("utf8");


?>
