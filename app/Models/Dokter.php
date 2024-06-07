<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokter';

    protected $fillable = [
        'dokter_id',
        'nama_lengkap',
        'jenis_kelamin',
        'spesialisasi',
        'nomor_telepon',
        'alamat',
    ];
}
