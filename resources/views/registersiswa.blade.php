@extends('layouts.guestapp')

@section('Register Siswa', 'Sistem Monitoring Siswa')

@section('content')
<div class="max-w-xl mx-auto my-8 p-8 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-6">Input Biodata Pendaftaran</h1>
    <form action="{ route('') }}" method="post">
        @csrf
      <div>
        <label for="name" class="block text-sm font-medium mb-1">
          Nama Lengkap*
        </label>
        <input
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          id="name"
          placeholder="Masukkan Nama Lengkap..."
        />
      </div>
      <div>
        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900">Kelas*</label>
          <select id="kelas" name="kelas" class="bg-gray-50 border border-gray-300 cursor-pointer text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option selected>Pilih Kelas</option>
            <option value="1A">1A</option>
            <option value="1B">1B</option>
            <option value="2A">2A</option>
            <option value="2B">2B</option>
            <option value="3A">3A</option>
            <option value="3B">3B</option>
            <option value="4A">4A</option>
            <option value="4B">4B</option>
            <option value="5A">5A</option>
            <option value="5B">5B</option>
            <option value="6A">6A</option>
            <option value="6B">6B</option>
          </select>
      </div>
      <div>
        <label for="nisn" class="block text-sm font-medium mb-1">
          NISN*
        </label>
        <input
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          id="nisn"
          placeholder="0089787567"
        />
      </div>
      <div>
          <label for="jekel" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin*</label>
          <select id="jekel" name="jekel" class="bg-gray-50 border border-gray-300 cursor-pointer text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option selected disabled>Pilih Jenis Kelamin</option>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
      </div>
      <div>
        <label for="birthdate" class="block text-sm font-medium mb-1">
          TTL*
        </label>
        <input
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          id="birthdate"
          placeholder="Bekasi, 19 Desember 2014"
        />
      </div>
      <div>
        <label for="religion" class="block text-sm font-medium mb-1">
          Agama*
        </label>
        <input
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          id="religion"
          placeholder="Islam"
        />
      </div>
      <div>
        <label for="address" class="block text-sm font-medium mb-1">
          Alamat*
        </label>
        <input
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          id="address"
          placeholder="Jl. Anggrek No.32 Bekasi"
        />
      </div>
      <div>
        <label for="phone" class="block text-sm font-medium mb-1">
          Telepon*
        </label>
        <input
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          id="phone"
          placeholder="089967899009"
        />
      </div>
      <div>
        <label for="email" class="block text-sm font-medium mb-1">
          Email*
        </label>
        <input
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          id="email"
          placeholder="Contoh@gmail.com"
          type="email"
        />
        <p class="text-xs mt-1 text-gray-500">Email untuk menerima informasi akun</p>
      </div>
      <div>
        <label for="fatherName" class="block text-sm font-medium mb-1">
          Nama Ayah*
        </label>
        <input
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          id="fatherName"
          placeholder="Suparjo"
        />
      </div>
      <div>
        <label for="motherName" class="block text-sm font-medium mb-1">
          Nama Ibu*
        </label>
        <input
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          id="motherName"
          placeholder="Niken"
        />
      </div>
      <div>
        <label for="photo" class="block text-sm font-medium mb-1">
          Upload Foto KK/KTP
        </label>
        <input
        class="flex h-10 w-full rounded-md border-input bg-gray-50 border border-gray-300 text-gray-900 px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 cursor-pointer disabled:cursor-not-allowed disabled:opacity-50"
        id="photo"
        type="file"
      />
        <p class="text-xs mt-1 text-gray-500">Max 10 Mb, Format JPG &amp; PNG</p>
      </div>
      <div class="mt-5 w-[214px] h-10 justify-start items-start gap-5 inline-flex">
        <div class="px-4 py-[5px] bg-rose-400 rounded-[3px] justify-end items-center gap-2.5 flex">
        <a class="tombol-kembali text-white cursor-pointer text-sm font-normal">Batal</a>
        </div>
        <div class="px-4 py-[5px] bg-blue-600 rounded-[3px] justify-end items-center gap-2.5 flex">
        <button type="submit" class="text-white text-sm font-normal">Simpan</button>
        </div>
        </div>
    </form>
    @include('layouts.footer')
  </div>
@endsection
