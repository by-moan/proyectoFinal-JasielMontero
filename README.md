# Vue 3 + Vite

## Base de datos

Para crear la base de datos, ejecuta en PHPMyAdmin
```SQL
CREATE DATABASE IF NOT EXISTS hotel;
USE hotel

CREATE TABLE `reservaciones` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `correo` varchar(100) NOT NULL,
 `nombre` varchar(100) NOT NULL,
 `diaReservacion` date NOT NULL,
 `nombreCuarto` varchar(100) DEFAULT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `SOLO_UN_CORREO` (`correo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
```

El proyecto asume que tienes la carpeta del source del proyecto en htdocs de xampp y el php server abierto, en el proyecto.

Para ejecutarlo, pon el proyecto en htdocs, entra, abre la consola y ejecuta

```Bash,cmd,zsh
npm run dev
```