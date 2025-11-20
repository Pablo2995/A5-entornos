<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>

    {{-- Importa el CSS compilado por Vite, no asset() --}}
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-r from-purple-100 via-pink-100 to-yellow-100 min-h-screen font-sans">

    <header class="bg-white shadow p-4 sticky top-0 z-10">
        <h1 class="text-3xl font-bold text-center text-purple-700">📋 Mi Lista de Tareas</h1>
    </header>

    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    <footer class="text-center text-gray-500 mt-10 mb-4">
        Laravel + TailwindCSS
    </footer>

</body>
<footer class="text-center py-4 text-gray-600">
    <a href="https://github.com/Pablo2995/A5-entornos"
       target="_blank"
       class="text-blue-600 hover:text-blue-800 underline">
        📁 Ver repositorio en GitHub
    </a>
</footer>
</html>
