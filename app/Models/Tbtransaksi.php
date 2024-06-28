<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbtransaksi extends Model
{
    use HasFactory;

    protected $table = 'tbtransaksi';
    protected $primaryKey = 'idtransaksi';

    protected $fillable = [
        'iduser',
        'idkendaraan',
        'hargaparkir',
        'waktupembayaran'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'Id_user');
    }

    public function kendaraan()
    {
        return $this->belongsTo(Tbkendaraan::class, 'idkendaraan', 'id_kendaraan');
    }

    public function dataparkir()
    {
        return $this->belongsTo(Tbdataparkir::class, 'slot_parkir');
    }
}

