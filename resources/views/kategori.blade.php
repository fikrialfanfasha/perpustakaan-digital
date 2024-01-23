<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <a href="{{ route('kategori.create') }}" class="border bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded inline-block">
                            +  Tambah Data Kategori
                        </a>
                    </div>
                    
                    <table class="w-full border">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">Nama Kategori</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kategori as $k)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $k->nama_kategori }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-4 py-2 text-center border">Tidak ada data buku.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
