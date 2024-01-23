<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- resources/views/books/create.blade.php -->

                    <h1 class="text-2xl font-semibold mb-4">Formulir Input Kategori</h1>

                    @if(session('success'))
                        <p class="text-green-500">{{ session('success') }}</p>
                    @endif

                    <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="nama_kategori" class="block text-sm font-medium text-gray-700">Nama Kategori:</label>
                            <input type="text" name="nama_kategori" class="mt-1 p-2 border border-gray-300 rounded-md" required>
                        </div>
                        <button type="submit" class="border px-4 py-2 bg-blue-500 text-black rounded-md">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
