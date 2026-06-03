<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Produk</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <a href="{{ route('products.create') }}" style="background: blue; color: white; padding: 8px 16px; border-radius: 4px; display: inline-block; margin-bottom: 20px;">+ Tambah Produk</a>

                @if(session('success'))
                    <div style="color: green; margin-bottom: 20px;">{{ session('success') }}</div>
                @endif

                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr style="background-color: #f2f2f2;">
                            <th style="padding: 12px; border: 1px solid #ddd;">Nama</th>
                            <th style="padding: 12px; border: 1px solid #ddd;">Harga</th>
                            <th style="padding: 12px; border: 1px solid #ddd;">Deskripsi</th>
                            <th style="padding: 12px; border: 1px solid #ddd;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td style="padding: 12px; border: 1px solid #ddd;">{{ $product->name }}</td>
                            <td style="padding: 12px; border: 1px solid #ddd;">Rp {{ number_format($product->price) }}</td>
                            <td style="padding: 12px; border: 1px solid #ddd;">{{ $product->description }}</td>
                            <td style="padding: 12px; border: 1px solid #ddd;">
                                <a href="{{ route('products.edit', $product->id) }}" style="color: orange; margin-right: 10px;">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="color: red;" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>