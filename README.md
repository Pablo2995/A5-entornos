<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

📋 Mi Lista de Tareas (Laravel + TailwindCSS)

Este proyecto es una aplicación web de lista de tareas construida con Laravel y TailwindCSS. Permite agregar, editar y eliminar tareas, y tiene una interfaz visual agradable y moderna.

🔹 Requisitos previos

Antes de empezar, necesitas tener instalados:

PHP
 >= 8.1

Composer

Node.js
 >= 18

npm

MariaDB o MySQL

🔹 Instalación del proyecto

Clonar el repositorio:

git clone https://github.com/Pablo2995/A5-entornos.git
cd A5-entornos


Instalar dependencias de PHP:

composer install


Copiar el archivo de entorno y configurar la base de datos:

cp .env.example .env


Luego abre .env y configura los datos de tu base de datos:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=


Generar la clave de la aplicación:

php artisan key:generate


Ejecutar migraciones para crear las tablas:

php artisan migrate

🔹 Instalación de dependencias de Node.js y TailwindCSS

Instala dependencias de Node.js:

npm install


Para desarrollo, ejecuta el servidor de Vite:

npm run dev


Esto hará que TailwindCSS genere los estilos en tiempo real y tu página se actualice automáticamente cuando hagas cambios.

Para producción (generar CSS final):

npm run build


Esto crea los archivos compilados en public/build/ y ya no necesitas ejecutar npm run dev.

🔹 Levantar el servidor de Laravel
php artisan serve


Por defecto, la aplicación estará disponible en:
http://localhost:8000/tareas

🔹 Funcionalidades

Crear nuevas tareas

Editar tareas existentes

Eliminar tareas

Interfaz moderna con TailwindCSS

Layout responsivo (compatible con móviles y desktop)

🔹 Estructura del proyecto
app/             -> Lógica de Laravel
resources/views/ -> Vistas Blade
public/css/      -> CSS compilado por Tailwind
routes/web.php   -> Rutas de la aplicación

🔹 Créditos

Laravel Framework

TailwindCSS

Inspiración: Mi propio diseño de lista de tareas
