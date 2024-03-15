# Proyecto Laravel con ABM de Usuarios y API de Clima

Este es un proyecto en PHP Laravel que incluye un sistema básico de gestión de usuarios (ABM) que se conecta a una base de datos. Además, integra una funcionalidad para consultar el clima a través de una API externa.

## Funcionalidades

- **ABM de Usuarios**: Permite realizar las operaciones de Alta, Baja y Modificación de usuarios en la base de datos.
- **Consulta del Clima**: Un botón en la interfaz permite obtener información del clima utilizando una API externa.
- **Copia del Script de Base de Datos**: El directorio `sql` contiene un script de base de datos que puede ser utilizado para inicializar o restaurar la base de datos del proyecto.

## Requisitos

- PHP >= 7
- Composer
- Servidor web Apache
- Clave de API para el servicio de clima (obtener una en OpenWeatherMap)

## Instalación

1. Clonar el repositorio o descargar el código fuente.
2. Ejecutar `composer install` para instalar las dependencias de Laravel.
3. Configurar la conexión a la base de datos en el archivo `.env`.
5. Obtener una clave de API para el servicio de clima y configurarla en el archivo `.env`.

## Uso

Una vez instalado y configurado correctamente:

1. Iniciar el servidor web.
2. Acceder al proyecto desde un navegador.
3. Utilizar las opciones de ABM de usuarios y el botón para consultar el clima.

## Estructura del Proyecto

- `app/`: Contiene los modelos, controladores y otros archivos de la aplicación.
- `public/`: Archivos accesibles públicamente (CSS, JavaScript, imágenes, etc.).
- `resources/views/`: Vistas de Blade para la interfaz de usuario.
- `routes/`: Definición de rutas de la aplicación.
- `sql/`: Directorio que contiene una copia del script de la base de datos.

