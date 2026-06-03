<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-slate-800 leading-tight">
            {{ __('Ubah Detail Produk') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-2xl shadow-slate-200/60 sm:rounded-2xl border border-slate-100 p-8">
                
                <div class="mb-2 border-b border-slate-100">
                    <h3 class="text-lg font-bold text-slate-800">Perbarui Informasi Produk</h3>
                    <p class="text-xs text-slate-400 mt-1">Ubah data pada kolom di bawah ini untuk memperbarui informasi inventaris barang.</p>
                </div>
                
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-6">
                        <label class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-2">Nama Produk</label>
                        <input type="text" 
                               name="name" 
                               value="{{ $product->name }}"
                               placeholder="Contoh: Sepatu Sneakers Premium"
                               required 
                               class="block w-full rounded-xl border-slate-200 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-100 transition py-3 px-4 text-sm text-slate-700 placeholder-slate-400">
                    </div>

                    <div class="mb-6">
                        <label class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-2">Harga Produk</label>
                        <div class="relative mt-1 rounded-xl shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
                                <span class="text-slate-400 text-sm font-medium">Rp</span>
                            </div>
                            <input type="number" 
                                   name="price" 
                                   value="{{ $product->price }}"
                                   placeholder="1.000,00"
                                   step="0.01"
                                   required 
                                   class="block w-full rounded-xl border-slate-200 pl-11 pr-4 focus:border-amber-500 focus:ring focus:ring-amber-100 transition py-3 text-sm text-slate-700 placeholder-slate-400">
                        </div>
                    </div>

                    <div class="mb-8">
                        <label class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-2">Deskripsi Produk</label>
                        <textarea name="description" 
                                  rows="4"
                                  placeholder="Tuliskan spesifikasi atau keterangan lengkap produk di sini..."
                                  required 
                                  class="block w-full rounded-xl border-slate-200 shadow-sm focus:border-amber-500 focus:ring focus:ring-amber-100 transition py-3 px-4 text-sm text-slate-700 placeholder-slate-400">{{ $product->description }}</textarea>
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                        <a href="{{ route('products.index') }}" 
                           class="px-5 py-2.5 rounded-xl text-sm font-semibold text-slate-600 hover:text-slate-800 hover:bg-slate-100 transition">
                            Batal
                        </a>
                        <button type="submit" 
                                class="px-6 py-2.5 bg-amber-600 hover:bg-amber-500 text-white font-semibold text-sm rounded-xl shadow-lg shadow-amber-100 transition">
                            Update Produk
                        </button>
                    </div>
                </form>
                </div>
        </div>
    </div>
</x-app-layout>