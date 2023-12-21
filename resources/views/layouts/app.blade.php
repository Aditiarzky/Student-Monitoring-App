<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Sistem Monitoring Siswa')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            #underline_select::-ms-expand {
                display: none;
            }

            #underline_select {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                padding-right: 1.5rem; /* Adjust this value to give space for the custom arrow icon */
            }

            #underline_select:after {
                content: '\25BC'; /* Unicode character for a down-pointing triangle or arrow */
                position: absolute;
                top: 50%;
                right: 0.5rem; /* Adjust this value to position the arrow */
                transform: translateY(-50%);
                font-size: 0.8rem; /* Adjust the size of the arrow */
                color: #888; /* Adjust the color of the arrow */
            }
        </style>
    </head>
    <body class="bg-gray-200">
        @if(session()->has('error'))
        <div id="toast-danger" class="flex items-center w-full max-w-xs p-4 text-gray-500 shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{session('error')}}</div>
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('toast-danger').remove();
            }, 2000); // Menghilangkan pesan setelah 2 detik
        </script>
    @endif
    @if(session()->has('success'))
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 text-gray-500 shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{session('success')}}</div>
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('toast-success').remove();
            }, 2000); // Menghilangkan pesan setelah 2 detik
        </script>
    @endif
            <main>
                @yield('content')
            </main>
    </body>
</html>
