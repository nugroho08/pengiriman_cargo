<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelabuhan extends Model
{
    use HasFactory;

    protected $primarykey = 'id_pelabuhan';
    protected $table = 'pelabuhan';


    protected $fillable = [
        'id_pelabuhan',
        'nama_pelabuhan',
        'tempat',
        'Alamat',
    ];
}
