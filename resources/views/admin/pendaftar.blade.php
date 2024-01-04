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
    <h1 class="text-xl ml-10 font-normal">Daftar Pendaftar</h1>
   </div>
    <div class="flex-1 p-8">
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="relative w-full overflow-auto">
                <table class="w-full caption-bottom text-sm">
                    <thead class="[&amp;_tr]:border-b">
                        <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                Nama
                            </th>
                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                Kelas
                            </th>
                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                Nomor
                            </th>
                            <th class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                E-Mail
                            </th>
                            <th class="h-12 px-8 text-left align-middle font-medium text-muted-foreground [&amp;:has([role=checkbox])]:pr-0">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="[&amp;_tr:last-child]:border-0">
                        <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Paijo</td>
                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">1A</td>
                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">0087987567</td>
                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">contoh@gmail.com</td>
                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                                <a href="/admin/registerdetail" class="inline-flex cursor-pointer text-blue-600 items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                    Detail
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-muted/50 data-[state=selected]:bg-muted">
                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">Ahmad Maulana</td>
                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">1A</td>
                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">0087989869</td>
                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">contoh2@gmail.com</td>
                            <td class="p-4 align-middle [&amp;:has([role=checkbox])]:pr-0">
                                <a href="/admin/registerdetail" class="inline-flex cursor-pointer text-blue-600 items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
 </div>
@endsection
