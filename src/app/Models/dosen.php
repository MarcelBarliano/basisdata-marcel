<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $connection = 'mysql';
    protected $fillable = [
        'nama_dosen', 'kd_dosen', 'matakuliah', 'created_at', 'updated_at'
    ];
}
