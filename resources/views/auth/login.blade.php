<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="">
        @csrf

        <!-- Username -->
        <div>
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" placeholder="Username" :value="old('username')" required autofocus />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="grid items-center mt-7">
            <button class="h-8 px-3 py-1 bg-blue-600 rounded-[3px] justify-center items-center gap-2.5 inline-flex" >
                <div class="text-white text-base font-normal">Login</div>
            </button>

            <!-- Registration Button -->
            <div class="text-sm text-center m-5">
                Belum punya akun? <a href="/registersiswa" class="text-sm mr-4 text-blue-600 hover:text-gray-900">{{ __('Daftar di sini') }}</a>
            </div>
        </div>
    </form>
</x-guest-layout>
