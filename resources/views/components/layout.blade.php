<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@200;600&display=swap"
        rel="stylesheet">
    <title>Job Horizone</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-gradient-to-l from-black to-slate-800 text-white font-hanken-grotesk ">
    <header class="px-4 sm:px-8  border-b border-white/10">
        <nav class="flex flex-col sm:flex-row items-center  justify-between">
            <div class="flex items-center mb-4 sm:mb-0">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" height="50px" width="80px"
                        alt="horizone-job-logo">
                </a>
            </div>
            <div class=" flex flex-col items-start justify-center sm:flex-row sm:space-x-6 sm:ml-60  ">
                <a href="/" class="block">Jobs</a>
                <a href="/" class="block">Careers</a>
                <a href="/" class="block">Salary</a>
                <a href="/" class="block">Companies</a>
            </div>
            @guest

                <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-8 mx-20">

                    <x-link-button href='/login'>Login</x-link-button>
                    {{-- profile --}}
                    <div class="flex justify-center items-center   space-x-4">
                        <x-link-button href='/register'>Register</x-link-button>
                    </div>
                </div>
            @endguest

            @auth
                <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-8 mx-20">

                    <x-link-button href='/'>Post a Jobs</x-link-button>
                    {{-- profile --}}
                    <div class="flex justify-center items-center   space-x-4">

                        <div id="ref"
                            class="border-[2.2px] border-black transition duration-300 hover:border-blue-700  rounded-full ">
                            <img id="profile" src="https://picsum.photos/seed/picsum/40" alt=""
                                class="hover:cursor-pointer rounded-3xl">
                        </div>


                        <div id="dropdown" class="hidden flex-col   ">

                            <div class=" w-full  sm:px-4 sm:py-2 sm:mt-6 ">
                                <x-profile-dropdown-container>
                                    <span>{{ Auth::user()->name }}</span>
                                    <span>{{ Auth::user()->email }}</span>
                                </x-profile-dropdown-container>
                                <x-profile-dropdown-container>
                                    <span>Create Organization</span>
                                </x-profile-dropdown-container>
                                <x-profile-dropdown-container>
                                    <span id="logout">Logout</span>
                                </x-profile-dropdown-container>


                            </div>
                        </div>

                    </div>

                    {{-- <x-form.form action="/logout" method="POST" class="flex flex-col sm:flex-row items-center">
                        <x-form.button class="mt-2 sm:mt-0">Logout</x-form.button>
                    </x-form.form> --}}


                </div>
            @endauth
        </nav>


    </header>
    <main class=" gr max-w-[950px] mt-10  mx-auto p-2">

        {{ $slot }}
    </main>
</body>

</html>
