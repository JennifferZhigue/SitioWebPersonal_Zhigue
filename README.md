Proyecto: Sitio Web Personal 

Descripción General del Proyecto:
Este proyecto tiene una pagina principal en la que muestra mi informacion personal y tiene una implementación básica de un sistema de contacto web que demuestra la integración entre un formulario y un script de procesamiento del lado del servidor (PHP). El objetivo es validar los datos del usuario y simular el envío de un correo electrónico.

Estructura del Proyecto:
El proyecto está compuesto por los siguientes archivos principales:
ARCHIVO contact.html: Contiene el formulario de contacto con marcado HTML y estilos aplicados para una interfaz moderna y responsiva.
ARCHIVO process_contact.php: El script de PHP que recibe los datos del formulario, realiza la validación de seguridad del lado del servidor y simula el proceso de envío del correo.
Funcionamiento y Pruebas
El formulario utiliza dos capas de validación:
Validación del Lado del Cliente (HTML)
•	Responsable: El navegador web (gracias a los atributos required y type="email").
•	Función: Proporcionar retroalimentación instantánea al usuario antes de enviar los datos al servidor.
•	Prueba de Fallo: Intenta enviar el formulario dejando un campo vacío o ingresando un correo sin el símbolo @. Verás los mensajes de error instantáneos del navegador.
Validación del Lado del Servidor (PHP)
•	Responsable: El archivo process_contact.php.
•	Función: Es la capa de seguridad crítica. Valida que los datos sean correctos una vez que han llegado al servidor.
•	Prueba de Éxito: Ingresa todos los campos correctamente y presiona "Enviar". El script de PHP debería simular el envío del correo y mostrar un mensaje de éxito.
Tecnologías Utilizadas
•	HTML5: Estructura del formulario.
•	Tailwind CSS: Framework CSS para el diseño y la responsividad.
•	PHP: Script de procesamiento y validación del lado del servidor.

Enlace del sitio. desarrollowebTI.infinityfree.me
