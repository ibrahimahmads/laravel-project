<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Manajemen Produk</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.js', 'resources/css/app.css'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="antialiased bg-[#fafbfc] text-slate-900 font-sans min-h-screen flex flex-col justify-between">

    <header class="w-full max-w-7xl mx-auto px-6 py-6 flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <div class="w-9 h-9 bg-indigo-600 rounded-xl flex items-center justify-center text-white font-black text-lg shadow-md shadow-indigo-200">
                P
            </div>
            <span class="text-lg font-bold tracking-tight text-slate-800">Prod<span class="text-indigo-600">Hub.</span></span>
        </div>

        @if (Route::has('login'))
            <nav class="flex items-center space-x-3">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-500 transition shadow-lg shadow-indigo-100">
                        Masuk Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-indigo-600 hover:bg-slate-100 transition">
                        Sign In
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-xl text-sm font-semibold text-white bg-slate-900 hover:bg-slate-800 transition shadow-lg shadow-slate-200">
                            Get Started
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <main class="w-full max-w-4xl mx-auto px-6 py-16 flex-grow flex flex-col items-center justify-center text-center">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-indigo-50 text-indigo-700 border border-indigo-100 mb-6 animate-pulse">
            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
            Laravel 11 & Tailwind CSS Berbasis CRUD
        </span>

        <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-[1.15] max-w-2xl">
            Kelola Data Produk Bisnis Anda dalam <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-violet-600">Satu Dasbor Terintegrasi</span>
        </h1>

        <p class="mt-6 text-base sm:text-lg text-slate-500 max-w-xl leading-relaxed">
            Aplikasi internal sederhana untuk memantau inventaris, memperbarui harga, dan mengelola deskripsi produk secara cepat, aman, dan responsif.
        </p>

        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 w-full sm:w-auto">
            @auth
                <a href="{{ url('/dashboard') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl font-bold text-white bg-indigo-600 hover:bg-indigo-500 shadow-xl shadow-indigo-200 transition text-center">
                    Buka Aplikasi Manajemen
                </a>
            @else
                <a href="{{ route('register') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl font-bold text-white bg-indigo-600 hover:bg-indigo-500 shadow-xl shadow-indigo-200 transition text-center">
                    Mulai Sekarang (Gratis)
                </a>
                <a href="{{ route('login') }}" class="w-full sm:w-auto px-8 py-4 rounded-xl font-semibold text-slate-700 bg-white hover:bg-slate-50 border border-slate-200 shadow-sm transition text-center">
                    Pelajari Fitur CRUD
                </a>
            @endif
        </div>

        <div class="mt-20 grid grid-cols-1 sm:grid-cols-3 gap-6 w-full max-w-3xl text-left">
            <div class="p-5 bg-white rounded-2xl border border-slate-100 shadow-sm">
                <div class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold mb-3">✓</div>
                <h4 class="font-bold text-slate-800 text-sm">Autentikasi Aman</h4>
                <p class="text-xs text-slate-400 mt-1">Sistem login, register, dan proteksi rute halaman menggunakan Laravel Breeze.</p>
            </div>
            <div class="p-5 bg-white rounded-2xl border border-slate-100 shadow-sm">
                <div class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold mb-3">⚡</div>
                <h4 class="font-bold text-slate-800 text-sm">Operasi CRUD Cepat</h4>
                <p class="text-xs text-slate-400 mt-1">Tambah, edit, lihat, dan hapus data produk dari basis data secara real-time.</p>
            </div>
            <div class="p-5 bg-white rounded-2xl border border-slate-100 shadow-sm">
                <div class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center font-bold mb-3">🎨</div>
                <h4 class="font-bold text-slate-800 text-sm">UI Elegan & Ringan</h4>
                <p class="text-xs text-slate-400 mt-1">Antarmuka minimalis modern yang sangat memanjakan mata pengguna.</p>
            </div>
        </div>
    </main>

    <footer class="w-full text-center py-6 border-t border-slate-100 text-xs text-slate-400">
        &copy; {{ date('Y') }} ProdHub System. Built with Laravel & Tailwind CSS.
    </footer>

</body>
</html>