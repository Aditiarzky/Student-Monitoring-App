@extends('layouts.app')

@section('title', 'Admin - Pendaftar - Sistem Monitoring Siswa')

@section('content')
<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden  focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-blue-600  dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full overflow-y-auto bg-blue-400">
        <div class="bg-white flex items-center">
            <img src="https://images2.imgbox.com/d4/63/KL5SZia1_o.png" alt="Logo" class="h-[70px]">
        </div>
        <ul class="space-y-2 mx-3 my-4 font-medium">
            <li>
                <a href="/admin" class="flex items-center p-2 rounded-lg text-white  bg-blue-600  group">
                    <span class="ms-3">Pendaftar</span>
                </a>
            </li>
            <li>
                <a href="/admin/akunuser" class="flex items-center p-2 rounded-lg text-white  hover:bg-blue-600  group">
                    <span class="flex-1 ms-3 whitespace-nowrap">Akun User</span>
                    {{-- <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full bg-gray-700 text-gray-300">Pro</span> --}}
                </a>
            </li>
            <li>
                <a href="/admin/pengumuman" class="flex items-center p-2 rounded-lg text-white  hover:bg-blue-600  group">
                    <span class="flex-1 ms-3 whitespace-nowrap">Pengumuman</span>
                    {{-- <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
                </a>
            </li>
        </ul>
    </div>
</aside>

<div class="sm:ml-64">
    <div class="flex justify-between items-center p-1 h-[70px] bg-gray-200">
        <h1 class="text-xl ml-10 font-semibold">Pendaftar</h1>
        <form action="">
            @csrf
            <button type="submit" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 text-rose-500 ">
                Log Out
            </button>
        </form>
    </div>
    <div class="mt-5">
        <h1 class="text-xl ml-10 font-normal">Buat Akun</h1>
    </div>
    <div class="flex-1 p-8">
        <div class="bg-white p-6 rounded-lg w-[535px]">
            <form action="/admin/buatbiodata" method="get">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium mb-1">
                        Nama*
                    </label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        id="name"
                        placeholder="Masukkan Nama..."
                        value="Paijo"
                    />
                </div>
                <div class="mt-4">
                    <label for="username" class="block text-sm font-medium mb-1">
                        Username*
                    </label>
                    <input
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        id="username"
                        placeholder="Masukkan Username..."
                    />
                </div>
                <div class="mt-4">
                    <label for="role" class="block text-sm font-medium mb-1">
                        Role*
                    </label>
                    <select
                        id="role"
                        name="role"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    >
                        <option value="admin">Admin</option>
                        <option value="guru">Guru</option>
                        <option value="siswa" selected>Siswa</option>
                        <option value="kepsek">Kepsek</option>
                    </select>
                </div>
                <div class="mt-4 relative">
                    <label for="password" class="block text-sm font-medium mb-1">
                        Password*
                    </label>
                    <div class="relative">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            value="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Masukkan Password..."
                        />
                        <button type="button" id="toggle-button-password" class="absolute inset-y-0 right-0 pr-3 flex items-center focus:outline-none">
                            <i id="toggle-icon-password" class="far fa-eye-slash text-gray-500"></i>
                        </button>
                    </div>
                </div>
                <div class="mt-5 w-[214px] h-10 justify-start items-start gap-5 inline-flex">
                    <div class="px-4 py-[5px] bg-rose-400 rounded-[3px] justify-end items-center gap-2.5 flex">
                    <a class="tombol-kembali text-white cursor-pointer text-sm font-normal">Batal</a>
                    </div>
                    <div class="px-4 py-[5px] bg-blue-600 rounded-[3px] justify-end items-center gap-2.5 flex">
                    <button type="submit" class="text-white text-sm font-normal">Buat</button>
                    </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
