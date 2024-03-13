<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />

</head>

<body class="bg-gray-200 p-4">
    <div class="lg:w-2/4 mx-auto py-8 px-6 bg-white rounded-xl">
        <h1 class="font-bold text-5xl text-center mb-8">To Do List with Laravel</h1>

        <div class="mb-6">
            <form class="flex flex-col space-y-4" method="POST" action="/">
                @csrf
                <input type="text" name="title" placeholder="Title" class="py-3 px-4 bg-gray-200 rounded-xl">
                <textarea name="description" placeholder="Description" class="py-3 px-4 bg-gray-200 rounded-xl"></textarea>

                <button class="bg-indigo-600 hover:bg-indigo-800 text-white w-full mt-5 p-3 
                        uppercase font-bold cursor-pointer">Add</button>
            </form>
        </div>

        <hr>

        <div class="mt-2">
            @foreach($todos as $todo)
                <div @class(['py-4 flex items-center border-b border-gray-300 px-3', $todo->isDone ? 'bg-green-200' : ''
                    ])>
                    <div class="flex-1 pr-8 ">
                        <h3 class="text-lg font-semibold">{{ $todo->title }}</h3>
                        <p class="text-gray-500">{{ $todo->description }}</p>
                    </div>

                    <div class="flex space-x-3">
                        <form method="POST" action="/{{ $todo->id }}">
                            @csrf
                            @method('PATCH')
                            <button class="py-2 px-2 bg-indigo-500 text-white rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>
                            </button>
                        </form>
                        <form method="POST" action="/{{ $todo->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="py-2 px-2 bg-red-500 text-white rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>