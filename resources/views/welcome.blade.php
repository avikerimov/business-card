<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')

        
    </head>
    <body class="antialiased">
        <div class="flex h-screen items-center justify-center">
            <div class="flex flex-col items-center bg-white rounded-xl p-8  border-4 font-inter">
                <h1 class="text-[#111111] text-[3rem] lg:text-[3.5rem] font-bold tracking-tighter ">Welcome</h1>
                <h3 class="text-[1.5rem] xl:text-[2.5rem] text-[#111] capitalize  leading-none">Please choose profile</h3>
                <div class="flex justify-evenly w-full mt-4">
                    <a href="/profile-1" class="p-4 border rounded-md text-[#13AAFF] shadow-lg">Profile-1</a>
                    <a href="/profile-2" class="p-4 border rounded-md text-[#13AAFF] shadow-lg">Profile-2</a>
                </div>
            </body>
            </div>
        </div>
</html>

