<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fase 2</title>
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col justify-center items-center">
    <h1 class="text-3xl font-semibold mb-8">Buscar Canción</h1>
    <form action="/fase2" method="POST" class="flex flex-col items-center space-y-4">
        @csrf
        <label for="sonido" class="text-lg">Ingrese un sonido:</label>
        <input type="text" id="sonido" name="sonido" class="py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:border-indigo-500">
        <button type="submit" class="bg-indigo-500 text-white px-6 py-2 rounded-lg hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Buscar</button>
    </form>

    <h2 class="text-2xl font-semibold mt-8">Resultado:</h2>
    <ul class="mt-4">
        @isset($resultado)
            @if (count($resultado) > 0)
                @foreach ($resultado as $sonido)
                    <li class="text-lg">{{ $sonido }}</li>
                @endforeach
            @else
                <li class="text-lg">No se encontraron resultados.</li>
            @endif
        @endisset
    </ul>
</body>
</html>
