<x-guest-layout>
    <div class="w-full sm:max-w-md mt-6 px-8 py-10 bg-white shadow-2xl shadow-slate-200 rounded-2xl border border-slate-100">
        
        <div class="mb-8 text-center">
            <h2 class="text-2xl font-bold text-slate-800">Selamat Datang Kembali</h2>
            <p class="text-sm text-slate-500 mt-1">Silakan masuk ke akun Anda</p>
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-5">
                <label class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-2">Email</label>
                <input id="email" class="block mt-1 w-full rounded-xl border-slate-200 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-100 transition py-3 px-4" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-5">
                <label class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-2">Password</label>
                <input id="password" class="block mt-1 w-full rounded-xl border-slate-200 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-100 transition py-3 px-4" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mb-6">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-slate-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-slate-500">{{ __('Ingat saya') }}</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:text-indigo-500 font-medium transition" href="{{ route('password.request') }}">
                        Lupa password?
                    </a>
                @endif
            </div>

            <button type="submit" class="w-full py-3.5 bg-slate-900 hover:bg-slate-800 text-white font-semibold rounded-xl shadow-lg shadow-slate-300 transition text-center mb-4">
                Masuk Aplikasi
            </button>

            <p class="text-sm text-center text-slate-500">
                Belum punya akun? <a href="{{ route('register') }}" class="text-indigo-600 font-semibold hover:underline">Daftar sekarang</a>
            </p>
        </form>
    </div>
</x-guest-layout>