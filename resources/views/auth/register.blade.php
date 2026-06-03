<x-guest-layout>
    <div class="w-full sm:max-w-md mt-6 px-8 py-10 bg-white shadow-2xl shadow-slate-200 rounded-2xl border border-slate-100">
        
        <div class="mb-8 text-center">
            <h2 class="text-2xl font-bold text-slate-800">Mulai Akun Baru</h2>
            <p class="text-sm text-slate-500 mt-1">Isi formulir untuk mendaftar</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-5">
                <label class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-2">Nama Lengkap</label>
                <input id="name" class="block mt-1 w-full rounded-xl border-slate-200 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-100 transition py-3 px-4" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mb-5">
                <label class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-2">Email</label>
                <input id="email" class="block mt-1 w-full rounded-xl border-slate-200 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-100 transition py-3 px-4" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mb-5">
                <label class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-2">Password</label>
                <input id="password" class="block mt-1 w-full rounded-xl border-slate-200 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-100 transition py-3 px-4" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mb-6">
                <label class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-2">Konfirmasi Password</label>
                <input id="password_confirmation" class="block mt-1 w-full rounded-xl border-slate-200 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-100 transition py-3 px-4" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <button type="submit" class="w-full py-3.5 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold rounded-xl shadow-lg shadow-indigo-100 transition text-center mb-4">
                Daftar Akun
            </button>

            <p class="text-sm text-center text-slate-500">
                Sudah punya akun? <a href="{{ route('login') }}" class="text-indigo-600 font-semibold hover:underline">Log in</a>
            </p>
        </form>
    </div>
</x-guest-layout>