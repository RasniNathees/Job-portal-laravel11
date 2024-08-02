<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @Vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@200;600&display=swap" rel="stylesheet">
    <title>Job Horizone</title>
</head>
<body class="bg-gradient-to-t from-gray-900 to-slate-800 text-white font-hanken-grotesk ">
    <header class="px-4 sm:px-8 py-4 border-b border-white/10">
        <nav class="flex flex-col sm:flex-row items-center justify-between">
            <div class="flex items-center mb-4 sm:mb-0">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" height="50px" width="80px" alt="horizone-job-logo">
                </a>
            </div>
            <div class="hidden  flex-col sm:flex-row items-center mb-4 sm:mb-0 space-y-4 sm:space-y-0 sm:space-x-6 font-bold">
                <a href="/" class="block">Jobs</a>
                <a href="/" class="block">Careers</a>
                <a href="/" class="block">Salary</a>
                <a href="/" class="block">Companies</a>
            </div>
            @guest
            <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="/login" class="block">Login</a>
                <a href="/register" class="block">Register</a>
            </div>
            @endguest
    
            @auth
            <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="/" class="block">Post a Job</a>
                <form action="/logout" method="POST" class="flex flex-col sm:flex-row items-center">
                    @csrf
                    @method('post')
                    <x-form.button class="mt-2 sm:mt-0">Logout</x-form.button>
                </form>
            </div>
            @endauth
        </nav>
    </header>
    
    <main class=" gr max-w-[950px] mt-10  mx-auto p-2">
        
        {{$slot}}
    </main>
</body>
</html>
