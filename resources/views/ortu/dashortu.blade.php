<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <div class="flex overflow-x-hidden justify-center items-center">
        <div class="w-full h-screen relative bg-cover bg-fixed" style="background-image: url(https://pbs.twimg.com/media/GBhLwWcakAAZjYr?format=webp)">
            <div class="bg-gradient-to-t from-slate-900 via-transparent to-transparent">
            <div class="w-full h-[280px] flex items-center left-0 top-0  ">
                <div class="absolute z-10 top-0 right-0 m-4">
                    <a href={{ route('logout')}} class="font-sans bg-red-500 text-sm hover:bg-red-700 text-white font-bold py-1 px-2 rounded"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                </div>
                <div class="w-full px-[22px] left-[3px] top-[73px] justify-center items-center gap-[30px] inline-flex">
                    <img class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] w-[118px] h-[141px] rounded-lg" src="https://via.placeholder.com/118x141" />
                    <div class="w-[220px] h-[150px] flex items-center flex-col">
                        <div>
                            <span class="drop-shadow-md text-gray-200 text-2xl font-semibold font-sans">Christian Haidar Fernando Torres Putra<br/></span>
                            <span class="text-gray-300 text-sm font-medium font-sans drop-shadow-md">0082437710 (NISN)<br/>Kelas 1A</span>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="w-full p-2 justify-center items-center gap-6 sm:gap-8 inline-flex">
                <a id="akademik-nav" class="nav-item text-center cursor-pointer text-gray-200 text-base font-medium font-sans underline hover:underline hover:text-opacity-100 active">Akademik</a>
                <a id="bio-nav" class="nav-item text-center cursor-pointer text-gray-200 text-opacity-70 hover:underline hover:text-opacity-100 text-base font-medium font-sans">Bio</a>
                <a id="pengumuman-nav" class="nav-item text-center cursor-pointer text-gray-200 text-opacity-70 hover:underline hover:text-opacity-100 text-base font-medium font-sans">Pengumuman</a>
                <a id="akun-nav" class="nav-item text-center cursor-pointer text-gray-200 text-opacity-70 hover:underline hover:text-opacity-100 text-base font-medium font-sans">Akun</a>
            </nav>
        </div>
        <div id="akademik" class="hidden">
            {{-- Include partial akademik --}}
            @include('partials.akademik')
        </div>
        <div id="bio" class="hidden">
            {{-- Include partial bio --}}
            @include('partials.bio')
        </div>
        <div id="pengumuman" class="hidden">
            {{-- Include partial pengumuman --}}
            @include('partials.pengumuman')
        </div>
        <div id="akun" class="hidden">
            {{-- Include partial akun --}}
            @include('partials.akun')
        </div>
        </div>
    </div>
</body>
</html>
