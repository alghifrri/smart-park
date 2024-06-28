<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbriwayatparkir extends Model
{
    use HasFactory;

    protected $table = 'tbriwayatparkir';

    protected $primaryKey = 'id_riwayat';

 

    protected $fillable = [
        'user_id',
        'idkendaraan',
        'waktu_masuk',
        'waktu_keluar',
        'hargabayar',
        'durasi',
    ];

    // Add a method to calculate duration if necessary
    public function calculateDuration()
    {
        if ($this->waktu_masuk && $this->waktu_keluar) {
            $this->durasi = $this->waktu_masuk->diffInMinutes($this->waktu_keluar);
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'Id_user');
    }

    public function kendaraan()
    {
        return $this->belongsTo(Tbkendaraan::class, 'idkendaraan', 'id_kendaraan');
    }
}