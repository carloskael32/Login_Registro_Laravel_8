<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
    <!-- ... -->
    <title>@yield('title') Laravel App</title>
</head>

<body class="bg-gray-100 ">
   
<nav class="flex py-5 bg-blue-500 text-white">
    <div class="w-1/2 px-12 mr-auto">
        <h2 class="text-2xl font-bold">My application</h2>
    </div>

    <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
    <li>
        <a href="{{ route('login.index') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Login</a>
        <a href="{{ route('register.index') }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Register</a>
    </li>
    </ul>
</nav>




    @yield('content')
</body>

</html>