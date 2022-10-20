<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootcamp extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = [
        'kategori_id',
        'nama_bootcamp',
        'slug',
        'harga',
        'deskripsi',
        'thumbnail',
        'kuota',
        'status',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}
