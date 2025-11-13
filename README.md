<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<html lang="es">
<body>
    <h1>📋 Mi Lista de Tareas (Laravel + TailwindCSS)</h1>
    <p>Este proyecto es una <strong>aplicación web de lista de tareas</strong> construida con Laravel y TailwindCSS. Permite agregar, editar y eliminar tareas, y tiene una interfaz visual agradable y moderna.</p>
    <h2>🔹 Requisitos previos</h2>
    <ul>
        <li><a href="https://www.php.net/">PHP</a> >= 8.1</li>
        <li><a href="https://getcomposer.org/">Composer</a></li>
        <li><a href="https://nodejs.org/">Node.js</a> >= 18</li>
        <li><a href="https://www.npmjs.com/">npm</a></li>
        <li><a href="https://mariadb.org/">MariaDB o MySQL</a></li>
    </ul>
    <h2>🔹 Instalación del proyecto</h2>
    <ol>
        <li><strong>Clonar el repositorio:</strong>
            <pre><code>git clone https://github.com/Pablo2995/A5-entornos.git
cd A5-entornos</code></pre>
        </li>
        <li><strong>Instalar dependencias de PHP:</strong>
            <pre><code>composer install</code></pre>
        </li>
        <li><strong>Copiar archivo de entorno y configurar base de datos:</strong>
            <pre><code>cp .env.example .env</code></pre>
            Luego abre <code>.env</code> y configura los datos de tu base de datos:
            <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laraveluser
DB_PASSWORD=MiPassword123
APP_ENV=local
APP_DEBUG=true</code></pre>
        </li>
    </ol>
    <h2>🔹 Creación de la base de datos y usuario</h2>
    <ol>
        <li><strong>Acceder a MariaDB/MySQL desde la terminal:</strong></li>
        <pre><code>sudo mysql -u root -p</code></pre>
        <li><strong>Crear la base de datos:</strong></li>
        <pre><code>CREATE DATABASE laravel;</code></pre>
        <li><strong>Crear el usuario y darle permisos:</strong></li>
        <pre><code>CREATE USER 'laraveluser'@'localhost' IDENTIFIED BY 'MiPassword123';
GRANT ALL PRIVILEGES ON laravel.* TO 'laraveluser'@'localhost';
FLUSH PRIVILEGES;</code></pre>
        <li><strong>Verificar acceso con el nuevo usuario:</strong></li>
        <pre><code>mysql -u laraveluser -p</code></pre>
        <li><strong>Seleccionar la base de datos:</strong></li>
        <pre><code>USE laravel;</code></pre>
    </ol>
    <h2>🔹 Ver las tablas existentes</h2>
    <pre><code>SHOW TABLES;</code></pre>
    <p>Ejemplo de tablas generadas por Laravel:</p>
    <ul>
        <li>failed_jobs</li>
        <li>migrations</li>
        <li>password_reset_tokens</li>
        <li>personal_access_tokens</li>
        <li>tareas</li>
        <li>users</li>
    </ul>
    <h2>🔹 Generar clave y migraciones</h2>
    <ol>
        <li><strong>Generar clave de la aplicación:</strong>
            <pre><code>php artisan key:generate</code></pre>
        </li>
        <li><strong>Ejecutar migraciones para crear las tablas:</strong>
            <pre><code>php artisan migrate</code></pre>
        </li>
    </ol>
    <h2>🔹 Instalación de dependencias de Node.js y TailwindCSS</h2>
    <ol>
        <li><strong>Instalar dependencias de Node.js:</strong>
            <pre><code>npm install</code></pre>
        </li>
        <li><strong>Para desarrollo (actualización en tiempo real):</strong>
            <pre><code>npm run dev</code></pre>
        </li>
        <li><strong>Para producción (CSS compilado):</strong>
            <pre><code>npm run build</code></pre>
        </li>
    </ol>
    <h2>🔹 Levantar el servidor de Laravel</h2>
    <pre><code>php artisan serve</code></pre>
    <p>Por defecto, la aplicación estará disponible en: <a href="http://localhost:8000/tareas">http://localhost:8000/tareas</a></p>
    <h2>🔹 Funcionalidades</h2>
    <ul>
        <li>Crear nuevas tareas</li>
        <li>Editar tareas existentes</li>
        <li>Eliminar tareas</li>
        <li>Interfaz moderna con TailwindCSS</li>
        <li>Layout responsivo (móvil y escritorio)</li>
    </ul>
    <h2>🔹 Estructura del proyecto</h2>
    <pre><code>
app/             -> Lógica de Laravel
resources/views/ -> Vistas Blade
public/css/      -> CSS compilado por Tailwind
routes/web.php   -> Rutas de la aplicación
    </code></pre>
    <h2>🔹 Créditos</h2>
    <ul>
        <li>Laravel Framework</li>
        <li>TailwindCSS</li>
        <li>Inspiración: Proyecto de lista de tareas personalizado</li>
    </ul>
</body>
<<<<<<< HEAD
</html>
=======
</html>




>>>>>>> c217476ab9006ee5afeb1d377f20be86d1fe41e5
