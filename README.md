# Sistema de Gestión de Solicitudes de Cambio (Gestión de Configuración de Software)

Aplicación web desarrollada en **PHP** y **MySQL** para la gestión, registro, evaluación y seguimiento de solicitudes de cambio en proyectos de software/sistemas, alineada a las buenas prácticas de gestión de la configuración (ITIL / SCM).

Proyecto desarrollado para la **Facultad de Ingeniería en Sistemas, Electrónica e Industrial (FISEI)** de la **Universidad Técnica de Ambato (UTA)** en la materia de *Manejo y Configuración de Software*.

---

## 🚀 Características Principales

- **Autenticación y Control de Acceso**:
  - Registro de usuarios e inicio de sesión con validación de credenciales.
  - Roles definidos: **Usuario (`user`)** y **Administrador (`admin`)**.
  - Control de sesiones en PHP (`session_start()`).

- **Módulo de Usuario**:
  - Página informativa del proceso de control de cambios.
  - Formulario estructurado para el registro de solicitudes de cambio con validaciones en cliente y servidor.
  - Registro detallado de atributos clave: impacto, urgencia, prioridad, riesgos, servicios afectados, cronograma y responsables.

- **Panel de Administración**:
  - Dashboard y panel de control administrativo.
  - Listado general de solicitudes registradas en una tabla interactiva con indicador visual de estado por colores:
    - 🟡 **Pendiente**
    - 🟢 **Aprobado**
    - 🔴 **Rechazado**
  - Vista detallada de cada solicitud para revisión y auditoría.
  - Capacidad de actualizar el estado del cambio (Aceptar, Rechazar o Mantener Pendiente).
  - Eliminación de registros.

---

## 🛠️ Tecnologías Utilizadas

- **Backend**: PHP (Soporta PDO y MySQLi).
- **Base de Datos**: MySQL / MariaDB.
- **Frontend**: HTML5, CSS3, JavaScript.
- **Librerías & Frameworks UI**:
  - Bootstrap (Responsive Design).
  - jQuery.
  - Font Awesome.

---

## 📂 Estructura del Proyecto

```text
Formulario-Solicitud-de-Cambio/
│
├── admin/                         # Panel de administración
│   ├── secciones/
│   │   └── servicios/
│   │       ├── index.php          # Listado y eliminación de solicitudes
│   │       └── editar.php         # Detalle y aprobación/rechazo de solicitudes
│   ├── templates/
│   │   ├── header.php             # Cabecera y navegación del admin
│   │   └── footer.php             # Pie de página del admin
│   ├── bd.php                     # Conexión auxiliar PDO para admin
│   └── index.php                  # Página principal del panel de administración
│
├── assets/                        # Recursos visuales del tema
├── css/                           # Hojas de estilo personalizadas y Bootstrap
├── fonts/                         # Fuentes tipográficas
├── images/                        # Imágenes institucionales e iconos
├── js/                            # Scripts de validación, modal e interactividad
│
├── cerrarSesion.php               # Cierre de sesión y destrucción de variables de sesión
├── conexion.php                   # Script central de conexión a la base de datos MySQL (MySQLi y PDO)
├── formulario.php                 # Formulario de registro de solicitud de cambio
├── inicio.php                     # Página de inicio para usuarios autenticados
├── login.php                      # Inicio de sesión con redirección por rol
├── registro.php                   # Registro de nuevos usuarios
└── README.md                      # Documentación del proyecto
```

---

## 🗄️ Modelo de Base de Datos

El sistema utiliza la base de datos **`bdFormulario`**. A continuación se detallan las tablas y el script sugerido para inicializarla en phpMyAdmin / MySQL:

