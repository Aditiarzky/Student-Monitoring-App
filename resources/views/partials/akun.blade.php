<div class="w-full min-h-screen bg-slate-900 h-fit flex justify-center items-start">
    <div class="w-full animate-fade-in sm:max-w-md m-2 sm:m-0 px-2 py-3 overflow-hidden rounded-lg">
        {{-- Main Bio --}}
        <section class="mt-4">
        <form action="{{ route('ortu.change') }}" method="post">
            @csrf

            <!-- Biodata Siswa -->
            <div class="flex items-center justify-between mb-5">
                <div class="text-gray-200 text-lg font-medium">Informasi Akun</div>
            </div>
            <div>
                <div class="mb-3">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-300">Nama</label>
                    <input required readonly type="text" value="{{ $user->name }}" id="nama" name="nama" class="bg-gray-700 border border-gray-500 text-gray-300 placeholder-gray-500 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5">
                    <div id="alert-message" class="hidden alert-message text-red-500 text-sm mt-1">Input ini hanya bisa dibaca (readonly).</div>
                </div>
                <div class="mb-3">
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-300">Username</label>
                    <input required readonly
                    type="text" value="{{ $user->username }}"
                    id="username" name="username" class="bg-gray-700 border border-gray-500 text-gray-300 placeholder-gray-500 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5">
                    <div id="alert-message" class="hidden alert-message text-red-500 text-sm mt-1">Input ini hanya bisa dibaca (readonly).</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-300">E-mail</label>
                    <input required readonly type="email" value="{{ $user->email }}" name="email" id="email" class="bg-gray-700 border border-gray-500 text-gray-300 placeholder-gray-500 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5">
                    <div id="alert-message" class="hidden alert-message text-red-500 text-sm mt-1">Input ini hanya bisa dibaca (readonly).</div>
                </div>
            </div>
            <div class="mb-3 mt-5">
                <div class="text-gray-200 text-lg font-medium mb-2">Ubah Kata Sandi</div>
                <p class="text-red-600 break-words overflow-wrap break-word">Jika Anda masih menggunakan kata sandi bawaan, disarankan untuk segera menggantinya. Ini adalah langkah keamanan penting untuk melindungi akun Anda.</p>
            </div>
            <div class="mb-3">
                <label for="password-lama" class="block mb-2 text-sm font-medium text-gray-300">Kata Sandi Lama</label>
                <div class="relative">
                    <input required @readonly(false) type="password" name="password-lama" id="password-lama" class="bg-gray-700 border border-gray-500 text-gray-300 placeholder-gray-500 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="Masukkan Kata Sandi lama...">
                    <button type="button" id="toggle-button-password-lama" class="absolute inset-y-0 right-0 pr-3 flex items-center focus:outline-none">
                        <i id="toggle-icon-password-lama" class="far fa-eye-slash text-gray-500"></i>
                    </button>
                </div>
            </div>
            <div class="mb-3">
                <label for="password-baru" class="block mb-2 text-sm font-medium text-gray-300">Kata Sandi Baru</label>
                <div class="relative">
                    <input required @readonly(false) type="password" name="password-baru" id="password-baru" class="bg-gray-700 border border-gray-500 text-gray-300 placeholder-gray-500 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="Masukkan Kata Sandi Baru...">
                    <button type="button" id="toggle-button-password-baru" class="absolute inset-y-0 right-0 pr-3 flex items-center focus:outline-none">
                        <i id="toggle-icon-password-baru" class="far fa-eye-slash text-gray-500"></i>
                    </button>
                </div>
            </div>
            <x-secondary-button type="submit" class="hover:shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
                {{ __('Submit') }}
            </x-secondary-button>
        </form>
        </section>
    </div>
</div>

