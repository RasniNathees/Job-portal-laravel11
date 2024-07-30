<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @Vite(['resources/js/app.js'])
    <title>Job Horizone</title>
</head>
<body class="bg-black text-white ">
    <header class="px-8  item-center py-4 border-b border-white/10">
        <nav class="flex justify-between">
            <div >
               <a>
                <img src="{{Vite::asset('resources/images/logo.png')}}" height="50px" width="80px" alt="horizone-job-logo">
               </a>
            </div>
            <div class="flex items-center space-x-6 font-bold">
                <a href="/">Jobs</a>
                <a href="/">Careers</a>
                <a href="/">Salary</a>
                <a href="/">Companies</a>
            </div>
            <div class="flex items-center">Post a Job</div>
        </nav>
    </header>
    <main class=" max-w-[986px] mt-10 px-8 lg:mx-auto">
        {{$slot}}
    </main>
</body>
</html>