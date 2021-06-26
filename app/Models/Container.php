<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $primarykey = 'id_container';
    protected $table = 'container';


    protected $fillable = [
        'id_container',
        'id_barang',
        'nama_kontainer',
        'jumlah_barang',
        'id_kapal',
    ];
}
