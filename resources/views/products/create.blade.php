<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Produk</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div style="margin-bottom: 15px;">
                        <label style="display:block;">Nama Produk:</label>
                        <input type="text" name="name" required style="width: 100%; border: 1px solid #ccc; padding: 8px; border-radius: 4px;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label style="display:block;">Harga Produk:</label>
                        <input type="number" name="price" required style="width: 100%; border: 1px solid #ccc; padding: 8px; border-radius: 4px;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label style="display:block;">Deskripsi:</label>
                        <textarea name="description" required style="width: 100%; border: 1px solid #ccc; padding: 8px; border-radius: 4px;"></textarea>
                    </div>
                    <button type="submit" style="background: green; color: white; padding: 8px 16px; border-radius: 4px;">Simpan</button>
                    <a href="{{ route('products.index') }}" style="margin-left:10px; color:gray;">Batal</a>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>