<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_id',
        'rak_id',
        'kode',
        'judul',
        'deskripsi',
        'stok',
        'penerbit',
        'file',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function rak()
    {
        return $this->belongsTo(Rak::class, 'rak_id');
    }

    public function transaksis()
    {
        return $this->hasMany(TransaksiPeminjaman::class);
    }
}