```sql
CREATE DATABASE IF NOT EXISTS bdFormulario DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE bdFormulario;

-- Tabla de usuarios
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(100) NOT NULL,
  `email` VARCHAR(150) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `rol` ENUM('admin', 'user') DEFAULT 'user'
);

-- Tabla de solicitudes de cambio
CREATE TABLE IF NOT EXISTS `formularios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NULL,
  `solicitante_del_cambio` VARCHAR(150) NOT NULL,
  `tipo_de_cambio` VARCHAR(100) NOT NULL,
  `impacto` VARCHAR(50) NOT NULL,
  `urgencia` VARCHAR(50) NOT NULL,
  `prioridad` VARCHAR(50) NOT NULL,
  `riesgo_del_cambio` VARCHAR(50) NOT NULL,
  `propietario_del_cambio` VARCHAR(150) NOT NULL,
  `responsable_del_cambio` VARCHAR(150) NOT NULL,
  `fecha_inicio_del_cambio` DATE NOT NULL,
  `fecha_fin_del_cambio` DATE NOT NULL,
  `servicios_afectados` TEXT NOT NULL,
  `razon_del_cambio` TEXT NOT NULL,
  `titulo_del_cambio` VARCHAR(255) NOT NULL,
  `descripcion_del_cambio` TEXT NOT NULL,
  `aprobador` VARCHAR(150) NOT NULL,
  `estado_cambio` VARCHAR(50) DEFAULT 'Pendiente',
  CONSTRAINT fk_usuario_formulario FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE SET NULL
);

-- Usuario Administrador por defecto
INSERT INTO `users` (`username`, `email`, `password`, `rol`) 
VALUES ('Administrador', 'admin@uta.edu.ec', 'admin123', 'admin');
```

---

## ⚙️ Instalación y Configuración

### Prerrequisitos
- Servidor web local (por ejemplo **XAMPP**, **WampServer**, **Laragon** o **LAMP**).
- PHP 7.4 o superior (compatible con PHP 8.x).
- MySQL / MariaDB.

### Pasos de Configuración

1. **Clonar o copiar el repositorio**:
   Coloca el proyecto en la carpeta de publicación web de tu servidor local (ej. `C:/xampp/htdocs/Formulario-Solicitud-de-Cambio`).

   ```bash
   git clone -b develop https://github.com/AngieCaiza27/Formulario-Solicitud-de-Cambio.git
   ```

2. **Configurar la Base de Datos**:
   - Inicia los servicios de Apache y MySQL en tu panel de control (ej. XAMPP).
   - Ingresa a [phpMyAdmin](http://localhost/phpmyadmin/).
   - Crea la base de datos `bdFormulario`.
   - Ejecuta las sentencias SQL provistas en la sección [Modelo de Base de Datos](#️-modelo-de-base-de-datos).

3. **Verificar credenciales de conexión**:
   Revisa el archivo [conexion.php](file:///c:/Users/crist/Desktop/PROYECTOS/Formulario-Solicitud-de-Cambio/conexion.php):
   ```php
   $server = "localhost";
   $username = "root";
   $password = "";
   $db = "bdFormulario";
   ```
   Ajusta `$username` o `$password` si tu configuración local de MySQL tiene contraseña asignada.

4. **Acceder a la Aplicación**:
   Abre tu navegador e ingresa a:
   ```text
   http://localhost/Formulario-Solicitud-de-Cambio/login.php
   ```

---

## 👥 Flujo de Uso

1. **Autenticación**:
   - Si no posees cuenta, accede a `registro.php` para registrar un usuario convencional (`rol: user`).
   - Inicia sesión desde `login.php`.
2. **Usuario Convencional**:
   - Es redirigido a `inicio.php`.
   - Navega a `formulario.php` para ingresar una nueva solicitud con todos los detalles técnicos y organizacionales.
3. **Administrador**:
   - Al iniciar sesión con un usuario con rol `admin`, es redirigido a `/admin/index.php`.
   - Desde la sección **Servicios/Formularios** (`/admin/secciones/servicios/index.php`), visualiza todas las solicitudes.
   - En la opción **Ver** (`editar.php`), inspecciona el detalle completo y dictamina el cambio: **Aprobar**, **Rechazar** o **Pendiente**.

---

## 🏛️ Créditos
- **Institución**: Universidad Técnica de Ambato (UTA)
- **Facultad**: Facultad de Ingeniería en Sistemas, Electrónica e Industrial (FISEI)
- **Materia**: Manejo y Configuración de Software
