@extends('layouts.app')

@section('title', 'Dashboard Siswa - Sistem Monitoring Siswa')

@section('content')
<div class="flex overflow-x-hidden justify-center items-center">
    <div class="w-full h-screen relative bg-cover bg-fixed" style="background-image: url(https://pbs.twimg.com/media/GBhLwWcakAAZjYr?format=webp)">
        <div class="bg-gradient-to-t from-slate-900 via-transparent to-transparent">
        <div class="w-full h-[280px] flex items-center left-0 top-0  ">
            <div class="absolute z-10 top-0 right-0 m-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="border drop-shadow-md  border-1 border-gray-200 hover:bg-red-700 text-xs text-white font-semibold py-1.5 px-2 rounded-lg flex items-center">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Log out
                    </button>
                </form>
            </div>
            <div class="w-full px-[22px] left-[3px] top-[73px] justify-center items-center gap-[30px] inline-flex">
                <img class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] w-[118px] h-[141px] rounded-lg" src="https://via.placeholder.com/118x141" />
                <div class="w-[220px] h-[150px] flex flex-col">
                    <div>
                        <span class="drop-shadow-md text-gray-200 text-2xl font-semibold font-sans"> {{ $user->name }}<br/></span>
                        <span class="text-gray-300 text-sm font-medium font-sans drop-shadow-md"> {{ $user->username }}<br/>Kelas 1A</span>
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
@endsection
