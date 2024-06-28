<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbdataparkir extends Model
{
    use HasFactory;

    protected $table = 'tbdataparkir';
    protected $primaryKey = 'iddataparkir';

    protected $fillable = [
        'slot_parkir',
        'status'
    ];
}
