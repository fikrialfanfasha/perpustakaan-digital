<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <a href="{{ route('buku.create') }}" class="border bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded inline-block">
                            +  Tambah Data Buku
                        </a>
                    </div>
                    
                    <table class="w-full border">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">Foto</th>
                                <th class="px-4 py-2 border">Judul Buku</th>
                                <th class="px-4 py-2 border">Pengarang</th>
                                <th class="px-4 py-2 border">Penerbit</th>
                                <th class="px-4 py-2 border">Tahun Terbit</th>
                                <th class="px-4 py-2 border">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($buku as $b)
                                <tr>
                                    <td class="px-4 py-2 border">
                                        <img src="{{ asset('storage/'.$b->foto_buku) }}" alt="Foto Buku" width="100">
                                    </td>
                                    <td class="px-4 py-2 border">{{ $b->judul }}</td>
                                    <td class="px-4 py-2 border">{{ $b->pengarang }}</td>
                                    <td class="px-4 py-2 border">{{ $b->penerbit }}</td>
                                    <td class="px-4 py-2 border">{{ $b->tahun_terbit }}</td>
                                    <td class="px-4 py-2 border">{{ $b->deskripsi }}</td>
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
