@extends('layouts.app')

@section('title', 'Dashboard Siswa - Sistem Monitoring Siswa')

@section('content')
<div class="flex overflow-x-hidden justify-center items-center">
    <div class="w-full h-screen relative bg-contain bg-fixed" style="background-image: url(https://images2.imgbox.com/29/8f/L4Hq2WmI_o.png)">
        <div class="bg-gradient-to-t from-white via-transparent to-transparent">
            <div class="w-full h-[280px] flex items-center left-0 top-0  ">
                <div class="w-full h-screen bg-white bg-opacity-80 px-[22px] left-[3px] top-[73px] flex flex-col items-center justify-center mb-5">
                    <div class="flex gap-24 items-center">
                        <img src="https://images2.imgbox.com/d4/63/KL5SZia1_o.png" alt="Logo" class="mb-2 mr-4">
                        <div class="mb-10">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="border drop-shadow-md bg-rose-400 hover:bg-red-700 text-xs text-white font-semibold py-1.5 px-2 rounded-lg flex items-center">
                                <i class="fas fa-sign-out-alt mr-2"></i>
                                Log out
                            </button>
                        </form>
                    </div>
                    </div>
                    <div class="flex items-center gap-[30px]">
                        <div class="rounded-lg w-[118px] h-[141px]" style="background: url(https://www.figma.com/file/wyGYvRoMviZ3OJWdjNzfvv/image/fef93180a27285a4e5daa16445af4bce32de1df6); background-size: cover; background-position: center;"></div>
                        <div class="w-[220px] h-[150px] flex flex-col">
                            <div>
                                <span class="text-blue-600 text-2xl font-semibold font-sans">Nama Lengkap Siswa<br/></span>
                                <span class="text-gray-700 text-sm font-medium font-sans">Siswa1234<br/>Kelas 1A</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="w-full p-2 justify-center items-center gap-6 sm:gap-8 inline-flex">
                <a id="akademik-nav" class="nav-item text-center cursor-pointer  text-blue-600 text-base font-medium font-sans underline hover:underline hover:text-opacity-100 active">Akademik</a>
                <a id="bio-nav" class="nav-item text-center cursor-pointer text-black text-opacity-70 hover:underline hover:text-opacity-100 text-base font-medium font-sans">Bio</a>
                <a id="pengumuman-nav" class="nav-item text-center cursor-pointer text-black text-opacity-70 hover:underline hover:text-opacity-100 text-base font-medium font-sans">Pengumuman</a>
                <a id="akun-nav" class="nav-item text-center cursor-pointer text-black text-opacity-70 hover:underline hover:text-opacity-100 text-base font-medium font-sans">Akun</a>
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
        @include('layouts.footer')
    </div>
</div>

@endsection
