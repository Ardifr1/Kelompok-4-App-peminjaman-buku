<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatModel extends Model
{
    protected $table = "riwayat";

    protected $fillable = [
        'user_id',
        'buku_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
        'jumlah'
    ];

    public function buku()
    {
        return $this->belongsTo(bukuModel::class, 'buku_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
