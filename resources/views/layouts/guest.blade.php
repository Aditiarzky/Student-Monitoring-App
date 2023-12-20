<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 overflow-x-hidden bg-gradient-to-br from-gray-100 via-gray-300 to-gray-100 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center pt-6 p-2 sm:pt-0 ">
        <div class="shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-lg">
            <div class="backdrop-blur-sm w-full shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] sm:max-w-md px-6 py-6 shadow-md overflow-hidden rounded-lg">
                <div class="flex items-center mt-5">
                    <div class="w-full sm:w-[519px] mb-10 text-center">
                        <h1 class="text-black text-[40px] sm:text-3xl font-semibold font-sans">Login Ke Sistem<br/></h1>
                        <span class="text-black text-base sm:text-sm font-medium font-sans">Masuk dengan Username dan Password Anda...</span>
                    </div>
                </div>
                {{ $slot }}
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>
</html>
