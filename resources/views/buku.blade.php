<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <tr>
                            <td>Judul Buku</td>
                            <td>Penerbit</td>
                            <td>tahun Terbit</td>
                        </tr>
                        @foreach ($buku as $b)
                        <tr>
                            <td>{{$b->nama_buku}}</td>
                            <td>{{$b->penerbit}}</td>
                            <td>{{$b->tahun_terbit}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
