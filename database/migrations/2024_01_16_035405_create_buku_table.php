<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            //perpustakaan
            $table->increments('id_buku');
            $table->string('judul_buku');
            $table->string('penerbit');
            $table->integer('tahun_terbit');
            $table->timestamps();
            //kasir
            $table->increments('id_produk');
            $table->string('nama_produk');
            $table->integer('harga');
            $table->integer('stok');
            //galeri
            $table->increments('id_album');
            $table->string('nama_album');
            $table->string('deskripsi');
            $table->dropSpatialIndex('tanggal_dibuat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
