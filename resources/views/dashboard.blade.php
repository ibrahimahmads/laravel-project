<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-slate-800 leading-tight">
            {{ __('Dashboard Overview') }}
        </h2>
    </x-slot>

    <div class="py-3 bg-slate-50 h-[calc(100vh-140px)] overflow-hidden">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-slate-900 to-indigo-950 overflow-hidden shadow-xl sm:rounded-2xl p-8 text-white relative">
                <div class="relative z-10 max-w-xl">
                    <span class="bg-indigo-500/20 text-indigo-300 text-xs font-semibold px-3 py-1 rounded-full border border-indigo-500/30 uppercase tracking-wider">Sistem Aktif</span>
                    <h3 class="text-3xl font-extrabold mt-4 tracking-tight">Selamat Datang, {{ Auth::user()->name }}! 👋</h3>
                    <p class="mt-2 text-slate-300 text-sm leading-relaxed">Anda berhasil masuk ke dalam sistem manajemen internal. Mulai kelola data produk Anda melalui menu navigasi atau langsung klik pintasan di bawah.</p>
                    
                    <div class="mt-6">
                        <a href="{{ route('products.index') }}" class="inline-flex items-center justify-center px-5 py-3 rounded-xl bg-white hover:bg-slate-100 text-slate-900 font-bold text-sm transition shadow-lg">
                            Kelola Produk CRUD 🚀
                        </a>
                    </div>
                </div>

                <div class="absolute right-0 bottom-0 opacity-10 pointer-events-none transform translate-x-10 translate-y-10">
                    <svg width="400" height="400" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="40" stroke="white" stroke-width="2"/>
                        <circle cx="50" cy="50" r="25" stroke="white" stroke-width="1"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>