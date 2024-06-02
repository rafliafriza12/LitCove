<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjang';
    use HasFactory;
    protected $fillable = [
        'user_id',
        'book_id',
        'judul',
        'penulis',
        'deskripsi',
        'kategori',
        'harga',
        'stok',
        'image_path',
    ];
}
