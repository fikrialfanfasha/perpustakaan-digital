<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'judul', 
        'pengarang', 
        'penerbit', 
        'tahun_terbit', 
        'deskripsi', 
        'foto_buku', 
        'kategori_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'user_id');
    }
}
