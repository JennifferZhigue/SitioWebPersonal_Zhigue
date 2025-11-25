# Proyecto: Sitio Web Personal 

# Descripción General del Proyecto:
Este proyecto tiene una pagina principal en la que muestra mi informacion personal y tiene una implementación básica de un sistema de contacto web que demuestra la integración entre un formulario y un script de procesamiento del lado del servidor (PHP). El objetivo es validar los datos del usuario y simular el envío de un correo electrónico.

# Estructura del Proyecto:
Carpeta: SitioWebPersonal_Zhigue
El proyecto está compuesto por los siguientes archivos:
Carpeta img: Es la que contiene la foto que se muestra en el sitio web.
ARCHIVO database_structure: Este archivo tiene el código que se uso para crear la base de datos.
ARCHIVO connection_db.php: Es el que nos permite conectarnos con la base de datos lo cual es muy importante pues en esta base de datos es donde se van almacenar los datos que ingresen.
ARCHIVO index.html: Es el que presenta una página principal con la informacion personal.
ARCHIVO contact.html: Contiene el formulario de contacto con marcado HTML y estilos aplicados para una interfaz moderna y responsiva.
ARCHIVO process_contact.php: El script de PHP que recibe los datos del formulario, realiza la validación de seguridad del lado del servidor y simula el proceso de envío del correo.
ARCHIVO styles.css: Aqui se han establecido todos los estilos aplicados para todo el sitio web, se han declarado variables CSS personalizadas, estilos globales básicos, tipografía personalizada usando Google Fonts (Poppins para texto general y Playfair Display para títulos). Además de estilos para navegación, botones, formularios, listas, entre otros, con transiciones, efectos hover, validaciones visuales, etc.
También se aplico media queries para hacer la página responsiva en diferentes tamaños de pantalla.
ARCHIVO README: Es el que contiene la descripción del proyecto, instrucciones para uso y enlace al hosting.
# Funcionamiento y Pruebas.
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
•	HTML5
•	MySQL 
•	PHP
•   Una hoja de estilos para el diseño y la responsividad.
•   Hosting: InfinityFree

# Creación del dominio o subdominio.
Ingresar al panel de InfinityFree.
Crear un subdominio o dominio gratuito.
InfinityFree asigna automáticamente una carpeta /htdocs donde se alojarán los archivos del proyecto.

# Crear la base de datos.
En el panel, abrir MySQL Databases.
Crear una nueva base de datos, una vez creada se debe guardar los datos generados.

# Importación de la base de datos.
Abrir phpMyAdmin desde el mismo panel, luego seleccionar la base de datos creada e importar el archivo .sql correspondiente a la tabla contact_form.

# Subir los archivos del proyecto.
Abrir File Manager o usar un cliente FTP, como siguiente paso ingresar a la carpeta /htdocs. Luego eliminar archivos predeterminados creados por InfinityFree (ej. index2.html). Por ultimo subir todos los archivos del proyecto.

# Enlace del sitio web. 
https://desarrollowebti.infinityfree.me/

# Enlace de Github.
https://github.com/JennifferZhigue/SitioWebPersonal_Zhigue
