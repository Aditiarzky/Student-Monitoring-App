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

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded bg-gray-300 border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500focus:ring-offset-gray-800 hover:shadow-[0_3px_10px_rgb(0,0,0,0.2)]" name="remember">
                <span class="ms-2 text-sm text-gray-600 ">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-7">
            <x-secondary-button class="hover:shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
                {{ __('Log in') }}
            </x-secondary-button>

            <!-- Registration Button -->
            <a href="{{ route('register') }}" class="text-sm mr-4 text-gray-600 hover:text-gray-900">{{ __('Belum punya akun?') }}</a>
        </div>
    </form>
</x-guest-layout>
