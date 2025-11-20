<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Lista de Tareas</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300">

    <!-- Barra superior -->
    <header class="w-full p-4 flex justify-between items-center bg-white dark:bg-gray-800 shadow">
        <h1 class="text-xl font-bold text-purple-700 dark:text-purple-300">📋 Mi Lista de Tareas</h1>

        <button id="themeToggle"
            class="px-4 py-2 rounded bg-purple-600 text-white hover:bg-purple-700 transition">
            🌙 Modo oscuro
        </button>
    </header>

    <main class="p-6">
        @yield('content')
    </main>

    <footer class="text-center py-6 text-sm text-gray-500 dark:text-gray-400">
        Laravel + TailwindCSS |
        <a href="https://github.com/Pablo2995/A5-entornos"
            class="text-purple-600 dark:text-purple-300 underline hover:text-purple-800">
            Ver repositorio en GitHub
        </a>
    </footer>

    <script>
        const html = document.documentElement;
        const themeToggle = document.getElementById('themeToggle');

        if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
            themeToggle.innerText = "☀️ Modo claro";
        }

        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');

            if (html.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
                themeToggle.innerText = "☀️ Modo claro";
            } else {
                localStorage.setItem('theme', 'light');
                themeToggle.innerText = "🌙 Modo oscuro";
            }
        });
    </script>

</body>

</html>
