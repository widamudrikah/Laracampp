<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'peserta_id',
        'bootcamp_id',
        'kode_trx',
        'nama',
        'email',
        'pekerjaan',
        'rekening',
        'expired',
        'cvc',
        'status',
        'total_harga',
        'kode_unik',
    ];

    public function bootcamp()
    {
        return $this->belongsTo(Bootcamp::class,'bootcamp_id','id');
    }

}