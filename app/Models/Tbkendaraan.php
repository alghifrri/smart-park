<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbkendaraan extends Model
{
    use HasFactory;

    protected $table = 'tbkendaraan';
    protected $primaryKey = 'id_kendaraan';

    protected $fillable = [
        'user_id',
        'plat_nomor',
        'jenis_kendaraan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'Id_user');
    }

    public function transaksi()
    {
        return $this->hasMany(Tbtransaksi::class, 'idkendaraan', 'id_kendaraan');
    }

    public function riwayatParkir()
    {
        return $this->hasMany(Tbriwayatparkir::class, 'idkendaraan', 'id_kendaraan');
    }
}

