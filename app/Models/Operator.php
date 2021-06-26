<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;
    protected $primarykey = 'nip_operator';
    protected $table = 'operator';


    protected $fillable = [
        'nip_operator',
        'nama_lengkap',
        'email',
        'password',
        'jenis_kelamin',
        'no_telepon',
        'Alamat',
    ];
}
