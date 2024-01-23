<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- resources/views/books/create.blade.php -->

                    <h1 class="text-2xl font-semibold mb-4">Formulir Input Buku</h1>

                    @if(session('success'))
                        <p class="text-green-500">{{ session('success') }}</p>
                    @endif

                    <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="judul" class="block text-sm font-medium text-gray-700">Judul:</label>
                            <input type="text" name="judul" class="mt-1 p-2 border border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="pengarang" class="block text-sm font-medium text-gray-700">Pengarang:</label>
                            <input type="text" name="pengarang" class="mt-1 p-2 border border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="penerbit" class="block text-sm font-medium text-gray-700">Penerbit:</label>
                            <input type="text" name="penerbit" class="mt-1 p-2 border border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="tahun_terbit" class="block text-sm font-medium text-gray-700">Tahun Terbit:</label>
                            <input type="number" name="tahun_terbit" class="mt-1 p-2 border border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="kategori_id" class="block text-sm font-medium text-gray-700">Kategori:</label>
                            <select name="kategori_id" class="mt-1 p-2 border border-gray-300 rounded-md" required>
                                @foreach($kategori as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi:</label>
                            <textarea name="deskripsi" class="mt-1 p-2 border border-gray-300 rounded-md" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="foto_buku" class="block text-sm font-medium text-gray-700">Foto Buku:</label>
                            <input type="file" name="foto_buku" accept="image/*" class="mt-1 p-2 border border-gray-300 rounded-md" required>
                        </div>

                        <button type="submit" class="px-4 py-2 bg-blue-500 text-black rounded-md border">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
