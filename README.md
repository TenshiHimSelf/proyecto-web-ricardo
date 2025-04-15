# Proyecto-Web

Este proyecto es una aplicación web básica que incluye funcionalidades de registro, inicio de sesión y gestión de usuarios con roles. Está desarrollado en PHP y utiliza MySQL como base de datos.

## Estructura del Proyecto

```
login.php
css/
    login.css
js/
    login.js
php/
    admin_page.php
    config.php
    login_register.php
    user_page.php
```

### Archivos y Carpetas Principales

- **login.php**: Página principal para el inicio de sesión y registro de usuarios.
- **css/login.css**: Archivo de estilos CSS para la página de inicio de sesión.
- **js/login.js**: Archivo JavaScript para funcionalidades relacionadas con el inicio de sesión.
- **php/**: Carpeta que contiene los archivos PHP principales:
  - **admin_page.php**: Página para usuarios con rol de administrador.
  - **config.php**: Archivo de configuración para la conexión a la base de datos.
  - **login_register.php**: Lógica para el registro e inicio de sesión de usuarios.
  - **user_page.php**: Página para usuarios con rol estándar.

## Requisitos

- **Servidor Web**: Se recomienda usar XAMPP.
- **PHP**: Versión 7.4 o superior.
- **MySQL**: Base de datos para almacenar usuarios y roles.

## Configuración

1. Clona o descarga este repositorio en tu servidor local.
2. Configura la base de datos en el archivo `php/config.php`.
3. Asegúrate de que las tablas necesarias estén creadas en la base de datos. Por ejemplo:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') NOT NULL DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

4. Inicia el servidor local y accede a `http://localhost/Proyecto-Web/login.php`.

## Funcionalidades

- **Registro de Usuarios**: Permite registrar nuevos usuarios con roles específicos.
- **Inicio de Sesión**: Valida las credenciales de los usuarios y redirige según su rol.
- **Roles de Usuario**:
  - **Admin**: Acceso a `admin_page.php`.
  - **User**: Acceso a `user_page.php`.

## Notas

- Asegúrate de habilitar la visualización de errores en tu entorno de desarrollo para facilitar la depuración.
- Usa contraseñas seguras y considera implementar HTTPS en producción.
