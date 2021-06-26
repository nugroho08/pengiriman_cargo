<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kapal extends Model
{
    use HasFactory;

    protected $primarykey = 'id_kapal';
    protected $table = 'kapal';


    protected $fillable = [
        'id_kapal',
        'nama_kapal',
        'status_kapal',
        'alamat_tujuan',
    ];
}
