<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $connection = 'mysql';
    protected $fillable = [
        'nama_mahasiswa', 'nim_mahasiswa', 'jurusan', 'created_at', 'updated_at'
    ];
}
